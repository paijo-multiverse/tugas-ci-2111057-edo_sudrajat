<?php

namespace App\Controllers;

use App\Models\SiswaModel;

class Siswa extends BaseController
{
    protected $md;

    public function __construct()
    {
        $this->md = new SiswaModel();
    }

    // Form
    public function index()
    {
        $data['data'] = $this->md->findAll();
        return view('v_siswa', $data);
    }

    public function form_tambah()
    {
        return view('v_tambah-siswa');
    }

    public function form_ubah($kd)
    {
        $data['data'] = $this->md->find($kd); // Menggunakan find untuk mengambil data berdasarkan ID
        if ($data['data'] === null) {
            return redirect()->to(base_url('siswa'))->with('error', 'Data tidak ditemukan');
        }
        return view('v_ubah-siswa', $data);
    }

    // Proses
    public function tambah()
    {
        $this->md->insert($this->request->getPost());
        return redirect()->to(base_url('siswa'));
    }

    public function ubah($kd)
    {
        $this->md->update($kd, $this->request->getPost());
        return redirect()->to(base_url('siswa'));
    }

    public function hapus($kd)
    {
        $this->md->delete($kd);
        return redirect()->to(base_url('siswa'));
    }

    public function beranda()
    {
        return view('v_beranda-sekolah');
    }
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table = "siswa";
    protected $primaryKey = "id";
    protected $allowedFields = ['nama', 'ttl', 'jenis_kelamin', 'asal_sekolah', 'jurusan', 'foto'];
    protected $returnType = 'object';
}

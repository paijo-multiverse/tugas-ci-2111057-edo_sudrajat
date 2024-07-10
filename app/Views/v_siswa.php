<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar PPDB</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .vertical-middle {
            vertical-align: middle !important;
        }

        .nowrap {
            white-space: nowrap;
        }

        .bawah {
            margin-bottom: 10px;
        }

        .dark-mode {
            background-color: #121212;
            color: #ffffff;
        }

        .dark-mode .navbar {
            background-color: #333;
        }

        .dark-mode .table {
            color: #ffffff;
        }

        .dark-mode .btn {
            color: #ffffff;
        }

        .dark-mode .table-bordered th,
        .dark-mode .table-bordered td {
            border-color: #444;
        }

        .dark-mode a.nav-link {
            color: #ffffff;
        }

        .dark-mode .btn-primary,
        .dark-mode .btn-warning,
        .dark-mode .btn-danger {
            color: #000;
        }

        .ukuran {
            width: 60px !important;
        }

        img {
            border-radius: 100%;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="">PPDB SMK Muhammadiyah 1 Balikpapan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('siswa/beranda'); ?>">Beranda</a>
                </li>
            </ul>
            <button id="toggleDarkMode" class="btn btn-secondary ml-auto">Toggle Dark Mode</button>
        </div>
    </nav>

    <div class="container mt-4">
        <h1>Daftar Siswa Baru SMK Muhammadiyah 1 Balikpapan</h1>
        <a href="<?= base_url('siswa/form_tambah'); ?>" class="btn btn-primary my-3">Tambah Data</a>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="nowrap text-center">No</th>
                        <th class="nowrap text-center">Nama</th>
                        <th class="nowrap text-center">Tanggal Lahir</th>
                        <th class="nowrap text-center">Jenis Kelamin</th>
                        <th class="nowrap text-center">Asal Sekolah</th>
                        <th class="nowrap text-center">Jurusan</th>
                        <th class="nowrap text-center">Foto</th>
                        <th class="nowrap text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($data as $r) : ?>
                        <tr>
                            <td class="vertical-middle text-center"><?= $i++; ?></td>
                            <td class="vertical-middle"><?= $r->nama; ?></td>
                            <td class="vertical-middle"><?= $r->ttl; ?></td>
                            <td class="vertical-middle"><?= $r->jenis_kelamin; ?></td>
                            <td class="vertical-middle"><?= $r->asal_sekolah; ?></td>
                            <td class="vertical-middle"><?= $r->jurusan; ?></td>
                            <td class="vertical-middle">
                                <img src="<?= base_url('img/' . $r->foto); ?>" alt="Foto Siswa" width="100">
                            </td>
                            <td class="vertical-middle text-center">
                                <a href="<?= base_url('siswa/form_ubah/' . $r->id); ?>" class="btn btn-warning btn-sm bawah ukuran">Ubah</a>
                                <a href="<?= base_url('siswa/hapus/' . $r->id); ?>" class="btn btn-danger btn-sm ukuran" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        document.getElementById('toggleDarkMode').addEventListener('click', function () {
            document.body.classList.toggle('dark-mode');
        });
    </script>
</body>

</html>

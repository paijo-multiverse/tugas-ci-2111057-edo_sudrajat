<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Siswa</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 56px;
        }

        .container {
            max-width: 600px;
            margin-top: 50px;
        }

        .card {
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .dark-mode {
            background-color: #343a40;
            color: white;
        }

        .dark-mode .card {
            background-color: #495057;
            color: white;
        }

        .dark-mode .navbar {
            background-color: #212529;
        }

        .dark-mode .navbar-brand,
        .dark-mode .nav-link {
            color: black;
        }

        .dark-mode .btn {
            color: white;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="#">SMK Muhammadiyah 1 Balikpapan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('siswa/beranda'); ?>">Beranda</a>
                </li>
            </ul>
            <button class="btn btn-outline-dark ml-auto" id="toggle-dark-mode">Toggle Dark Mode</button>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <div class="card">
            <h4 class="card-title text-center">Ubah Data Siswa</h4>
            <form action="<?= base_url('siswa/ubah/' . $data->id); ?>" method="post">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= isset($data->nama) ? $data->nama : ''; ?>">
                </div>
                <div class="form-group">
                    <label for="ttl">Tempat, Tanggal Lahir</label>
                    <input type="text" class="form-control" id="ttl" name="ttl" value="<?= isset($data->ttl) ? $data->ttl : ''; ?>">
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?= isset($data->jenis_kelamin) ? $data->jenis_kelamin : ''; ?>">
                </div>
                <div class="form-group">
                    <label for="asal_sekolah">Asal Sekolah</label>
                    <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" value="<?= isset($data->asal_sekolah) ? $data->asal_sekolah : ''; ?>">
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?= isset($data->jurusan) ? $data->jurusan : ''; ?>">
                </div>
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="text" class="form-control" id="foto" name="foto" value="<?= isset($data->foto) ? $data->foto : ''; ?>">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                <a href="<?= base_url('siswa'); ?>" class="btn btn-secondary btn-block mt-2">Kembali</a>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.getElementById('toggle-dark-mode').addEventListener('click', function() {
            document.body.classList.toggle('dark-mode');
        });
    </script>
</body>

</html>

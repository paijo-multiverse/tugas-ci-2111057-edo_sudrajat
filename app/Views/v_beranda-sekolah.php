<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Sekolah</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 56px;
        }

        .card {
            margin-bottom: 20px;
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
            color: #343a40;
        }

        .dark-mode .jumbotron {
            background-color: #495057;
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
                    <a class="nav-link" href="#visi-misi">Visi & Misi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#kontak">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('siswa/index'); ?>">Daftar Siswa Baru</a>
                </li>
            </ul>
            <button class="btn btn-outline-dark ml-auto" id="toggle-dark-mode">Toggle Dark Mode</button>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <div class="jumbotron mt-4">
            <h1 class="display-4">Selamat Datang di SMK Muhammadiyah 1 Balikpapan</h1>
            <p class="lead">Membentuk generasi penerus bangsa yang berprestasi dan berakhlak mulia.</p>
        </div>

        <!-- Visi & Misi Section -->
        <div id="visi-misi" class="card">
            <div class="card-header bg-primary text-white">
                <h3>Visi & Misi</h3>
            </div>
            <div class="card-body">
                <h5 class="card-title">Visi</h5>
                <p class="card-text">Menjadi sekolah unggulan yang menghasilkan lulusan berprestasi, berkarakter, dan berwawasan global.</p>
                <h5 class="card-title">Misi</h5>
                <ul class="card-text">
                    <li>Meningkatkan kualitas pendidikan melalui metode pembelajaran yang inovatif.</li>
                    <li>Menanamkan nilai-nilai moral dan etika kepada seluruh siswa.</li>
                    <li>Menjalin kerjasama dengan berbagai pihak untuk mendukung pengembangan sekolah.</li>
                </ul>
            </div>
        </div>

        <!-- Kontak Section -->
        <div id="kontak" class="card">
            <div class="card-header bg-success text-white">
                <h3>Kontak</h3>
            </div>
            <div class="card-body">
                <p>Alamat: Jl. S.Parman No. 17, Kota Balikpapan</p>
                <p>Telepon: (021) 12345678</p>
                <p>Email: info@sekolahmuhammadiyah1balikpapan.sch.id</p>
            </div>
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
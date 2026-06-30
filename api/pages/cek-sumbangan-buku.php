<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Universitas Riau Kepulauan (UNRIKA)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        .card-download {
            transition: transform 0.3s, box-shadow 0.3s;
            border-left: 5px solid #0d6efd;
        }
        .card-download:hover {
            transform: translateY(-5px);
            box-shadow: 0 1rem 3rem rgba(0,0,0,.175) !important;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm sticky-top py-2">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center text-decoration-none" href="../index.php">
                <img src="../assets/img/logo-unrika.png" alt="Logo UNRIKA" class="navbar-logo">
                <div class="brand-text-container">
                    <div class="brand-title">Perpustakaan</div>
                    <div class="brand-subtitle">Universitas Riau Kepulauan</div>
                    <div class="brand-tagline">Koleksi & Layanan Digital</div>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="../index.php">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="../profil.php">Profil</a></li>
                    <li class="nav-item"><a class="nav-link active" href="../layanan.php">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="../daftar-hadir.php">Daftar Hadir</a></li>
                    <li class="nav-item"><a class="nav-link" href="../referensi.php">Referensi</a></li>
                    <li class="nav-item"><a class="nav-link" href="../kontak.php">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="bg-primary text-white py-5">
        <div class="container text-center">
            <h1 class="fw-bold">Layanan Sumbangan Buku</h1>
            <p class="lead mb-0">Panduan dan formulir konfirmasi sumbangan buku/koleksi untuk Perpustakaan UNRIKA</p>
        </div>
    </header>

    <section class="py-5 flex-grow-1 d-flex align-items-center">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <!-- Keterangan Tambahan -->
                <div class="col-lg-8 mb-2">
                    <div class="card border-0 shadow-sm rounded-4 p-4 mb-4 bg-light border-start border-primary border-5">
                        <div class="card-body">
                            <h3 class="card-title text-primary fw-bold mb-3"><i class="fa-solid fa-circle-info me-2"></i> Ketentuan Sumbangan Buku</h3>
                            <p class="card-text text-secondary" style="line-height: 1.7;">
                                Perpustakaan Universitas Riau Kepulauan (UNRIKA) menerima sumbangan buku, referensi, maupun karya ilmiah dari mahasiswa, dosen, maupun masyarakat umum untuk memperkaya khazanah koleksi perpustakaan.
                            </p>
                            <p class="card-text text-secondary mb-0" style="line-height: 1.7;">
                                Pastikan buku atau koleksi yang disumbangkan dalam kondisi baik dan layak dibaca. Silakan unduh formulir di bawah ini untuk melengkapi proses penyerahan sumbangan buku Anda.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Tombol Unduh Formulir PDF -->
                <div class="col-lg-8 mb-4">
                    <div class="card card-download h-100 border-0 shadow-sm p-4 rounded-4">
                        <div class="card-body d-flex align-items-center py-3">
                            <div class="fs-1 text-primary me-4"><i class="fa-solid fa-file-pdf"></i></div>
                            <div>
                                <h4 class="card-title fw-bold text-dark">Unduh Formulir Sumbangan Buku</h4>
                                <p class="card-text text-muted mb-3">Unduh formulir sumbangan buku berikut untuk dicetak dan dilampirkan saat menyerahkan buku ke perpustakaan.</p>
                                <a href="assets/pdf/formulir-sumbangan-buku.pdf" download="formulir-sumbangan-buku.pdf" class="btn btn-primary fw-bold px-4 py-2 shadow-sm">
                                    <i class="fa-solid fa-download me-2"></i> Unduh formulir-sumbangan-buku.pdf
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <footer class="bg-dark text-light py-4 text-center mt-auto">
        <div class="container">
            <p class="mb-0">&copy; 2026 Perpustakaan Universitas Riau Kepulauan (UNRIKA). All Rights Reserved.</p>
            <p class="mb-0 small text-white mt-1">Developed with <i class="fa-solid fa-heart text-danger"></i> by <strong>M Rizky Apryansyah</strong></p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
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
        .alur-img {
            max-width: 100%;
            max-height: 550px;
            height: auto;
            border-radius: 12px;
            border: 5px solid #fff;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }
        .card-download {
            transition: transform 0.3s, box-shadow 0.3s;
            border-left: 5px solid #0d6efd;
            height: 100%;
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
            <h1 class="fw-bold">Layanan Cek Plagiarisme</h1>
            <p class="lead mb-0">Panduan dan prosedur pengecekan tingkat orisinalitas karya ilmiah / tugas akhir di UNRIKA</p>
        </div>
    </header>

    <section class="py-5">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <!-- Keterangan Tambahan -->
                <div class="col-lg-10 mb-2">
                    <div class="card border-0 shadow-sm rounded-4 p-4 bg-light border-start border-primary border-5">
                        <div class="card-body">
                            <h3 class="card-title text-primary fw-bold mb-3"><i class="fa-solid fa-circle-info me-2"></i> Ketentuan Pengecekan Plagiarisme</h3>
                            <p class="card-text text-secondary" style="line-height: 1.7;">
                                Layanan pengecekan plagiarisme (plagiarism check) disediakan oleh Perpustakaan Universitas Riau Kepulauan (UNRIKA) untuk memastikan integritas akademik dan orisinalitas karya ilmiah, skripsi, maupun tugas akhir mahasiswa sebelum diajukan untuk sidang atau yudisium.
                            </p>
                            <p class="card-text text-secondary mb-0" style="line-height: 1.7;">
                                Pastikan naskah atau dokumen yang akan dicek telah disiapkan sesuai dengan format dan ketentuan universitas. Silakan unduh panduan atau formulir dan ikuti alur pengecekan di samping.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Bagian Bersebelahan: Tombol Unduh (Kiri) & Gambar Alur (Kanan) -->
                <div class="col-lg-10 mt-4">
                    <div class="row g-4 align-items-center">
                        <!-- Kolom Kiri: Unduh PDF -->
                        <div class="col-md-5">
                            <div class="card card-download border-0 shadow-sm p-4 rounded-4 d-flex justify-content-center">
                                <div class="card-body d-flex flex-column justify-content-center text-center text-md-start">
                                    <div class="fs-1 text-primary mb-3"><i class="fa-solid fa-file-pdf"></i></div>
                                    <div>
                                        <h4 class="card-title fw-bold text-dark">Formulir Cek Plagiarisme</h4>
                                        <p class="card-text text-muted mb-4">Unduh formulir untuk pengecekan tingkat kesamaan dokumen di perpustakaan UNRIKA.</p>
                                        <a href="../assets/pdf/formulir-cek-plagiarisme.pdf" download="panduan-plagiarisme.pdf" class="btn btn-primary btn-lg fw-bold w-100 shadow-sm">
                                            <i class="fa-solid fa-download me-2"></i> Unduh PDF Formulir
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Kolom Kanan: Gambar Alur Potrait -->
                        <div class="col-md-7 text-center">
                            <div class="p-3 bg-white rounded-4 shadow-sm border h-100 d-flex flex-column justify-content-center">
                                <div class="mb-3">
                                    <h5 class="fw-bold text-dark mb-0"><i class="fa-solid fa-shuffle me-2"></i> Alur Pengecekan Plagiarisme</h5>
                                </div>
                                <div class="d-flex justify-content-center overflow-hidden py-2">
                                    <img src="../assets/img/alur-cek-plagiarisme.jpg" alt="Alur Cek Plagiarisme" class="alur-img">
                                </div>
                                <p class="text-muted small mb-0 mt-3 fw-semibold">Bagan Alur Pengecekan Plagiarisme</p>
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
<?php
include 'includes/header.php';
?>

    <style>
        .card-layanan {
            transition: transform 0.3s, box-shadow 0.3s;
            border-left: 5px solid #0d6efd;
        }
        .card-layanan:hover {
            transform: translateY(-5px);
            box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important;
        }
    </style>

    <header class="bg-primary text-white py-5">
        <div class="container text-center">
            <h1 class="fw-bold">Layanan Perpustakaan</h1>
            <p class="lead">Berbagai kemudahan akses layanan akademik untuk Civitas Academica UNRIKA</p>
        </div>
    </header>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4">
                
                <div class="col-md-6">
                    <div class="card card-layanan h-100 border-0 shadow-sm p-3">
                        <div class="card-body d-flex align-items-start">
                            <div class="fs-2 text-primary me-3"><i class="fa-solid fa-id-card"></i></div>
                            <div>
                                <h4 class="card-title fw-bold">Bebas Pustaka</h4>
                                <p class="card-text text-muted">Pengajuan surat keterangan bebas pustaka bagi mahasiswa tingkat akhir sebagai syarat kelulusan dan yudisium.</p>
                                <a href="/pages/bebas-pustaka.html" target="_blank" class="btn btn-outline-primary btn-sm"><i class="fa-solid fa-external-link-alt"></i> Ajukan Bebas Pustaka</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card card-layanan h-100 border-0 shadow-sm p-3">
                        <div class="card-body d-flex align-items-start">
                            <div class="fs-2 text-primary me-3"><i class="fa-solid fa-file-shield"></i></div>
                            <div>
                                <h4 class="card-title fw-bold">Cek Plagiarisme</h4>
                                <p class="card-text text-muted">Layanan pengecekan tingkat kemiripan (Turnitin) untuk naskah skripsi, jurnal, atau karya ilmiah mahasiswa dan dosen.</p>
                                <a href="/pages/cek-plagiarisme.html" target="_blank" class="btn btn-outline-primary btn-sm"><i class="fa-solid fa-external-link-alt"></i> Ajukan Cek Plagiat</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card card-layanan h-100 border-0 shadow-sm p-3">
                        <div class="card-body d-flex align-items-start">
                            <div class="fs-2 text-primary me-3"><i class="fa-solid fa-comments"></i></div>
                            <div>
                                <h4 class="card-title fw-bold">Layanan Konsultasi</h4>
                                <p class="card-text text-muted">Butuh bantuan atau panduan penelusuran referensi, sitasi, dan literatur ilmiah? Silakan ajukan konsultasi dengan pustakawan.</p>
                                <a href="/pages/layanan-konsultasi.html" target="_blank" class="btn btn-outline-primary btn-sm"><i class="fa-solid fa-external-link-alt"></i> Mulai Konsultasi</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card card-layanan h-100 border-0 shadow-sm p-3">
                        <div class="card-body d-flex align-items-start">
                            <div class="fs-2 text-primary me-3"><i class="fa-solid fa-face-smile-beam"></i></div>
                            <div>
                                <h4 class="card-title fw-bold">Survei Kepuasan Pelayanan</h4>
                                <p class="card-text text-muted">Bantu kami meningkatkan kualitas layanan perpustakaan dengan mengisi survei kepuasan pengunjung secara berkala.</p>
                                <a href="/pages/cek-kepuasan.html" target="_blank" class="btn btn-outline-primary btn-sm"><i class="fa-solid fa-external-link-alt"></i> Isi Survei</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card card-layanan h-100 border-0 shadow-sm p-3">
                        <div class="card-body d-flex align-items-start">
                            <div class="fs-2 text-primary me-3"><i class="fa-solid fa-magnifying-glass"></i></div>
                            <div>
                                <h4 class="card-title fw-bold">Cari Referensi Buku</h4>
                                <p class="card-text text-muted">Cari judul buku, skripsi, atau literatur yang tersedia sebagai referensi</p>
                                <a href="https://www.perpusnas.go.id/" target="_blank" class="btn btn-outline-primary btn-sm"><i class="fa-solid fa-external-link-alt"></i> Buka Katalog Buku</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card card-layanan h-100 border-0 shadow-sm p-3">
                        <div class="card-body d-flex align-items-start">
                            <div class="fs-2 text-primary me-3"><i class="fa-solid fa-hand-holding-heart"></i></div>
                            <div>
                                <h4 class="card-title fw-bold">Sumbangan Buku</h4>
                                <p class="card-text text-muted">Formulir pelaporan atau konfirmasi bagi mahasiswa/dosen/umum yang ingin menyumbangkan buku atau koleksi ke perpustakaan.</p>
                                <a href="/pages/cek-sumbangan-buku.html" target="_blank" class="btn btn-outline-primary btn-sm"><i class="fa-solid fa-external-link-alt"></i> Konfirmasi Sumbangan</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php
    include 'includes/footer.php';
    ?>
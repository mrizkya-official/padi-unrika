<?php
include 'includes/header.php';
?>

    <style>
        /* Mengatur ukuran logo gambar di navbar secara presisi */
        .navbar-logo-full {
            height: 48px; 
            width: auto;
            display: block;
        }

        /* Mengatur border dan ukuran foto pustakawan */
        .profile-img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border: 5px solid #fff;
        }
    </style>

    <header class="bg-primary text-white py-5">
        <div class="container text-center">
            <h1 class="fw-bold">Profil Perpustakaan</h1>
            <p class="lead mb-0">Mengenal lebih dekat Visi, Misi, Struktur, dan Pimpinan Perpustakaan UNRIKA</p>
        </div>
    </header>

    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card h-100 border-0 shadow-sm rounded-4">
                        <div class="card-body d-flex flex-column justify-content-center">
                            <h3 class="card-title text-primary fw-bold mb-3"><i class="fa-solid fa-eye"></i> Visi</h3>
                            <p class="card-text text-center fw-semibold text-dark mb-0" style="line-height: 1.6;">MENJADI PERPUSTAKAAN PERGURUAN TINGGI YANG UNGGUL, INOVATIF DAN BERBASIS TEKNOLOGI DALAM MENDUKUNG TRIDHARMA PERGURUAN TINGGI SERTA PENGEMBANGAN ILMU PENGETAHUAN DI TINGKAT NASIONAL DAN REGIONAL</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card h-100 border-0 shadow-sm rounded-4">
                        <div class="card-body">
                            <h3 class="card-title text-primary fw-bold mb-3"><i class="fa-solid fa-bullseye"></i> Misi</h3>
                            <ol class="card-text ps-3 text-secondary mb-0" style="line-height: 1.6;">
                                <li class="mb-2">Menyediakan sumber informasi ilmiah yang lengkap, mutakhir dan relevan untuk mendukung kegiatan pendidikan, penelitian dan pengabdian kepada masyarakat.</li>
                                <li class="mb-2">Mengembangkan layanan perpustakaan berbasis digital dan teknologi informasi yang mudah di akses oleh seluruh civitas akademika.</li>
                                <li class="mb-2">Meningkatkan kualitas layanan melalui profesionalisme pustakawan dan pengelolaan yang modern.</li>
                                <li class="mb-2">Mendorong budaya literasi, riset dan publikasi ilmiah di lingkungan universitas.</li>
                                <li class="mb-2">Menjalin kerja sama dengan berbagai lembaga perpustakaan dan institusi lain dalam rangka pengembangan sumber daya dan layanan informasi.</li>
                                <li>Mendukung repositori institusi sebagai pusat penyimpanan dan diseminasi karya ilmiah civitas akademika.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold text-dark">PUSTAKAWAN</h2>
                <p class="text-muted mb-0">Struktural yang memimpin dan mengelola operasional perpustakaan UNRIKA</p>
            </div>
            
            <div class="row justify-content-center mb-5">
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="card border-0 shadow-sm p-4 rounded-4 h-100">
                        <img src="assets/img/kepala-perpustakaan.jpg" class="profile-img rounded-circle mx-auto mb-3 shadow-sm" alt="Foto Kepala Perpustakaan">
                        <div class="card-body p-0">
                            <h5 class="fw-bold mb-1 text-dark">Rahmayandi Mulda, S.IP., M.IP.</h5>
                            <p class="text-muted small mb-3">Kepala Perpustakaan</p>
                            <p class="card-text small text-secondary fst-italic mb-0">"Perpustakaan adalah jantungnya universitas, mari jadikan tempat ini sebagai rumah yang nyaman untuk berkembangnya ilmu pengetahuan."</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="card border-0 shadow-sm p-4 rounded-4 h-100">
                        <img src="assets/img/indra.jpeg" class="profile-img rounded-circle mx-auto mb-3 shadow-sm" alt="Bagian Klasifikasi">
                        <div class="card-body p-0">
                            <h5 class="fw-bold mb-1 text-dark">Indra Jaya, S.I.Pust</h5>
                            <p class="text-muted small mb-0">Bagian Klasifikasi</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="card border-0 shadow-sm p-4 rounded-4 h-100">
                        <img src="assets/img/siti.jpeg" class="profile-img rounded-circle mx-auto mb-3 shadow-sm" alt="Bagian Administrasi">
                        <div class="card-body p-0">
                            <h5 class="fw-bold mb-1 text-dark">Siti Zahara Tampubolon</h5>
                            <p class="text-muted small mb-0">Bagian Administrasi</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="card border-0 shadow-sm p-4 rounded-4 h-100">
                        <img src="assets/img/khairul.jpeg" class="profile-img rounded-circle mx-auto mb-3 shadow-sm" alt="Bagian Digital Library">
                        <div class="card-body p-0">
                            <h5 class="fw-bold mb-1 text-dark">Khairul Rahman</h5>
                            <p class="text-muted small mb-0">Bagian Digital Library</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="fw-bold text-dark">Struktur Kepengurusan</h2>
                <p class="text-muted mb-0">Bagan alur koordinasi dan staf yang bertugas di Perpustakaan UNRIKA</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="border-0 rounded-4 p-3 bg-white shadow-sm border">
                        <img src="assets/img/struktur-perpustakaan.png" alt="Struktur Kepengurusan Perpustakaan UNRIKA" class="img-fluid rounded-4">
                        <p class="text-muted mt-3 small mb-0 fw-semibold">Bagan Struktur Organisasi Perpustakaan UNRIKA</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <?php
    include 'includes/footer.php';
    ?>
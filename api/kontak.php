<?php
include 'includes/header.php';
?>

<style>
        .contact-card {
            transition: transform 0.3s;
            border-top: 5px solid #0d6efd;
        }
        .contact-card:hover {
            transform: translateY(-5px);
        }
        .map-container {
            position: relative;
            overflow: hidden;
            padding-top: 56.25%; /* 16:9 Aspect Ratio */
        }
        .map-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }
    </style>

    <header class="bg-primary text-white py-5">
        <div class="container text-center">
            <h1 class="fw-bold">Hubungi Kami</h1>
            <p class="lead">Jangan ragu untuk menghubungi kami jika memiliki pertanyaan atau kendala</p>
        </div>
    </header>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4 mb-5">
                <div class="col-md-4">
                    <div class="card contact-card h-100 border-0 shadow-sm p-3 text-center">
                        <div class="card-body">
                            <div class="fs-2 text-primary mb-3"><i class="fa-solid fa-location-dot"></i></div>
                            <h5 class="card-title fw-bold">Alamat</h5>
                            <p class="card-text text-muted small">Jl. Pahlawan No. 99, Bukit Tempayan, Kecamatan Batu Aji, Kota Batam, Kepulauan Riau (Kode Pos 29425)</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card contact-card h-100 border-0 shadow-sm p-3 text-center">
                        <div class="card-body">
                            <div class="fs-2 text-primary mb-3"><i class="fa-solid fa-headset"></i></div>
                            <h5 class="card-title fw-bold">Kontak</h5>
                            <p class="card-text text-muted small mb-1"><i class="fa-solid fa-envelope me-2"></i>dokumen@digilib.unrika.ac.id</p>
                            <p class="card-text text-muted small"><i class="fa-solid fa-phone me-2"></i>+62 812-425-256-01</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card contact-card h-100 border-0 shadow-sm p-3 text-center">
                        <div class="card-body">
                            <div class="fs-2 text-primary mb-3"><i class="fa-solid fa-clock"></i></div>
                            <h5 class="card-title fw-bold">Jam Layanan</h5>
                            <p class="card-text text-muted small mb-1"><strong>Senin - Kamis:</strong> 08.00 - 16.00 WIB</p>
                            <p class="card-text text-muted small mb-1"><strong>Jumat:</strong> 08.00 - 16.30 WIB</p>
                            <p class="card-text text-muted small"><strong>Istirahat (Jumat):</strong> 11.30 - 13.30 WIB</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card border-0 shadow-sm rounded-3 overflow-hidden">
                        <div class="card-header bg-white py-3">
                            <h5 class="fw-bold mb-0 text-center"><i class="fa-solid fa-map-location-dot me-2"></i> Lokasi Perpustakaan UNRIKA di Peta</h5>
                        </div>
                        <div class="map-container">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.1499789074937!2d103.96581207581737!3d1.0487363624679706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d98de61cee5c59%3A0x4898bf40ffd100a2!2sUNRIKA%20BATAM!5e0!3m2!1sen!2sid!4v1782826573343!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <?php
    include 'includes/footer.php';
    ?>
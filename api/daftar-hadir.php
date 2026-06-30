<?php
include 'includes/header.php';
?>
    <style>
        .qr-code-img {
            max-width: 250px;
            height: auto;
            border: 5px solid #fff;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }
    </style>

    <header class="bg-primary text-white py-5">
        <div class="container text-center">
            <h1 class="fw-bold">Daftar Hadir Pengunjung</h1>
            <p class="lead">Silakan pindai (scan) QR Code di bawah ini untuk mengisi buku tamu perpustakaan</p>
        </div>
    </header>

    <section class="py-5 bg-light text-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card border-0 shadow-sm p-4 rounded-4">
                    <div class="card-body">
                        <h3 class="fw-bold text-primary mb-3"><i class="fa-solid fa-qrcode fa-2x d-block mb-2 text-dark"></i> Buku Tamu Digital</h3>
                        <p class="text-muted mb-4">Bagi seluruh civitas akademika maupun tamu yang berkunjung ke Perpustakaan UNRIKA, dimohon untuk mengisi daftar hadir terlebih dahulu melalui tautan atau memindai kode QR berikut:</p>
                        
                        <div class="mb-4">
                            <img src="https://api.qrserver.com/v1/create-qr-code/?size=250x250&data=https://docs.google.com/forms/d/e/1FAIpQLSfbtmsEW9Lk8AzH54AlYt46t4brT2Ht-PblvrarFeUaEVYbYA/viewform" 
                                 alt="QR Code Daftar Hadir" 
                                 class="img-fluid rounded-3 border border-3 border-light shadow-sm" 
                                 style="max-width: 250px; height: auto;">
                        </div>

                        <div class="alert alert-info py-3 px-3 small rounded-3" role="alert">
                            <i class="fa-solid fa-link me-2"></i> Atau akses langsung tautan berikut:<br>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfbtmsEW9Lk8AzH54AlYt46t4brT2Ht-PblvrarFeUaEVYbYA/viewform" target="_blank" class="text-decoration-none fw-bold d-block mt-1 text-break">
                                https://docs.google.com/forms/d/e/1FAIpQLSfbtmsEW9Lk8AzH54AlYt46t4brT2Ht-PblvrarFeUaEVYbYA/viewform
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h4 class="fw-bold mb-3">Panduan Pengunjung:</h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="fa-solid fa-circle-check text-primary me-2"></i> Buka aplikasi kamera pada *smartphone* Anda atau pemindai kode QR (*QR Scanner*).</li>
                        <li class="list-group-item"><i class="fa-solid fa-circle-check text-primary me-2"></i> Arahkan kamera ke gambar QR Code di atas.</li>
                        <li class="list-group-item"><i class="fa-solid fa-circle-check text-primary me-2"></i> Ketuk notifikasi atau *link* yang muncul di layar untuk membuka formulir.</li>
                        <li class="list-group-item"><i class="fa-solid fa-circle-check text-primary me-2"></i> Isi data diri Anda (NIM/NIP, Nama, Program Studi, dan Keperluan) dengan lengkap dan benar.</li>
                        <li class="list-group-item"><i class="fa-solid fa-circle-check text-primary me-2"></i> Klik tombol "Submit" atau "Kirim" setelah selesai.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

<?php
    include 'includes/footer.php';
    ?>
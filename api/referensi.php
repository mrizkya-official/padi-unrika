<?php
include 'includes/header.php';
?>

    <style>
        .ref-card {
            transition: all 0.2s ease-in-out;
        }
        .ref-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.15) !important;
        }
        .ref-link {
            text-decoration: none;
            color: #212529;
            display: block;
            padding: 8px 12px;
            border-radius: 4px;
            background-color: #f8f9fa;
            margin-bottom: 8px;
            border-left: 4px solid #6c757d;
            transition: all 0.2s;
        }
        .ref-link:hover {
            background-color: #e9ecef;
            border-left-color: #0d6efd;
            color: #0d6efd;
        }
        .ref-header {
            background-color: #0d6efd;
            color: white;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
            padding: 12px;
            font-weight: bold;
        }
    </style>

    <header class="bg-primary text-white py-5">
        <div class="container text-center">
            <h1 class="fw-bold">Referensi & E-Resources</h1>
            <p class="lead">Kumpulan akses repositori, jurnal nasional, dan jurnal internasional terpercaya</p>
        </div>
    </header>

    <section class="py-5 bg-light">
        <div class="container">
            
            <div class="alert alert-warning mb-5" role="alert">
                <i class="fa-solid fa-circle-info me-2"></i> <strong>Catatan Akses:</strong> Beberapa jurnal internasional mungkin memerlukan akses jaringan kampus (VPN/IP Kampus) atau akun institusi yang berlaku untuk mengunduh (*download*) jurnal secara penuh (*full-text*).
            </div>

            <div class="row g-4">
                
                <div class="col-lg-12">
                    <div class="card border-0 shadow-sm rounded-3 ref-card">
                        <div class="ref-header d-flex align-items-center">
                            <i class="fa-solid fa-globe me-2"></i> Jurnal Internasional
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="https://doaj.org/" target="_blank" class="ref-link">DOAJ (Directory of Open Access Journals)</a>
                                    <a href="https://www.gale.com/" target="_blank" class="ref-link">Gale</a>
                                    <a href="https://www.springernature.com/gp" target="_blank" class="ref-link">Springer Nature</a>
                                    <a href="https://www.elsevier.com/" target="_blank" class="ref-link">Elsevier</a>
                                    <a href="https://www.proquest.com/" target="_blank" class="ref-link">ProQuest</a>
                                    <a href="https://about.ebsco.com/products/research-databases/e-journals-database" target="_blank" class="ref-link">EBSCO E-Journals Database</a>
                                    <a href="https://www.emerald.com/" target="_blank" class="ref-link">Emerald Publishing</a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://ieeexplore.ieee.org/Xplore/home.jsp" target="_blank" class="ref-link">IEEE Xplore</a>
                                    <a href="https://www.sciencedirect.com/" target="_blank" class="ref-link">ScienceDirect</a>
                                    <a href="https://onlinelibrary.wiley.com/" target="_blank" class="ref-link">Wiley Online Library</a>
                                    <a href="https://www.jstor.org/" target="_blank" class="ref-link">JSTOR</a>
                                    <a href="https://journals.sagepub.com/" target="_blank" class="ref-link">SAGE Journals</a>
                                    <a href="https://www.tandfonline.com/" target="_blank" class="ref-link">Taylor & Francis Online</a>
                                    <a href="https://mjl.clarivate.com/search-results" target="_blank" class="ref-link">Web of Science (Master Journal List)</a>
                                    <a href="https://www.cambridge.org/" target="_blank" class="ref-link">Cambridge University Press</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card border-0 shadow-sm rounded-3 ref-card h-100">
                        <div class="ref-header d-flex align-items-center bg-success">
                            <i class="fa-solid fa-graduation-cap me-2"></i> Mesin Pencari Akademik
                        </div>
                        <div class="card-body d-flex flex-column justify-content-between">
                            <p class="card-text text-muted">Gunakan Google Scholar untuk mencari literatur akademis secara luas, termasuk artikel, tesis, buku, dan abstrak dari penerbit akademis dan masyarakat profesional.</p>
                            <a href="https://scholar.google.com/" target="_blank" class="btn btn-success text-white w-100 mt-3"><i class="fa-solid fa-external-link-alt me-2"></i> Buka Google Scholar</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card border-0 shadow-sm rounded-3 ref-card h-100">
                        <div class="ref-header d-flex align-items-center bg-dark">
                            <i class="fa-solid fa-landmark me-2"></i> Perpustakaan Nasional RI
                        </div>
                        <div class="card-body d-flex flex-column justify-content-between">
                            <p class="card-text text-muted">Daftarkan diri Anda sebagai anggota Perpusnas untuk mendapatkan akses gratis ke ribuan *e-book*, jurnal internasional berbayar yang dilanggan, dan literatur lainnya secara legal.</p>
                            <a href="https://www.perpusnas.go.id/" target="_blank" class="btn btn-dark w-100 mt-3"><i class="fa-solid fa-external-link-alt me-2"></i> Buka Perpusnas RI</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 mt-3">
                    <div class="card border-0 shadow-sm rounded-3 ref-card">
                        <div class="ref-header d-flex align-items-center" style="background-color: #198754; background: linear-gradient(to right, #0d6efd, #198754);">
                            <i class="fa-solid fa-book me-2"></i> Jurnal & Repositori Nasional
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="p-3 border rounded bg-light">
                                        <h5 class="fw-bold text-success"><i class="fa-solid fa-feather me-2"></i> GARUDA (Rujukan Digital)</h5>
                                        <p class="text-muted small mb-3">Portal penemuan akses terbuka untuk karya ilmiah dan penelitian Indonesia.</p>
                                        <a href="https://garuda.kemdikbud.go.id/" target="_blank" class="btn btn-outline-success btn-sm"><i class="fa-solid fa-link"></i> Akses GARUDA</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 border rounded bg-light">
                                        <h5 class="fw-bold text-primary"><i class="fa-solid fa-chart-line me-2"></i> SINTA (Science and Technology Index)</h5>
                                        <p class="text-muted small mb-3">Sistem akreditasi dan pemeringkatan jurnal ilmiah serta peneliti di Indonesia.</p>
                                        <a href="https://sinta.kemdikbud.go.id/" target="_blank" class="btn btn-outline-primary btn-sm"><i class="fa-solid fa-link"></i> Akses SINTA</a>
                                    </div>
                                </div>
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
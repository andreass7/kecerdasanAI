<?php $this->extend('layout/layout'); ?>
<?php $this->section('content'); ?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9 text-center my-5">
                <h1>Welcome</h1>
                <h2>Desa Wisata Terfavorit Kabupaten Sleman</h2>
            </div>
        </div>

        <div class="container mt-4">
            <!-- <h3 class="text-center">Desa Wisata di Kab. Sleman</h3> -->
            <div class="row justify-content-center mb-4">
                <!-- <div class="col-md-6">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari Desa Wisata ...">
                        <div class="input-group-append">
                            <button class="btn btn-danger" type="button">Search</button>
                        </div>
                    </div>
                </div> -->
            </div>

            <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="assets/img/desa/nganggring.jpg" class="img-fluid" alt="" />
                        <div class="card-body">
                            <h5 class="card-title text-center">Desa Wisata Nganggringg</h5>
                            <!-- <p class="card-text">Masuk menjadi salah satu dari 50 desa...</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="assets/img/desa/kelor.jpg" class="img-fluid" alt="" />
                        <div class="card-body">
                            <h5 class="card-title text-center">Desa Wisata Kelor</h5>
                            <!-- <p class="card-text">Desa Gumeng merupakan salah satu desa di Kecamatan Gondang...</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="assets/img/desa/karangtanjung.jpg" class="img-fluid" alt="" />
                        <div class="card-body">
                            <h5 class="card-title text-center">Desa Wisata Pancoh</h5>
                            <!-- <p class="card-text">Desa Selotapak memiliki objek wisata alam pedesaan indah...</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="assets/img/desa/pancoh.jpeg" class="img-fluid" alt="" />
                        <div class="card-body">
                            <h5 class="card-title text-center">Desa Wisata Kampung Iklim Karangtanjung</h5>
                            <!-- <p class="card-text">Desa Ketapanrame secara geografis terletak di ketinggian 700 - 1200m...</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Hero -->

<?php $this->endSection() ?>
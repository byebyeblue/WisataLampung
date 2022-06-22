<?= $this->extend('/layouts/template'); ?>
<?= $this->section('content'); ?>


<!--service start-->
<section id="service" class="service">
    <div class="container">

        <div class="service-counter text-center">

            <div class="col-md-4 col-sm-4">
                <div class="single-service-box">
                    <div class="service-img">
                        <img src="/assets/TourNest-master/assets/images/service/s1.png" alt="service-icon" />
                    </div>
                    <!--/.service-img-->
                    <div class="service-content">
                        <h2>
                            <a href="#">
                                Paket Liburan Luar Biasa
                            </a>
                        </h2>
                        <p>Duis aute irure dolor in velit esse cillum dolore eu fugiat nulla.</p>
                    </div>
                    <!--/.service-content-->
                </div>
                <!--/.single-service-box-->
            </div>
            <!--/.col-->

            <div class="col-md-4 col-sm-4">
                <div class="single-service-box">
                    <div class="service-img">
                        <img src="/assets/TourNest-master/assets/images/service/s2.png" alt="service-icon" />
                    </div>
                    <!--/.service-img-->
                    <div class="service-content">
                        <h2>
                            <a href="#">
                                Book Penginapan Terbaik
                            </a>
                        </h2>
                        <p>Duis aute irure dolor in velit esse cillum dolore eu fugiat nulla.</p>
                    </div>
                    <!--/.service-content-->
                </div>
                <!--/.single-service-box-->
            </div>
            <!--/.col-->

            <div class="col-md-4 col-sm-4">
                <div class="single-service-box">
                    <div class="statistics-img">
                        <img src="/assets/TourNest-master/assets/images/service/s3.png" alt="service-icon" />
                    </div>
                    <!--/.service-img-->
                    <div class="service-content">

                        <h2>
                            <a href="#">
                                Booking Online
                            </a>
                        </h2>
                        <p>Duis aute irure dolor in velit esse cillum dolore eu fugiat nulla.</p>
                    </div>
                    <!--/.service-content-->
                </div>
                <!--/.single-service-box-->
            </div>
            <!--/.col-->

        </div>
        <!--/.statistics-counter-->
    </div>
    <!--/.container-->

</section>
<!--/.service-->
<!--service end-->

<!--packages start-->
<section id="pack" class="packages">
    <div class="container">
        <div class="gallary-header text-center">
            <h2>
                Penawaran Kami
            </h2>
        </div>
        <!--/.gallery-header-->
        <div class="packages-content">
            <div class="row">
                <?php foreach ($wisata as $w) : ?>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-package-item">
                            <img src="<?= $w['foto']; ?>" alt="package-place" style="height: 25rem;">
                            <div class="single-package-item-txt">
                                <h3><?= $w['nama_tempat']; ?> <span>
                                        <br>Rp <?= $w['harga']; ?> </span></h3>
                                <!--/.packages-para-->
                                <div class="about-btn">
                                    <a href="<?= base_url('wisata/' . $w['id_tempat']); ?>">
                                        <button class="about-view packages-btn" href="/wisata/<?= $w['id_tempat']; ?>">
                                            Selengkapnya
                                        </button>
                                    </a>
                                </div>
                                <!--/.about-btn-->
                            </div>
                            <!--/.single-package-item-txt-->
                        </div>
                        <!--/.single-package-item-->

                    </div>
                    <!--/.col-->
                <?php endforeach; ?>
            </div>
            <!--/.row-->
        </div>
        <!--/.packages-content-->
    </div>
    <!--/.container-->

</section>
<!--/.packages-->
<!--packages end-->


<?= $this->endSection(); ?>
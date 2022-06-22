<?= $this->extend('/layouts/template'); ?>
<?= $this->section('content'); ?>


<!--galley start-->
<section id="gallery" class="gallery">
    <div class="container">
        <div class="gallery-details">
            <div class="gallary-header text-center">
                <h1>
                    <?= $wisata['nama_tempat']; ?>
                </h1>
            </div>
            <!--/.gallery-header-->
            <div class="gallery-box">
                <div class="gallery-content">
                    <div class="filtr-container">
                        <div class="row" style="margin-bottom: 40px;">

                            <div class="col-md-6">
                                <div class="filtr-item">
                                    <img src="<?= $wisata['foto']; ?>" alt="image" />
                                </div><!-- /.filtr-item -->
                            </div><!-- /.col -->

                            <div class="col-md-6">
                                <div class="filtr-item">
                                    <iframe width="555" height="370" class="mb20" src="<?= $wisata['video']; ?>">
                                    </iframe>
                                </div><!-- /.filtr-item -->
                            </div><!-- /.col -->

                            <div class="col-md-12">
                                <h2>
                                    <?= $wisata['nama_tempat']; ?>
                                </h2>
                                <p style="margin-bottom: 10px;">
                                    <?= $wisata['kota']; ?>
                                </p>
                                <h3 style="margin-bottom: 20px;">
                                    Rp <?= $wisata['harga']; ?>
                                </h3>
                                <p>
                                    <?= $wisata['deskripsi']; ?>
                                </p>
                            </div><!-- /.row -->

                        </div><!-- /.filtr-container-->

                        <a href="/" style="margin-bottom: 40px;">
                            <button class="about-view packages-btn">
                                Kembali
                            </button>
                        </a>

                        <a href="/pemesanan" style="margin-bottom: 40px;">
                            <button class="about-view packages-btn">
                                Pesan
                            </button>
                        </a>
                    </div><!-- /.gallery-content -->
                </div>
                <!--/.galley-box-->
            </div>
            <!--/.gallery-details-->
        </div>
        <!--/.container-->

</section>
<!--/.gallery-->
<!--gallery end-->


<?= $this->endSection(); ?>
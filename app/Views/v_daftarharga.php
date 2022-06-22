<?= $this->extend('/layouts/template'); ?>
<?= $this->section('content'); ?>


<section id="pack" class="packages">
    <div class="container">
        <div class="gallary-header text-center">
            <h2>
                Daftar Harga
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
                                <h3><?= $w['nama_tempat']; ?> <span><br> <?= $w['harga']; ?> </span></h3>
                                <!--/.packages-para-->
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
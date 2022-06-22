<?= $this->extend('/layouts/template'); ?>
<?= $this->section('content'); ?>


<section class="travel-box">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="single-travel-boxes">
                    <div id="desc-tabs" class="desc-tabs">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active fade in" id="tours">
                                <div class="tab-para">
                                    <center>
                                        <div class="single-tab-select-box" style="margin-bottom: 40px;">
                                            <h1>Data Pemesanan</h1>
                                        </div>

                                        <table class="table-hover" width="50%" cellpadding="12" cellspacing="0" style="margin-bottom: 40px;">
                                            <tbody>
                                                <tr>
                                                    <td width="60%">Nama Lengkap</td>
                                                    <td width="10%">:</td>
                                                    <td><?= $pemesanan['nama_lengkap']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td width="60%">No. Identitas</td>
                                                    <td width="10%">:</td>
                                                    <td><?= $pemesanan['no_identitas']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td width="60%">No. HP</td>
                                                    <td width="10%">:</td>
                                                    <td><?= $pemesanan['no_hp']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td width="60%">Tanggal Kunjungan</td>
                                                    <td width="10%">:</td>
                                                    <td><?= $pemesanan['tgl_kunjungan']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td width="60%">Pengunjung Dewasa</td>
                                                    <td width="10%">:</td>
                                                    <td><?= $pemesanan['pengunjung_dws']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td width="60%">Pengunjung Anak-Anak</td>
                                                    <td width="10%">:</td>
                                                    <td><?= $pemesanan['pengunjung_ank']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td width="60%">Harga Tiket</td>
                                                    <td width="10%">:</td>
                                                    <td><?= $pemesanan['harga']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td width="60%">Total Bayar</td>
                                                    <td width="10%">:</td>
                                                    <td><?= $pemesanan['total_bayar']; ?></td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <a href="/" style="margin-bottom: 40px;">
                                            <button class="about-view packages-btn">
                                                Kembali
                                            </button>
                                        </a>

                                        <a target="_blank" href="/printpdf" style="margin-bottom: 40px;">
                                            <button class="about-view packages-btn">
                                                Print PDF
                                            </button>
                                        </a>

                                        <a href="/pemesanan" style="margin-bottom: 40px;">
                                            <button class="about-view packages-btn">
                                                Pesan Lagi
                                            </button>
                                        </a>


                                    </center>
                                </div>
                                <!--/.tab-para-->

                            </div>
                            <!--/.tabpannel-->
                        </div>
                        <!--/.tab content-->
                    </div>
                    <!--/.desc-tabs-->
                </div>
                <!--/.single-travel-box-->
            </div>
            <!--/.col-->
        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
</section>


<?= $this->endSection(); ?>
<?= $this->extend('/layouts/template'); ?>
<?= $this->section('content'); ?>


<!--travel-box start-->
<section class="travel-box">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="single-travel-boxes">
                    <div id="desc-tabs" class="desc-tabs">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active fade in" id="tours">
                                <div class="tab-para">
                                    <div class="single-tab-select-box" style="margin-bottom: 40px;">
                                        <h1>Form Pemesanan</h1>
                                    </div>
                                    <form action="/pemesanan" method="post" id="formpesan">
                                        <?= csrf_field(); ?>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-4 col-sm-12" style="margin-bottom: 20px;">
                                                <div class="single-tab-select-box">
                                                    <h2>Nama Lengkap</h2>
                                                    <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" placeholder="Nama Lengkap">
                                                </div>
                                                <!--/.single-tab-select-box-->
                                            </div>

                                            <div class="col-lg-12 col-md-4 col-sm-12" style="margin-bottom: 20px;">
                                                <div class="single-tab-select-box">
                                                    <h2>Nomor Identitas</h2>
                                                    <input type="text" name="no_identitas" id="no_identitas" class="form-control" placeholder="Nama Lengkap">
                                                </div>
                                                <!--/.single-tab-select-box-->
                                            </div>

                                            <div class="col-lg-12 col-md-4 col-sm-12" style="margin-bottom: 20px;">
                                                <div class="single-tab-select-box">
                                                    <h2>No. HP</h2>
                                                    <input type="text" name="no_hp" id="no_hp" class="form-control" placeholder="Nama Lengkap">
                                                </div>
                                                <!--/.single-tab-select-box-->
                                            </div>

                                            <div class="col-sm-12" style="margin-bottom: 20px;">
                                                <div class=" single-tab-select-box">
                                                    <h2>Tempat Wisata</h2>
                                                    <select class="form-control" name="id_tempat" id="tempat_wisata" onchange="getHargaTiket()">
                                                        <option value="" selected disabled>Pilih Tempat Wisata</option><!-- /.option-->
                                                        <?php foreach ($wisata as $w) : ?>
                                                            <option value="<?= $w['id_tempat']; ?>" data-harga="<?= $w['harga'] ?>"><?= $w['nama_tempat']; ?></option><!-- /.option-->
                                                        <?php endforeach; ?>
                                                    </select><!-- /.select-->
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-3 col-sm-4" style="margin-bottom: 20px;">
                                                <div class=" single-tab-select-box">
                                                    <h2>Tanggal Kunjungan</h2>
                                                    <input type="date" name="tgl_kunjungan" class="form-control" placeholder="12 -01 - 2017 ">
                                                </div>
                                                <!--/.single-tab-select-box-->
                                            </div>
                                            <!--/.col-->
                                            <div class="col-lg-4 col-md-1 col-sm-4" style="margin-bottom: 20px;">
                                                <div class="single-tab-select-box">

                                                    <h2>Pengunjung Dewasa</h2>
                                                    <input type="text" name="pengunjung_dws" id="pengunjung_dewasa" class="form-control" placeholder="Masukkan Jumlah">

                                                </div>
                                                <!--/.single-tab-select-box-->
                                            </div>
                                            <!--/.col-->

                                            <div class="col-lg-4 col-md-1 col-sm-4" style="margin-bottom: 20px;">
                                                <div class="single-tab-select-box">

                                                    <h2>Pengunjung Anak-Anak</h2>
                                                    <input type="text" name="pengunjung_ank" id="pengunjung_anak" class="form-control" placeholder="Masukkan Jumlah">

                                                </div>
                                                <!--/.single-tab-select-box-->
                                            </div>
                                            <!--/.col-->
                                            <div class="col-lg-4 col-md-1 col-sm-4" style="margin-bottom: 20px;">
                                                <span>Harga Tiket</span>
                                                <h4 id="harga_show">Rp 0,00</h4>
                                                <input type="hidden" name="harga" id="harga" value="0">
                                            </div>

                                            <div class="col-lg-4 col-md-1 col-sm-4" style="margin-bottom: 20px;">
                                                <span>Total Bayar</span>
                                                <h4 id="total_bayar_show">Rp 0,00</h4>
                                                <input type="hidden" name="total_bayar" id="total_bayar" value="0">
                                            </div>

                                            <div class="col-lg-12 col-md-1 col-sm-4" style="margin-bottom: 20px;">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck" required>
                                                <label for="exampleCheck">Saya dan/atau rombongan telah membaca, memahami, dan setuju berdasarkan syarat dan ketentuan yang telah ditetapkan</label>
                                            </div>
                                        </div>
                                        <!--/.row-->

                                        <div class="row">
                                            <div class="clo-sm-7">
                                                <div class="about-btn travel-mrt-0 pull-right">
                                                    <button type="button" onclick="hitungTotal()" class="about-view travel-btn">
                                                        Hitung Total Bayar
                                                    </button>
                                                    <!--/.travel-btn-->
                                                </div>
                                                <!--/.about-btn-->
                                            </div>

                                            <div class="clo-sm-7">
                                                <div class="about-btn travel-mrt-0 pull-right">
                                                    <button type="submit" class="about-view travel-btn">
                                                        Pesan Tiket
                                                    </button>
                                                    <!--/.travel-btn-->
                                                </div>
                                                <!--/.about-btn-->
                                            </div>

                                            <div class="clo-sm-7">
                                                <div class="about-btn travel-mrt-0 pull-right">
                                                    <button type="button" onclick="clearAll()" class="about-view travel-btn">
                                                        Cancel
                                                    </button>
                                                    <!--/.travel-btn-->
                                                </div>
                                                <!--/.about-btn-->
                                            </div>
                                            <!--/.col-->

                                        </div>
                                        <!--/.row-->
                                    </form>
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
<!--/.travel-box-->
<!--travel-box end-->

<script>
    const rupiah = (number) => {
        return new Intl.NumberFormat("id-ID", {
            style: "currency",
            currency: "IDR"
        }).format(number);
    }

    function getHargaTiket() {
        const harga = $('#tempat_wisata').find(":selected").data("harga");
        const harga_show = rupiah(harga);
        $("#harga_show").html(harga_show);
        $("#harga").val(harga);
    }

    function hitungTotal() {
        const dewasa = $("#pengunjung_dewasa").val();
        const anak = $("#pengunjung_anak").val();
        const harga = parseInt($("#harga").val());

        const total = (parseInt(dewasa) * harga) + (parseInt(anak) * harga / 2);
        console.log(total);
        $("#total_bayar_show").html(rupiah(total));
        $("#total_bayar").val(total);
    }

    function clearAll() {
        $('#formpesan')[0].reset();
        $("#total_bayar_show").html(rupiah(0));
        $("#harga_show").html(rupiah(0));
    }
</script>


<?= $this->endSection(); ?>
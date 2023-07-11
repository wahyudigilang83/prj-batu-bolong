<!-- where_togo_area_start  -->
<div class="where_togo_area">
    <div class="container">
        <div class="row align-items-center">
            <?php foreach ($saldo->result_array() as $key) : ?>
            <div class="form_area">
                <h3>Saldo Anda : Rp.<?= number_format($key['saldo'], 0, ',', '.') ?></h3>
            </div>
            <?php endforeach ?>


        </div>
    </div>
</div>
<!-- where_togo_area_end  -->



<!-- popular_destination_area_start  -->
<div class="destination_details_info">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center mb_70">
                    <h3>Stand</h3>
                    <p>Berikut daftar-daftar stand yang terdapat pada pantai Batu Bolong.</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <?php foreach ($stand->result_array() as $keyy) : ?>
                <div class="col-lg-4 col-md-6">
                    <a href="<?= base_url("pengunjung/c_pengunjung/detail_stand/") . $keyy['id_stand']?>">
                        <div class="single_place">
                            <div class="thumb">
                                <img src="<?= base_url('') . 'img/' . $keyy['gambar'] ?>" width="275" height="183"
                                    alt="">
                            </div>
                            <div class="place_info">
                                <h3><?php echo $keyy['nama_stand'] ?></h3>
                    </a>
                    <p><?php echo $keyy['tipe_stand'] ?></p>
                </div>
            </div>
            </a>
        </div>
        </br>
        <?php endforeach ?>
    </div>
</div>
</div>
</div>
<!-- popular_destination_area_end  -->
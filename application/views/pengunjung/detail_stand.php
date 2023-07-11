<div class="destination_details_info">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center mb_70">
                    <h3>Stand</h3>
                    <p>DAFTAR MENU STAND <?php foreach ($stand->result_array() as $keyy) : ?>
                        <?php echo $keyy['nama_stand'] ?>
                        <?php endforeach ?>
                    </p>
                </div>
            </div>
        </div>
        <!-- <div class="card-body">
            <div class="row">
                <?php foreach ($stand->result_array() as $keyy) : ?>
                    <div class="col-lg-4 col-md-6">
                        <a href="<?= base_url("pengunjung/c_pengunjung/detail_stand/") ?>">
                            <div class="single_place">
                                <div class="thumb">
                                    <img src="<?= base_url('') . 'img/' . $keyy['gambar'] ?>" width="275" height="183" alt="">
                                </div>
                                <div class="place_info">
                                    <h3><?php echo $keyy['nama_stand'] ?></h3>
                        </a>
                        <p><?php echo $keyy['nama_pemilik'] ?></p>
                        <p><?php echo $keyy['tipe_stand'] ?></p>
                    </div>
            </div>
            </a>
        </div>
    <?php endforeach ?>
    </div> -->
    </div>
</div>
</div>
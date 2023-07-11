<div class="where_togo_area">
    <div class="container">
        <div class="row align-items-center">
       
        <?php foreach ($saldo->result_array() as $key) : ?>
                    <div class="form_area">
                        <h3>Saldo Anda : Rp.<?= number_format($key['saldo'], 0,',','.')?></h3>
                    </div>
                    <?php endforeach ?>

        </div>
    </div>
</div>
<!-- where_togo_area_end  -->
<div class="destination_details_info">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-9">
                    <div class="destination_info">
                        <h3>Cara Melakukan Top Up Non Tunai</h3>
                        
                        <div class="single_destination">
                            <h4>01</h4>
                            <p>Login ke mBangking anda. Pilih bayar, kemudian pilih Top Up</p>
                        </div>
                        <div class="single_destination">
                            <h4>02</h4>
                            <p>Pilih penyedia layanan : Pesona Batu Bolong dan masukkan nomor virtual 1234</p>
                        </div>
                        <div class="single_destination">
                            <h4>03</h4>
                            <p>Masukkan nominal Top Up sebesar Rp 10.000 </p>
                        </div>
                        <div class="single_destination">
                            <h4>04</h4>
                            <p>Kirim bukti pembayaran ke dalam system</p>
                        </div>
                        <div class="single_destination">
                            <h4>05</h4>
                            <p>Saldo akan bertambah otomatis paling lama 1x24 jam</p>
                        </div>
                    </div>
                    <form action="<?= base_url('pengunjung/c_pengunjung/uploadbukti') ?>" method="post" enctype="multipart/form-data">
                        <div class="single_destination">
                            
                            <h4>Upload Bukti Pembayaran</h4>
                                
                                <input type="file" name="gambar" class="form-control">
                                <?php echo form_error('gambar', '<div class="alert alert-danger">', '</div>') ?>
                            
                        </div>
                        <center><div class="mt-3">
                            <div class="">
                                <div class="submit_btn">
                                    <button class="boxed-btn4" type="submit">submit</button>
                                </div>
                            </div>
                        </center>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="travel_variation_area">
        
        </div>
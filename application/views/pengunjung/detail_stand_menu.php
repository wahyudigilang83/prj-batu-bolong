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
<div class="destination_details_info">
    <div class="container">
                <div class="section_title text-center">
                <?php foreach ($stand->result_array() as $key) : ?>
                    <h3><?=$key['nama_stand']?></h3>
                <?php endforeach ?>
                    <p>DAFTAR MENU STAND 
                    </p>
                </div>
        <a href="<?= base_url('pengunjung/c_pengunjung/kembali_stand')?>" class="btn btn-danger btn-sm">Kembali</a>
        <br>
        <?php $items = 'Total Item: '.($this->cart->total_items()) ?>
        <?php $keranjang = 'Menu Yang Di Pilih: '.count($this->cart->contents()) ?>
        <?= $keranjang?>
        <br>
        <?= $items?>
        <br>
        <a href="<?= base_url('pengunjung/c_pengunjung/pesanan/'.$key['id_stand'])?>" class="btn btn-primary btn-sm">Lihat Pesanan</a>
        <h1></h1>
        <div class="row mt-3">
        <?php foreach ($menu->result_array() as $key ): ?>
                <div class="col-md-3">
                    <div class="card border-dark">
                    <img src="<?= base_url('') . 'img_menu/' . $key['gambar']?>" width="275" height="183" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold"><?php echo $key['nama_menu']?></h5>
                            <label class="card-text harga">Rp. <?php echo number_format($key['harga'], 0,',','.')?></label><br>
                            <br>
                                <a href="<?php echo base_url('pengunjung/c_pengunjung/addcart/'.$key['id_menu']) ?>" class="btn btn-success btn-sm btn-block ">BELI</a>
                            <h1></h1>
                            <!-- <?php if ($key['status']<=0): ?>
                                <a class="btn btn-danger btn-sm btn-block" href="<?= base_url('ProjectName/TidakTersedia/'.$key['id_menu'])?>"><font color="white">Tidak Tersedia</font></a>
                            <?php else: ?>
                                <a class="btn btn-success btn-sm btn-block" href="<?= base_url('ProjectName/Tersedia/'.$key['id_menu'])?>"><font color="white">Tersedia</font></a>
                            <?php endif ?> -->
                        </div>
                    </div>
                    <h1></h1>
                </div>
            <?php endforeach?>
        </div>
    </div>
</div>
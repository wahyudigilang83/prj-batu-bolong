<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Menu</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Daftar Menu</li><br>
                        </ol>
                        <div class="row">
                           
                        </div>
                        <!-- <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Area Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Bar Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div> -->
                        <a href="<?= base_url('stand/c_stand/tambahmenu')?>" class="btn btn-success mt-3">TAMBAH DAFTAR MENU</a>
                        <div class="row mt-3">
                            <?php foreach ($menu->result_array() as $key ): ?>
                                <div class="col-md-3">
                                    <div class="card border-dark">
                                    <img src="<?= base_url('') . 'img_menu/' . $key['gambar']?>" width="275" height="183" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title font-weight-bold"><?php echo $key['nama_menu']?></h5>
                                        <label class="card-text harga">Rp. <?php echo number_format($key['harga'], 0,',','.')?></label><br>
                                        <br>
                                            <a href="<?php echo base_url('stand/c_stand/ubah/'.$key['id_menu'])?>" class="btn btn-primary btn-sm">EDIT</a>
                                            <a href="<?php echo base_url('stand/c_stand/delete_menu/'.$key['id_menu'])?>" class="btn btn-danger btn-sm">HAPUS</a>
                                        
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
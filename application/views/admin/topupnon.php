<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Top Up</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Halaman Top Up Saldo</li>
                        </ol>
                        <div class="card-body">
                            <form action="<?= base_url('admin/c_admin/prosestopup_non/').$nontunai['id_bukti'] ?>" method="post">
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputIdStand" type="text" name="id"
                                        value="<?php echo $nontunai['id_user'] ?>" readonly/>
                                    <label for="inputIdPengunjung">Nomor Pengunjung</label>
                                    <?php echo form_error('id','<div class="alert alert-danger">','</div>') ?>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputHarga" type="text" readonly value="1000" />
                                    <label for="inputJumlah">Biaya Admin</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputJumlah" type="text" name="jumlah"/>
                                    <label for="inputJumlah">Jumlah Top-Up</label>
                                    <?php echo form_error('jumlah','<div class="alert alert-danger">','</div>') ?>
                                </div>
                                <div class="form-floating mb-3">
                                    <span class="form-control" id="Total" type="text" name="total"></span>
                                    <label for="Total">Total Biaya</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputbayar" type="text" name="bayar"/>
                                    <label for="inputbayar">Bayar</label>
                                    <?php echo form_error('bayar','<div class="alert alert-danger">','</div>') ?>
                                </div>
                                <div class="form-floating mb-3">
                                    <span class="form-control" id="kembalian" type="text"></span>
                                    <label for="kembalian">Kembalian</label>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                    <button class="btn btn-primary" type="submit">Top-Up</button>
                                </div>
                            </form>
                            <!-- <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Warning Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Success Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Danger Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div> -->
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
                    </div>
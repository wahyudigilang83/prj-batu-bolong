<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Pendapatan</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Halaman pendapatan</li>
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
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Pendapatan Restoran
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Menu</th>
                                            <th>Jumlah</th>
                                            <th>Harga</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($pendapatan->result_array() as $key ): ?>
                                        <tr>
                                            <td><?php echo $no++?></td>
                                            <td><?php echo $key['menu']?></td>
                                            <td><?php echo $key['jumlah']?></td>
                                            <td><?php echo $key['harga']?></td>
                                        </tr>
                                        <?php endforeach?>
                                    </tbody>
                                </table>
                                <div class="align-items-center mt-6 mb-0">
                                    <a href="<?= base_url('stand/c_stand/pendapatan_resto') ?>" class="btn btn-danger">Kembali</a>
                                </div>
                            </div>
                        </div>
    
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Penjualan Tiket Pesona Batu Bolong</h1>
                        <!-- <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol> -->
                        <!-- <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div> -->
                        <div class="mb-3">
                            <a href="<?= base_url('admin/c_admin/tiket') ?>">
                                <button class="btn btn-primary md-3" >Tiket Hari Ini</button>
                            </a>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Tiket Hari ini
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No. Tiket</th>
                                            <th>Tanggal</th>
                                            <th>Waktu</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($tiket->result_array() as $key ): ?>
                                        <tr>
                                            <td><?php echo $key['id_tiket']?></td>
                                            <td><?php echo $key['tanggal']?></td>
                                            <td><?php echo $key['waktu']?></td>
                                            <td><?php echo $key['status']?></td>
                                        </tr>
                                        <?php endforeach?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
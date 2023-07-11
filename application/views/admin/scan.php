<!-- ---------------------------------------- -->



<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Validasi Tiket</h1>
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
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Tiket Masuk
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>

                            <th>No.Tiket</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($tiket->result_array() as $key) : ?>
                        <tr>
                            <td><?php echo $key['id_tiket'] ?></td>
                            <td>
                                <a href="<?php echo base_url('admin/c_admin/cek_tiket/'.$key['id_tiket']) ?>">
                                <?php echo $key['status']?>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
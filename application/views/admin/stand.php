    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Stand Pesona Batu Bolong</h1>
            <!-- <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol> -->
            <div class="card mb-4">
                <!-- <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div> -->
            </div>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Data Stand
                    <a href="<?= base_url('admin/c_admin/tambah_stand') ?>"><button
                            class="btn btn-primary float-end">Tambah
                            Stand</button></a>
                </div>
                <div class="card-body">
                    <table class="table table-hover table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Id Stand</th>
                                <th>Nama Toko</th>
                                <th>Nama Pemilik</th>
                                <th>Tipe Stand</th>
                                <th>Keterangan</th>
                                <th>Gambar</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($stand->result_array() as $key) : ?>
                            <tr>
                                <td><?php echo $key['id_stand'] ?></td>
                                <td><?php echo $key['nama_stand'] ?></td>
                                <td><?php echo $key['nama_pemilik'] ?></td>
                                <td><?php echo $key['tipe_stand'] ?></td>
                                <td><?php echo $key['keterangan'] ?></td>
                                <td><?php echo $key['gambar'] ?></td>
                                <td>
                                    <a class="btn btn-success" type="submit"
                                        href="<?= base_url('admin/c_admin/ubah_stand/' . $key['id_stand']) ?>">Edit</a>
                                    <a class="btn btn-danger" type="submit"
                                        href="<?php echo base_url('admin/c_admin/delete_stand/' . $key['id_stand']) ?>">Delete</a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
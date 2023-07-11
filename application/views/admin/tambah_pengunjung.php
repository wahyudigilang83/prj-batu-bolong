<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tambah Pengunjung</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Halaman Tambah Pengunjung</li>
        </ol>
        <div class="card-body">
            <form action="<?= base_url('admin/c_admin/prosestambah_pengunjung') ?>" method="post" enctype="multipart/form-data">
                <div class="form-floating mb-3">
                    <input class="form-control" id="inputIdPengunjung" type="text" name="first_name" />
                    <label for="inputIdPengunjung">First Name</label>
                    <?php echo form_error('first_name', '<div class="alert alert-danger">', '</div>') ?>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" id="inputHarga" type="text" name="last_name" />
                    <label for="inputJumlah">Last Name</label>
                    <?php echo form_error('last_name', '<div class="alert alert-danger">', '</div>') ?>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" id="inputHarga" type="text" name="email" />
                    <label for="inputJumlah">Email</label>
                    <?php echo form_error('email', '<div class="alert alert-danger">', '</div>') ?>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" id="inputJumlah" type="text" name="username" />
                    <label for="inputJumlah">Username</label>
                    <?php echo form_error('username', '<div class="alert alert-danger">', '</div>') ?>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" id="inputJumlah" type="text" name="password" />
                    <label for="inputJumlah">Password</label>
                    <?php echo form_error('password', '<div class="alert alert-danger">', '</div>') ?>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" id="inputJumlah" type="text" name="level" />
                    <label for="inputJumlah">Level</label>
                    <?php echo form_error('level', '<div class="alert alert-danger">', '</div>') ?>
                </div>
                
                <br>

                <div class="align-items-center mt-6 mb-0">
                    <button class="btn btn-primary" type="submit">Daftar Pengunjung</button>
                    <a href="<?= base_url('admin/c_admin/pengunjung') ?>" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
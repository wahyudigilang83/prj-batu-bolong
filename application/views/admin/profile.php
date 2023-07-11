<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Profile</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Halaman Edit Profile</li>
        </ol>
        <div class="card-body">
        <form action="<?php echo base_url('admin/c_admin/edit_profile/') . $profile['id'] ?>" method="post">
            <div class="form-floating mb-3">
                <input class="form-control" id="inputIdPengunjung" type="text" name="first_name" value="<?php echo $profile['first_name'] ?>"/>
                <label for="inputIdPengunjung">First Name</label>
                <?php echo form_error('id','<div class="alert alert-danger">','</div>') ?>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="inputIdPengunjung" type="text" name="last_name" value="<?php echo $profile['last_name'] ?>"/>
                <label for="inputIdPengunjung">Last Name</label>
                <?php echo form_error('id','<div class="alert alert-danger">','</div>') ?>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="inputIdPengunjung" type="text" name="email" value="<?php echo $profile['email'] ?>"/>
                <label for="inputIdPengunjung">Email</label>
                <?php echo form_error('id','<div class="alert alert-danger">','</div>') ?>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="inputIdPengunjung" type="text" name="username" value="<?php echo $profile['username'] ?>"/>
                <label for="inputIdPengunjung">Username</label>
                <?php echo form_error('id','<div class="alert alert-danger">','</div>') ?>
            </div>
            <div class="align-items-center mt-2 mb-3">
                <button class="btn btn-primary" type="submit">Simpan</button>
                <a href="<?= base_url('admin/c_admin/profile') ?>" class="btn btn-danger">Kembali</a>
            </div>
        </form>
    </div>
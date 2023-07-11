<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Profile</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Halaman Edit Profile</li>
        </ol>
        <div class="card-body">
        <form action="<?php echo base_url('stand/c_stand/edit_profile/') . $profile['id_stand'] ?>" method="post">
            <div class="form-floating mb-3">
                <input class="form-control" id="inputIdPengunjung" type="text" name="nama_stand" value="<?php echo $profile['nama_stand'] ?>"/>
                <label for="inputIdPengunjung">Nama_stand</label>
                <?php echo form_error('id','<div class="alert alert-danger">','</div>') ?>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="inputIdPengunjung" type="text" name="nama_pemilik" value="<?php echo $profile['nama_pemilik'] ?>"/>
                <label for="inputIdPengunjung">Nama Pemilik</label>
                <?php echo form_error('id','<div class="alert alert-danger">','</div>') ?>
            </div>
            <div class="mb-3">
                <label for="inputEmail">Pilih Tipe</label><br>
                <?php echo form_error('tipe_stand', '<div class="alert alert-danger">', '</div>') ?>
                <input type="radio" name="tipe_stand" value="Resto" <?php if($profile['tipe_stand']=='Resto') echo 'checked'?>/> Resto<br>
                <input type="radio" name="tipe_stand" value="Penyewaan" <?php if($profile['tipe_stand']=='Penyewaan') echo 'checked'?>/> Penyewaan<br>
            </div>
            <div class="align-items-center mt-2 mb-3">
                <button class="btn btn-primary" type="submit">Simpan</button>
                <a href="<?= base_url('stand/c_stand/profile') ?>" class="btn btn-danger">Kembali</a>
            </div>
        </form>
    </div>
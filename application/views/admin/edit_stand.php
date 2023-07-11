<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Stand</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Halaman Edit Stand</li>
        </ol>
        <div class="card-body">
            <form action="<?php echo base_url('admin/c_admin/edit_stand/') . $stand['id_stand'] ?>" method="post"
                enctype="multipart/form-data">
                <input type="hidden" name="id_stand" value="<?php echo $stand['id_stand'] ?>" />
                <input type="hidden" name="gambarlama" value="<?php echo $stand['gambar'] ?>" />
                <div class="form-floating mb-3">
                    <input class="form-control" id="inputIdStand" type="text" name="nama_stand"
                        value="<?php echo $stand['nama_stand'] ?>" />
                    <label for="inputIdPengunjung">Nama Stand</label>
                    <?php echo form_error('nama_stand', '<div class="alert alert-danger">', '</div>') ?>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" id="NamaPemilik" type="text" name="nama_pemilik"
                        value="<?php echo $stand['nama_pemilik'] ?>" />
                    <label for="NamaPemilik">Nama Pemilik</label>
                    <?php echo form_error('nama_pemilik', '<div class="alert alert-danger">', '</div>') ?>
                </div>
                <div class="mb-3">
                    <label for="inputEmail">Pilih Tipe</label><br>
                    <?php echo form_error('tipe_stand', '<div class="alert alert-danger">', '</div>') ?>
                    <input type="radio" name="tipe_stand" value="Resto" <?php if($stand['tipe_stand']=='Resto') echo 'checked'?>/> Resto<br>
                    <input type="radio" name="tipe_stand" value="Penyewaan" <?php if($stand['tipe_stand']=='Penyewaan') echo 'checked'?>/> Penyewaan<br>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" id="inputJumlah" type="text" name="keterangan"
                        value="<?php echo $stand['keterangan'] ?>" />
                    <label for="inputJumlah">Keterangan</label>
                    <?php echo form_error('keterangan', '<div class="alert alert-danger">', '</div>') ?>
                </div>
                <label for="inputGambar">Gambar :</label>
                <div class="form mb-2">
                    <img src="<?= base_url('') . 'img/' . $stand['gambar']?>" width="183" height="183" alt="">
                    <input class="form-control" id="inputGambar" type="file" name="gambar" />
                    <?php echo form_error('gambar', '<div class="alert alert-danger">', '</div>') ?>
                </div>
                <br>

                <div class="align-items-center mt-6 mb-0">
                    <button class="btn btn-primary" type="submit">Simpan</button>
                    <a href="<?= base_url('admin/c_admin/stand') ?>" class="btn btn-danger">Kembali</a>
                </div>
            </form>
    </div>
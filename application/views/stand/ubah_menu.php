<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Ubah Menu</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Halaman Ubah Menu</li>
        </ol>
        <div class="card-body">
            <form action="<?= base_url('stand/c_stand/edit_menu/') . $menu['id_menu']?>" method="post"
                enctype="multipart/form-data">
                <input type="hidden" name="id_menu" value="<?php echo $menu['id_menu'] ?>" />
                <input type="hidden" name="gambarlama" value="<?php echo $menu['gambar'] ?>" />
                <div class="form-floating mb-3">
                    <input class="form-control" id="inputIdPengunjung" type="text" name="nama_menu" 
                    value="<?php echo $menu['nama_menu'] ?>"/>
                    <label for="inputIdPengunjung">Nama Menu</label>
                    <?php echo form_error('nama_menu', '<div class="alert alert-danger">', '</div>') ?>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" id="inputHarga" type="text" name="harga" 
                    value="<?php echo $menu['harga'] ?>"/>
                    <label for="inputJumlah">Harga</label>
                    <?php echo form_error('harga', '<div class="alert alert-danger">', '</div>') ?>
                </div>
                <div class="mb-3">
                    <label for="inputEmail">Pilih Tipe :</label><br>
                    <?php echo form_error('tipe_menu', '<div class="alert alert-danger">', '</div>') ?>
                    <input type="radio" name="tipe_menu" value="Makanan" <?php if($menu['kategori']=='Makanan') echo 'checked'?>/> Makanan<br>
                    <input type="radio" name="tipe_menu" value="Minuman" <?php if($menu['kategori']=='Minuman') echo 'checked'?>/> Minuman<br>
                    <input type="radio" name="tipe_menu" value="Desert" <?php if($menu['kategori']=='Desert') echo 'checked'?>/> Desert<br>
                </div>
                <label for="inputJumlah">Gambar :</label>
                <div class="form mb-2">
                    <img src="<?= base_url('') . 'img_menu/' . $menu['gambar']?>" width="183" height="183" alt="">
                    <input class="form-control" id="inputJumlah" type="file" name="gambar" />
                    <?php echo form_error('gambar', '<div class="alert alert-danger">', '</div>') ?>
                </div>
                <br>

                <div class="align-items-center mt-6 mb-0">
                    <button class="btn btn-primary" type="submit">Edit menu</button>
                    <a href="<?= base_url('stand/c_stand/menu') ?>" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tambah Menu</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Halaman Tambah Menu</li>
        </ol>
        <div class="card-body">
            <form action="<?= base_url('stand/c_stand/prosestambah_stand') ?>" method="post"
                enctype="multipart/form-data">
                <div class="form-floating mb-3">
                    <input class="form-control" id="inputIdPengunjung" type="text" name="nama_menu" />
                    <label for="inputIdPengunjung">Nama Menu</label>
                    <?php echo form_error('nama_menu', '<div class="alert alert-danger">', '</div>') ?>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" id="inputHarga" type="text" name="harga" />
                    <label for="inputJumlah">Harga</label>
                    <?php echo form_error('harga', '<div class="alert alert-danger">', '</div>') ?>
                </div>
                <div class="mb-3">
                    <label for="inputEmail">Pilih Tipe :</label><br>
                    <?php echo form_error('tipe_menu', '<div class="alert alert-danger">', '</div>') ?>
                    <input type="radio" name="tipe_menu" value="Makanan" /> Makanan<br>
                    <input type="radio" name="tipe_menu" value="Minuman" /> Minuman<br>
                    <input type="radio" name="tipe_menu" value="Desert" /> Desert<br>
                </div>
                <label for="inputJumlah">Gambar :</label>
                <div class="form mb-2">
                    <input class="form-control" id="inputJumlah" type="file" name="gambar" />
                    <?php echo form_error('gambar', '<div class="alert alert-danger">', '</div>') ?>
                </div>
                <br>

                <div class="align-items-center mt-6 mb-0">
                    <button class="btn btn-primary" type="submit">Tambah menu</button>
                    <a href="<?= base_url('stand/c_stand/menu') ?>" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
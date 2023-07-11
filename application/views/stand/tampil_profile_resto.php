<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Profile</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Halaman Edit Profile</li>
        </ol>
        <div class="card-body">
            <div class="form-floating mb-3">
            Nama Stand &nbsp&nbsp&nbsp: <b><?= $profile['nama_stand'] ?></b>
            </div>
            <div class="form-floating mb-3">
            Nama Pemilik : <b><?= $profile['nama_pemilik'] ?></b>
            </div>
            <div class="form-floating mb-3">
                Stand &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: 
                <b><?php echo $profile['tipe_stand'] ?></b>
            </div>
            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                <a href="<?= base_url('stand/c_stand/ubah_profile') ?>" class="btn btn-primary">&nbsp&nbspEdit&nbsp&nbsp</a>
            </div>
    </div>
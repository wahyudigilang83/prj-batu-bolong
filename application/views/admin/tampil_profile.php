<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Profile</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Halaman Edit Profile</li>
        </ol>
        <div class="card-body">
            <div class="form-floating mb-3">
            First Name : <b><?= $profile['first_name'] ?></b>
            </div>
            <div class="form-floating mb-3">
            Last Name : <b><?= $profile['last_name'] ?></b>
            </div>
            <div class="form-floating mb-3">
                Email &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: 
                <b><?php echo $profile['email'] ?></b>
            </div>
            <div class="form-floating mb-3">
            Username &nbsp: <b><?php echo $profile['username'] ?></b>
            </div>
            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                <a href="<?= base_url('admin/c_admin/ubah_profile') ?>" class="btn btn-primary">&nbsp&nbspEdit&nbsp&nbsp</a>
            </div>
    </div>
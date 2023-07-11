<div class="destination_details_info">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-9">


                <div class="contact_join">
                    <center>
                        <h3>Profile</h3>
                    </center>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="single_input">
                                    First Name : <b><?= $profile['first_name'] ?></b>
                                </div>
                            </div>
                            <div class=" col-lg-12">
                                <div class="single_input">
                                    Last Name : <b><?php echo $profile['last_name'] ?></b>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="single_input">
                                    Email &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: 
                                    <b><?php echo $profile['email'] ?></b>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="single_input">
                                    Username &nbsp: <b><?php echo $profile['username'] ?></b>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                
                                <br>
                                <div class="submit_btn">
                                    <button class="boxed-btn3">
                                        <a href="<?= base_url('pengunjung/c_pengunjung/ubah_profile') ?>">Edit</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="travel_variation_area">
</div>
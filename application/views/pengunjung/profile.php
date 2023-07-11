<div class="destination_details_info">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-9">


                <div class="contact_join">
                    <center>
                        <h3>Profile</h3>
                    </center>
                    <form action="<?php echo base_url('pengunjung/c_pengunjung/edit_profile/') . $profile['id'] ?>" method="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="single_input">
                                    <input name="first_name" id="input_first_name" cols="30" rows="10" value="<?php echo $profile['first_name'] ?>"></input>
                                </div>
                            </div>
                            <div class=" col-lg-12">
                                <div class="single_input">
                                    <input name="last_name" id="input_last_name" cols="30" rows="10" value="<?php echo $profile['last_name'] ?>"></input>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="single_input">
                                    <input name="email" id="input_email" cols="30" rows="10" value="<?php echo $profile['email'] ?>"></input>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="single_input">
                                    <input name="username" id="input_username" cols="30" rows="10" value="<?php echo $profile['username'] ?>"></input>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="submit_btn">
                                    <button class="boxed-btn4" type="submit">
                                    Simpan
                                    </button>
                                </div>
                                <br>
                                <div class="submit_btn">
                                    <button class="boxed-btn3">
                                        <a href="<?= base_url('pengunjung/c_pengunjung/profile') ?>">Kembali</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="travel_variation_area">
</div>

  <!-- where_togo_area_start  -->
  <div class="where_togo_area">
        <div class="container">
            <div class="row align-items-center">
                    <?php foreach ($saldo->result_array() as $key) : ?>
                    <div class="form_area">
                        <h3>Saldo Anda : Rp.<?= number_format($key['saldo'], 0,',','.')?></h3>
                    </div>
                    <?php endforeach ?>
                
               
            </div>
        </div>
    </div>
    <!-- where_togo_area_end  -->
<div class="destination_details_info">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-9">
                    
                   
                    <div class="contact_join">
                        <h3>Beli Ticket</h3>
                            <form action="<?= base_url('pengunjung/c_pengunjung/belitiket')?>" method="post">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="single_input">
                                            <input  name="jumlah" id="inputJumlah" cols="30" rows="10"placeholder="Jumlah" ></input>
                                        </div>
                                    </div>
                                    <input type="hidden" name="harga" value="10000"/>
                                    <div class="col-lg-12">
                                        <div class="single_input">
                                            <input class="form-control" id="inputHarga" cols="30" rows="10" placeholder="Harga : 10.000" readonly></input>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="single_input">
                                            Total Bayar : <span name="" id="Total" cols="30" rows="10"placeholder="Total" ></span>
                                        </div>
                                    </div>
                                    <?php date_default_timezone_set('Asia/Singapore') ?>
                                    <input type="hidden" name="tanggal" value="<?php echo date("Y-m-d"); ?>">
                                    <input type="hidden" name="jam" value="<?php echo date("H:i:s"); ?>">
                                    <div class="col-lg-12">
                                        <div class="submit_btn">
                                            <button class="boxed-btn4" type="submit">submit</button>
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
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
                    <div class="destination_info">
                        <h3>Cara Melakukan Top Up Tunai</h3>
                        
                        <div class="single_destination">
                            <h4>01<p>Sampaikan ke penjaga loket untuk melakukan top up</p></h4>
                            
                        </div>
                        <div class="single_destination">
                            <h4>02<p>Tunjukan kode ke penjaga loket</p></h4>
                            
                        </div>
                        <div class="single_destination">
                            <h4>03</h4>
                            <p>Lakukan pembayaran sebesar Rp.????? dalam kurun waktu 24 jam</p>
                        </div>
                        <div class="single_destination">
                            <h4>04</h4>
                            <p>Saldo akan bertambah automatis sebelum kurun waktu 1x24 jam</p>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
    <div class="travel_variation_area">
        
        </div>
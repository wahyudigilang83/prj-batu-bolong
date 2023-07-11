<!-- where_togo_area_start  -->
<div class="where_togo_area">
    <div class="container">
        <div class="row align-items-center">
            <?php foreach ($saldo->result_array() as $key) : ?>
            <div class="form_area">
                <h3>Saldo Anda : Rp.<?= number_format($key['saldo'], 0, ',', '.') ?></h3>
            </div>
            <?php endforeach ?>


        </div>
    </div>
</div>
<!-- where_togo_area_end  -->



<!-- popular_destination_area_start  -->
<div class="destination_details_info">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center mb_70">
                    <h3>Cek Ticket</h3>
                    <p>Silahkan mengecek ticket-ticket yang anda beli</p>
                </div>
            </div>
        </div>
        <div class="card-body">
                    <table class="table table-hover table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Id Ticket</th>
                                <th>Tanggal</th>
                                <th>Waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($tiket->result_array() as $key) : ?>
                            <tr>
                                <th><p><?=$key['id_tiket']?></p></th>
                                <th><p><?=$key['tanggal']?></p></th>
                                <th><p><?=$key['waktu']?></p></th>
                            </tr>
                            <?php endforeach ?>
                        </tbody>                       
                    </table>
                </div>
</div>
</div>
</div>
<!-- popular_destination_area_end  -->
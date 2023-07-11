<!-- popular_destination_area_start  -->
<div class="destination_details_info">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center mb_70">
                    <h3>History</h3>
                    <p>Daftar history transaksi anda</p>
                </div>
            </div>
        </div>
        <div class="card-body">
        <?php foreach ($history->result_array() as $key) : ?>
        <table class="table table-hover table-striped table-bordered">
            <thead>
                <tr>
                    <b><th colspan="2"><?= $key['tanggal'] ?><p class="right" ><?= $key['waktu'] ?></p></th></b>
                </tr>
                <tr>
                    <th><p><?= $key['Tipe'] ?></p></th>
                    <th class="right"><p>Rp.<?= number_format($key['jumlah'], 0, ',', '.') ?></p></th>
                </tr>
            </thead>
        </table>
        <?php endforeach ?>
        </div>
    </div>
</div>
<!-- popular_destination_area_end  -->
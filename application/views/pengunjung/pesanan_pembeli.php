<?php 
$id_stand = $_SESSION['id_stand'];
if(empty($this->cart->contents()))
{
  echo "<script>alert('Pesanan kosong, Silahkan Pesan dahulu');</script>";
  echo "<script>location= '/project_bb/pengunjung/c_pengunjung/detail_stand/$id_stand'</script>";
}
?>
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
  <!-- Menu -->
<div class="destination_details_info">
    <div class="container">
      <div class="judul-pesanan">
       
        <h3 class="text-center font-weight-bold">PESANAN ANDA</h3>
        <a href="<?= base_url('pengunjung/c_pengunjung/deleteall_cart')?>" class="btn btn-danger btn-sm">Batalkan Pesanan</a>
        <h1></h1>
      </div>
      <table class="table table-bordered" id="example">
        <thead class="thead-light">
          <tr class="text-center">
            <th scope="col">No</th>
            <th scope="col">Nama Pesanan</th>
            <th scope="col">Harga</th>
            <th scope="col" colspan="3">Jumlah</th>
            <th scope="col">Total</th>
            <th scope="col">Opsi</th>
          </tr>
        </thead>
        <tbody>
          <?php $nomor=1; ?>
          <?php foreach ($this->cart->contents() as $key ): ?>
          <?php 
          $harga = $key['price'];
          $jumlah = $key['qty'];
          $total = $harga*$jumlah;
          ?>
          <tr class="text-center">
              <td><?php echo $nomor;?></td>
              <td><?php echo $key['name']?></td>
              <td align="right">Rp. <?php echo number_format($key['price'], 0,',','.')?></td>
                <th>
                  <form action="<?= base_url('pengunjung/c_pengunjung/tambahcart/'.$key['rowid']) ?>" method="post">
                    <input type="hidden" name="qty" value="<?php echo $jumlah ?>">
                    <button class="badge badge-success" type="submit">+</button>
                  </form>
                </th>
                <th><?php echo $jumlah?></th>
                  <th>
                  <form action="<?= base_url('pengunjung/c_pengunjung/kurangcart/'.$key['rowid']) ?>" method="post">
                    <input type="hidden" name="qty" value="<?php echo $jumlah ?>">
                    <button class="badge badge-success" type="submit">-</button>
                  </form>
                </th>
              <td align="right">Rp. <?php echo number_format($total, 0,',','.') ?></td>
              <td>
                <a href="<?= base_url('pengunjung/c_pengunjung/deletecart/'.$key['rowid']) ?>" class="badge badge-danger">Hapus</a>
              </td>
          </tr>
            <?php 
            $id_pengunjung = $_SESSION['id'];
            $jumlah+=$jumlah;
            $nomor++; ?>
          <?php endforeach?>
        </tbody>
        <tfoot>
          <tr>
            <th colspan="6">Total Belanja</th>
            <th class="text-right">Rp. <?php echo number_format($this->cart->total(), 0,',','.') ?></th>
          </tr>
        </tfoot>
      </table><br>
      <form method="POST" action="<?= base_url('pengunjung/c_pengunjung/addpesan')?>">
        <input type="hiiden" name="total" value="<?= number_format($this->cart->total(), 0,',','.')?>">
        <input type="hidden" name="jumlah" value="<?=(int)$this->cart->total_items()?>">
        <input type="hidden" name="id_pengunjung" value=<?=$id_pengunjung?>>
        <a href="<?= base_url('pengunjung/c_pengunjung/detail_stand/'.$id_stand)?>" class="btn btn-primary btn-sm">Lihat Menu</a>
        <button class="btn btn-success btn-sm">Pesan</a>
      </form>        
    </div>
</div>
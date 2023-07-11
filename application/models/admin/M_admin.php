<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{
  #PROFILE
  public function getdetailprofile()
  {
    $id=$_SESSION['id'];
    $this->db->where('id', $id);
    $result = $this->db->get('tb_user')->result_array();
    return $result[0];
  }

  public function editProfile($id)
  {
      $edit = array(
          'first_name' => $this->input->post('first_name'),
          'last_name' => $this->input->post('last_name'),
          'email' => $this->input->post('email'),
          'username' => $this->input->post('username'),
      );
      $this->db->where('id', $id);
      $result = $this->db->update('tb_user', $edit);    
      return $result;
  }
  

  #STAND
  public function getstand()
  {
    $this->db->select('*');
    $result = $this->db->get_where('tb_stand'); //, array('level' => '2')
    return $result;
  }

  public function add_register_stand()
  {
    $config['upload_path']          = './img/';
    $config['allowed_types']        = 'gif|jpg|jpeg|png';
    $config['max_size']             = 100000; // 1MB
    $config['max_width']            = 100000;
    $config['max_height']           = 100000;

    $this->load->library('upload');
    $this->upload->initialize($config);

    if (!$this->upload->do_upload('gambar')) {
      return;
    } else {
      $gambar = $this->upload->data();
      $gambar = $gambar['file_name'];
      $insert = array(
        'id_stand' => $this->input->post('id_stand'),
        'nama_stand' => $this->input->post('nama_stand'),
        'nama_pemilik' => $this->input->post('nama_pemilik'),
        'tipe_stand' => $this->input->post('tipe_stand'),
        'keterangan' => $this->input->post('keterangan'),
        'gambar' => $gambar,
      );
      $this->db->insert('tb_stand', $insert);
      $insert_user = array(
        'first_name' => $this->input->post('nama_stand'),
        'username' => $this->input->post('nama_stand'),
        'password' => md5($this->input->post('nama_stand')),
        'level' => '2',
        'type' => $this->input->post('tipe_stand'),
      );
      $result = $this->db->insert('tb_user', $insert_user);
      return $result;
    }
  }
  public function getdetailstand($id)
  {
    $this->db->where('id_stand',$id);
		$result = $this->db->get('tb_stand') -> result_array();
		return $result[0];
  }

  public function editStand()
  {
    $config['upload_path']          = './img/';
    $config['allowed_types']        = 'gif|jpg|jpeg|png';
    $config['max_size']             = 100000; // 1MB
    $config['max_width']            = 100000;
    $config['max_height']           = 100000;

    $this->load->library('upload');
    $this->upload->initialize($config);

			if (!$this->upload->do_upload('gambar')) {
					$edit = array(
              'nama_stand' => $this->input->post('nama_stand'),
              'nama_pemilik' => $this->input->post('nama_pemilik'),
              'tipe_stand' => $this->input->post('tipe_stand'),
              'keterangan' => $this->input->post('keterangan'),
              'gambar' => $this->input->post('gambarlama'),
						);
            $this->db->where('id_stand', $this->input->post('id_stand'));
            $result = $this->db->update('tb_stand', $edit);
            return $result;
				} else {
					$gambar = $this->upload->data();
					$gambar = $gambar['file_name'];
					$edit = array(
              'nama_stand' => $this->input->post('nama_stand'),
              'nama_pemilik' => $this->input->post('nama_pemilik'),
              'tipe_stand' => $this->input->post('tipe_stand'),
              'keterangan' => $this->input->post('keterangan'),
              'gambar' => $gambar,
							);
              $this->db->where('id_stand', $this->input->post('id_stand'));
              $result = $this->db->update('tb_stand', $edit);
              return $result;
				}
  }

  public function delete_stand($id)
  {
    $this->db->where('id_stand', $id);
    $result = $this->db->delete('tb_stand');
    return $result;
  }

  #PENGUNJUNG
  public function getpengunjung()
  {
    $this->db->select('*');
    $result = $this->db->get_where('tb_user', array('level' => '3'));
    return $result;
  }
  public function add_register_pengunjung()
  {
    $insert = array(
      'id' => $this->input->post('id'),
      'first_name' => $this->input->post('first_name'),
      'last_name' => $this->input->post('last_name'),
      'email' => $this->input->post('email'),
      'username' => $this->input->post('username'),
      'password' => $this->input->post('password'),
      'level' => $this->input->post('level'),
    );
    $result = $this->db->insert('tb_user', $insert);
    return $result;
  }

  #TIKET
  public function datatiket()
  {
    date_default_timezone_set('Asia/Singapore');
    $today = date("Y-m-d");
    $this->db->order_by('id_tiket', 'desc');
    $result = $this->db->get_where('tb_tiket', array('tanggal' => $today));
    return $result;
  }

  public function datalltiket()
  {
    $this->db->select('*');
		$this->db->order_by('id_tiket', 'desc');
    $result = $this->db->get('tb_tiket');
    return $result;
  }
  public function cek_tiket()
  {
    $this->db->order_by('id_tiket','desc');
    $result = $this->db->get_where('tb_tiket',array('status'=>'Invalid'));
    return $result;
  }
  public function validasi_tiket($id)
  {
    $edit = array(
      'status' => 'Valid',
      );
      $this->db->where('id_tiket', $id);
      $result = $this->db->update('tb_tiket', $edit);
      return $result;
  }

  #TOP-UP
  public function tambahsaldo()
  {
    date_default_timezone_set('Asia/Singapore');
    $tgl = date("Y-m-d");
    $waktu = date("H:i:s");
    $pendapatan = array(
      'sumber' => 'Top-Up',
      'tanggal' => $tgl,
      'waktu' => $waktu,
      'pendapatan' => '1000'
    );
    $this->db->insert('tb_pendapatan', $pendapatan);

    $history = array(
      'Tipe' => 'Tunai',
      'id_user' => $this->input->post('id'),
      'tanggal' => $tgl,
      'waktu' => $waktu,
      'jumlah' => $this->input->post('jumlah')
    );
    $this->db->insert('tb_histori', $history);

    $topup = $this->input->post('jumlah');
    $idpelanggan = $this->input->post('id');
    $this->db->select('saldo');
    $this->db->from('tb_saldo');
    $this->db->where('id_user', $idpelanggan);
    $query = $this->db->get();
    $sisa = $query->row()->saldo;
    $saldo = $sisa + $topup;
    $topup_saldo = array(
      'saldo' => $saldo,
    );
    $this->db->where('id_user', $this->input->post('id'));
    $result = $this->db->update('tb_saldo', $topup_saldo);
    return $result;
  }
  public function tambahsaldo_non()
  {
    date_default_timezone_set('Asia/Singapore');
    $tgl = date("Y-m-d");
    $waktu = date("H:i:s");
    $pendapatan = array(
      'sumber' => 'Top-Up',
      'tanggal' => $tgl,
      'waktu' => $waktu,
      'pendapatan' => '1000'
    );
    $this->db->insert('tb_pendapatan', $pendapatan);

    $history = array(
      'Tipe' => 'Non-Tunai',
      'id_user' => $this->input->post('id'),
      'tanggal' => $tgl,
      'waktu' => $waktu,
      'jumlah' => $this->input->post('jumlah')
    );
    $this->db->insert('tb_histori', $history);

    $topup = $this->input->post('jumlah');
    $idpelanggan = $this->input->post('id');
    $this->db->select('saldo');
    $this->db->from('tb_saldo');
    $this->db->where('id_user', $idpelanggan);
    $query = $this->db->get();
    $sisa = $query->row()->saldo;
    $saldo = $sisa + $topup;
    $topup_saldo = array(
      'saldo' => $saldo,
    );
    $this->db->where('id_user', $this->input->post('id'));
    $result = $this->db->update('tb_saldo', $topup_saldo);
    return $result;
  }

  public function getnontunai()
  {
    $id=$_SESSION['id'];
    $this->db->select('*');
    $this->db->where('status','Invalid');
    $result = $this->db->get('tb_buktibayar');
    return $result;
  }
  public function get_id_nontunai($id)
  {
    $this->db->where('id_bukti',$id);
		$result = $this->db->get('tb_buktibayar') -> result_array();
		return $result[0];
  }

  #PENDAPATAN
  public function getpendapatan()
  {
    date_default_timezone_set('Asia/Singapore');
    $today = date("Y-m-d");
    $this->db->order_by('id_pendapatan', 'desc');
    $result = $this->db->get_where('tb_pendapatan', array('tanggal' => $today));
    return $result;
  }
}


/* End of file M_admin_model.php and path \application\models\admin\M_admin_model.php */
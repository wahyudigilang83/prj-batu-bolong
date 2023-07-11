<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class M_stand extends CI_Model 
{
   #PROFILE

   public function getdetailprofile()
  {
    $id=$_SESSION['id'];
    $this->db->where('id_stand', $id);
    $result = $this->db->get('tb_stand')->result_array();
    return $result[0];
  }

  public function editProfile($id)
  {
      $edit = array(
          'nama_stand' => $this->input->post('nama_stand'),
          'nama_pemilik' => $this->input->post('nama_pemilik'),
          'tipe_stand' => $this->input->post('tipe_stand'),
      );
      $this->db->where('id_stand', $id);
      $result = $this->db->update('tb_stand', $edit);    
      return $result;
  }
   
    public function getmenu()
    {
        $id_stand = $_SESSION['id'];
        $this->db->select('*');
        $result = $this->db->get_where('tb_menu', array('id_stand' => $id_stand));
        return $result;
    }

    public function add_menu()
    {
    $config['upload_path']          = './img_menu/';
    $config['allowed_types']        = 'gif|jpg|jpeg|png';
    $config['max_size']             = 100000; // 1MB
    $config['max_width']            = 100000;
    $config['max_height']           = 100000;

    $this->load->library('upload');
    $this->upload->initialize($config);

    if (!$this->upload->do_upload('gambar')) {
        return;
    } else {
        $id_stand = $_SESSION['id'];
        $gambar = $this->upload->data();
        $gambar = $gambar['file_name'];
        $insert = array(
            'id_menu' => $this->input->post('id_menu'),
            'nama_menu' => $this->input->post('nama_menu'),
            'harga' => $this->input->post('harga'),
            'kategori' => $this->input->post('tipe_menu'),
            'gambar' => $gambar,
            'id_stand' => $id_stand,
        );
        $this->db->insert('tb_menu', $insert);
        return $result;
    }
  }
  
  public function getdetailmenu($id)
  {
    $this->db->where('id_menu',$id);
		$result = $this->db->get('tb_menu') -> result_array();
		return $result[0];
  }

  public function editmenu()
  {
    $config['upload_path']          = './img_menu/';
    $config['allowed_types']        = 'gif|jpg|jpeg|png';
    $config['max_size']             = 100000; // 1MB
    $config['max_width']            = 100000;
    $config['max_height']           = 100000;

    $this->load->library('upload');
    $this->upload->initialize($config);

			if (!$this->upload->do_upload('gambar')) {
					$edit = array(
              'nama_menu' => $this->input->post('nama_menu'),
              'harga' => $this->input->post('harga'),
              'kategori' => $this->input->post('tipe_menu'),
              'gambar' => $this->input->post('gambarlama'),
						);
            $this->db->where('id_menu', $this->input->post('id_menu'));
            $result = $this->db->update('tb_menu', $edit);
            return $result;
				} else {
					$gambar = $this->upload->data();
					$gambar = $gambar['file_name'];
					$edit = array(
              'nama_menu' => $this->input->post('nama_menu'),
              'harga' => $this->input->post('harga'),
              'kategori' => $this->input->post('tipe_menu'),
              'gambar' => $gambar,
							);
              $this->db->where('id_menu', $this->input->post('id_menu'));
              $result = $this->db->update('tb_menu', $edit);
              return $result;
		    }
    }
    public function delete_menu($id)
    {
      $this->db->where('id_menu', $id);
      $result = $this->db->delete('tb_menu');
      return $result;
    }

    #PENDAPATAN
    public function getdetailpendapatan()
    {
      $id=$_SESSION['id'];
      $this->db->where('id_stand', $id);
      $this->db->order_by('id_pemesanan','desc');
      $result = $this->db->get('tb_pemesanan');
      return $result;
    }
    public function getdetailpemesanan($id)
    {
      $result = $this->db->get_where('tb_detailpesanan', array('id_pemesanan' => $id));
      return $result;
    }
                        
}


/* End of file M_stand.php_model.php and path \application\models\M_stand.php_model.php */

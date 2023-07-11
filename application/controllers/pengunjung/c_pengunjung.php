<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_pengunjung extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pengunjung/M_pengunjung');
    }


    public function index()
    {
        if (!isset($_SESSION['username'])) {
            redirect('index');
        } else {
            $this->load->view('pengunjung/header');
            $this->load->view('pengunjung/index');
            $this->load->view('pengunjung/footer');
        }
    }

    #STAND
    public function stand()
    {
        if (!isset($_SESSION['username'])) {
            redirect('index');
        } else {
            $data['saldo'] = $this->M_pengunjung->getsaldo();
            $data['stand'] = $this->M_pengunjung->getstand();
            $this->load->view('pengunjung/header');
            $this->load->view('pengunjung/stand', $data);
            $this->load->view('pengunjung/footer');
        }
    }
    public function kembali_stand()
    {
        unset($_SESSION['id_stand']);
        redirect('pengunjung/c_pengunjung/stand');
    }

    public function menustand()
    {
        if (!isset($_SESSION['username'])) {
            redirect('index');
        } else {
            $this->load->view('pengunjung/header');
            $this->load->view('pengunjung/menustand');
            $this->load->view('pengunjung/footer');
        }
    }
    public function detail_stand($id)
    {
        $this->db->select('tipe_stand');
        $query=$this->db->get_where('tb_stand',array('id_stand'=>$id));
        $tipe=$query->row()->tipe_stand;
        $this->session->set_userdata('id_stand', $id);
        if(!isset($_SESSION['username'])){
		    redirect('index');
        }elseif($tipe=="Penyewaan"){
            $data['saldo'] = $this->M_pengunjung->getsaldo();
            $data['stand'] = $this->M_pengunjung->getstand_sewa($id);
            $this->load->view('pengunjung/header');
            $this->load->view('pengunjung/detail_stand_sewa',$data);
            $this->load->view('pengunjung/footer');
        }elseif($tipe=="Resto") {
            $data['saldo'] = $this->M_pengunjung->getsaldo();
            $data['stand'] = $this->M_pengunjung->getdetailstand($id);
            $data['menu'] = $this->M_pengunjung->getstand_menu($id);
            $this->load->view('pengunjung/header');
            $this->load->view('pengunjung/detail_stand_menu',$data);
            $this->load->view('pengunjung/footer');
        }
    }
    #CART
    public function deletecart($rowid)
	{	
        $id_stand = $_SESSION['id_stand'];
		$this->cart->remove($rowid);
		redirect('pengunjung/c_pengunjung/detail_stand/'.$id_stand);
	}
	public function addcart($id)
	{
        $this->db->select('id_stand');
        $query=$this->db->get_where('tb_menu',array('id_menu'=>$id));
        $tipe=$query->row()->id_stand;
		$this->M_pengunjung->addcart($id);
		redirect('pengunjung/c_pengunjung/detail_stand/'.$tipe);
	}
    public function deleteall_cart()
	{
        $id_stand = $_SESSION['id_stand'];
		$this->cart->destroy();
		redirect('pengunjung/c_pengunjung/detail_stand/'.$id_stand);
	}
    public function tambahcart($rowid)
	{
        $id_stand = $_SESSION['id_stand'];
		foreach ($this->cart->contents() as $key) {
			$data = array(
				'rowid' => $rowid,
				'qty' => $this->input->post('qty')+1,
			);
		}
		$this->cart->update($data);
		redirect('pengunjung/c_pengunjung/pesanan/'.$id_stand);
	}
	public function kurangcart($rowid)
	{
        $id_stand = $_SESSION['id_stand'];
		foreach ($this->cart->contents() as $key) {
			$data = array(
				'rowid' => $rowid,
				'qty' => $this->input->post('qty')-1,
			);
		}
		$this->cart->update($data);
		redirect('pengunjung/c_pengunjung/pesanan/'.$id_stand);
	}
    #PESANAN
    public function pesanan($id)
    {
        if (!isset($_SESSION['username'])) {
            redirect('index');
        } else {
            $data['saldo'] = $this->M_pengunjung->getsaldo();
            $this->load->view('pengunjung/header');
            $this->load->view('pengunjung/pesanan_pembeli',$data);
            $this->load->view('pengunjung/footer');
        }
    }
    public function addpesan()
    {
        $id_stand = $_SESSION['id_stand'];
        $cek_saldo = $this->M_pengunjung->addpemesanan();
        if ($cek_saldo === NULL) {
            echo "<SCRIPT language=Javascript>
			        alert('Saldo Lu Gak Cukup Tolol!, Sana Top-up Dulu!')
		        </script>";
            echo "<meta http-equiv='refresh' content='0'; url=<?= base_url('auth')?>>";
        }else{
            $this->M_pengunjung->cetakstruk();
            $this->cart->destroy();
            //redirect('pengunjung/c_pengunjung/deleteall_cart');
        }
		
    }

    #TIKET
    public function ticket()
    {
        if (!isset($_SESSION['username'])) {
            redirect('index');
        } else {
            $data['saldo'] = $this->M_pengunjung->getsaldo();
            $this->load->view('pengunjung/header');
            $this->load->view('pengunjung/ticket', $data);
            $this->load->view('pengunjung/footer');
        }
    }
    public function cekticket()
    {
        if (!isset($_SESSION['username'])) {
            redirect('index');
        } else {
            $data['saldo'] = $this->M_pengunjung->getsaldo();
            $data['tiket'] = $this->M_pengunjung->gettiket();
            $this->load->view('pengunjung/header');
            $this->load->view('pengunjung/cekticket', $data);
            $this->load->view('pengunjung/footer');
        }
    }
    public function belitiket()
    {
        $cek_saldo = $this->M_pengunjung->beli_tiket();
        if ($cek_saldo === NULL) {
            echo "<SCRIPT language=Javascript>
			        alert('Saldo Lu Gak Cukup Tolol!, Sana Top-up Dulu!')
		        </script>";
            echo "<meta http-equiv='refresh' content='0'; url=<?= base_url('auth')?>>";
        } else {
            // $this->M_pengunjung->beli_tiket();
            redirect('pengunjung/c_pengunjung/ticket');
        }

        // $this->t_rules();
        // if ($this->form_validation->run() == FALSE) {
        // $this->load->view('auth/header');
        // $this->load->view('auth/register_pengunjung');
        // $this->load->view('layout/footer');
        // } else {
        // $this->M_pengunjung->beli_tiket();
        // redirect('index');
        // }
    }

    #TOPUP
    public function tunai()
    {
        if (!isset($_SESSION['username'])) {
            redirect('index');
        } else {
            $data['saldo'] = $this->M_pengunjung->getsaldo();
            $this->load->view('pengunjung/header');
            $this->load->view('pengunjung/tunai',$data);
            $this->load->view('pengunjung/footer');
        }
    }

    public function nontunai()
    {
        if (!isset($_SESSION['username'])) {
            redirect('index');
        } else {
            $data['saldo'] = $this->M_pengunjung->getsaldo();
            $this->load->view('pengunjung/header');
            $this->load->view('pengunjung/nontunai',$data);
            $this->load->view('pengunjung/footer');
        }
    }

    public function rules_bukti()
    {
        $this->form_validation->set_rules('gambar','gambar','required');
    }

    public function uploadbukti()
    {
            $this->M_pengunjung->prosesupload();
            redirect('pengunjung/c_pengunjung/nontunai');
        // $this->rules_bukti();
        // if ($this->form_validation->run() == FALSE) {
        //     $data['saldo'] = $this->M_pengunjung->getsaldo();
        //     $this->load->view('pengunjung/header');
        //     $this->load->view('pengunjung/nontunai',$data);
        //     $this->load->view('pengunjung/footer');
        // } else {
        // }
    

    }

    #HISTORY
    public function history()
    {
        if (!isset($_SESSION['username'])) {
            redirect('index');
        } else {
            $data['history'] = $this->M_pengunjung->gethistory();
            $this->load->view('pengunjung/header');
            $this->load->view('pengunjung/history',$data);
            $this->load->view('pengunjung/footer');
        }
    }

    #PROFILE
    public function profile()
    {
        if (!isset($_SESSION['username'])) {
            redirect('index');
        } else {
            $data['profile']=$this->M_pengunjung->getdetailprofile();
            $this->load->view('pengunjung/header');
            $this->load->view('pengunjung/tampil_profile',$data);
            $this->load->view('pengunjung/footer');
        }
    }
    public function ubah_profile()
    {
        if (!isset($_SESSION['username'])) {
            redirect('index');
        } else {
            $data['profile']=$this->M_pengunjung->getdetailprofile();
            $this->load->view('pengunjung/header');
            $this->load->view('pengunjung/profile',$data);
            $this->load->view('pengunjung/footer');
        }
    }

    public function edit_profile($id)
    {
        $this->M_pengunjung->editProfile($id);
        redirect('pengunjung/c_pengunjung/profile');
        // if ($this->form_validation->run() == FALSE) {
        //     $data['profile'] = $this->M_pengunjung->getdetailprofile($id);
        //     $this->load->view('pengunjung/header');
        //     $this->load->view('pengunjung/profile', $data);
        //     $this->load->view('pengunjung/footer');
        // } else {
        //     $this->M_pengunjung->editProfile();
        //     redirect('pengunjung/c_pengunjung/profile/');
        // }
    }
}

/* End of file Pengunjung.php and path \application\controllers\Pengunjung.php */
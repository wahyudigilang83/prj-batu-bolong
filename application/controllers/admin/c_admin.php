<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/M_admin');
    }

    public function index()
    {
        if (!isset($_SESSION['username'])) {
            redirect('index');
        } else {
            $this->load->view('layout/header');
            $this->load->view('admin/body');
            //this->load->view('layout/footer');
        }
    }
     #PROFILE
     public function profile()
     {
         if (!isset($_SESSION['username'])) {
             redirect('profile');
         } else {
             $data['profile']=$this->M_admin->getdetailprofile();
             $this->load->view('layout/header');
             $this->load->view('admin/tampil_profile',$data);
             $this->load->view('layout/footer');
         }
     }
     public function ubah_profile()
     {
         if (!isset($_SESSION['username'])) {
             redirect('index');
         } else {
             $data['profile']=$this->M_admin->getdetailprofile();
             $this->load->view('layout/header');
             $this->load->view('admin/profile',$data);
             $this->load->view('layout/footer');
         }
     }
     public function edit_profile($id)
     {
        $this->M_admin->editProfile($id);
        redirect('admin/c_admin/profile/'.$_SESSION['id']);
        //  if ($this->form_validation->run() == FALSE) {
        //      $data['profile'] = $this->M_admin->getdetailprofile($id);
        //      $this->load->view('admin/header');
        //      $this->load->view('admin/profile', $data);
        //      $this->load->view('admin/footer');
        //  } else {
        //      $this->M_admin->editProfile();
        //      redirect('admin/c_admin/profile/');
        //  }
     }

    #STAND
    public function stand()
    {
        if (!isset($_SESSION['username'])) {
            redirect('index');
        } else {
            $data['stand'] = $this->M_admin->getstand();
            $this->load->view('layout/header');
            $this->load->view('admin/stand', $data);
            $this->load->view('layout/footer');
        }
    }
    public function ubah_stand($id)
    {
        if (!isset($_SESSION['username'])) {
            redirect('index');
        } else {
            $data['stand'] = $this->M_admin->getdetailstand($id);
            $this->load->view('layout/header');
            $this->load->view('admin/edit_stand', $data);
            $this->load->view('layout/footer');
        }
    }

    public function edit_stand($id)
    {
        $this->edit_r_rules();
        if ($this->form_validation->run() == FALSE) {
            $data['stand'] = $this->M_admin->getdetailstand($id);
            $this->load->view('layout/header');
            $this->load->view('admin/edit_stand', $data);
            $this->load->view('layout/footer');
        } else {
            $this->M_admin->editStand();
            redirect('admin/c_admin/stand');
        }
    }


    public function tambah_stand()
    {
        if (!isset($_SESSION['username'])) {
            redirect('index');
        } else {
            $this->load->view('layout/header');
            $this->load->view('admin/tambah_stand');
            $this->load->view('layout/footer');
        }
    }
    public function delete_stand($id)
    {
        $this->M_admin->delete_stand($id);
        redirect('admin/c_admin/stand');
    }

    public function edit_r_rules()
    {
        $this->form_validation->set_rules('nama_stand', 'nama_stand', 'required');
        $this->form_validation->set_rules('nama_pemilik', 'nama_pemilik', 'required');
        $this->form_validation->set_rules('tipe_stand', 'tipe_stand', 'required');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'required');
        //$this->form_validation->set_rules('gambar','gambar','required');
    }

    public function r_rules()
    {
        $this->form_validation->set_rules('nama_stand', 'nama_stand', 'required');
        $this->form_validation->set_rules('nama_pemilik', 'nama_pemilik', 'required');
        $this->form_validation->set_rules('tipe_stand', 'tipe_stand', 'required');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'required');
        $this->form_validation->set_rules('gambar','gambar','required');
    }

    public function prosestambah_stand()
    {
        $this->r_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layout/header');
            $this->load->view('admin/tambah_stand');
            $this->load->view('layout/footer');
        } else {
            $this->M_admin->add_register_stand();
            redirect('admin/c_admin/stand');
        }
    }


    #PENGUNJUNG
    public function pengunjung()
    {
        if (!isset($_SESSION['username'])) {
            redirect('index');
        } else {
            $data['pengunjung'] = $this->M_admin->getpengunjung();
            $this->load->view('layout/header');
            $this->load->view('admin/pengunjung', $data);
            $this->load->view('layout/footer');
        }
    }
    public function x_rules()
    {
        $this->form_validation->set_rules('first_name', 'first_name', 'required');
        $this->form_validation->set_rules('last_name', 'last_name', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
    }
    public function tambah_pengunjung()
    {
        if (!isset($_SESSION['username'])) {
            redirect('index');
        } else {
            $this->load->view('layout/header');
            $this->load->view('admin/tambah_pengunjung');
            $this->load->view('layout/footer');
        }
    }
    public function prosestambah_pengunjung()
    {
        $this->x_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layout/header');
            $this->load->view('admin/tambah_pengunjung');
            $this->load->view('layout/footer');
        } else {
            $this->M_admin->add_register_pengunjung();
            redirect('admin/c_admin/pengunjung');
        }
    }

    #TIKET
    public function tiket()
    {
        if (!isset($_SESSION['username'])) {
            redirect('index');
        } else {
            $data['tiket'] = $this->M_admin->datatiket();
            $this->load->view('layout/header');
            $this->load->view('admin/tiket', $data);
            $this->load->view('layout/footer');
        }
    }
   
    public function alltiket()
    {
        if (!isset($_SESSION['username'])) {
            redirect('index');
        } else {
            $data['tiket'] = $this->M_admin->datalltiket();
            $this->load->view('layout/header');
            $this->load->view('admin/semuatiket', $data);
            $this->load->view('layout/footer');
        }
    }

    #PENDAPATAN
    public function pendapatan()
    {
        if (!isset($_SESSION['username'])) {
            redirect('index');
        } else {
            $data['pendapatan'] = $this->M_admin->getpendapatan();
            $this->load->view('layout/header');
            $this->load->view('admin/pendapatan', $data);
            $this->load->view('layout/footer');
        }
    }

    public function getpendapatan()
    {
        
    }

    #TOP-UP
    public function topup()
    {
        if (!isset($_SESSION['username'])) {
            redirect('index');
        } else {
            $this->load->view('layout/header');
            $this->load->view('admin/topup');
            $this->load->view('layout/footer');
        }
    }
    public function proses_bayar($id)
    {   
        if (!isset($_SESSION['username'])) {
            redirect('index');
        } else {
            $data['nontunai']=$this->M_admin->get_id_nontunai($id);
            $this->load->view('layout/header');
            $this->load->view('admin/topupnon', $data);
            $this->load->view('layout/footer');
        }
    }

    public function nontunai()
    {
        if (!isset($_SESSION['username'])) {
            redirect('index');
        } else {
            $data['nontunai']=$this->M_admin->getnontunai();
            $this->load->view('layout/header');
            $this->load->view('admin/nontunai', $data);
            $this->load->view('layout/footer');
        }
    }

    public function topup_rules()
    {
        $this->form_validation->set_rules('id', 'id', 'required');
        $this->form_validation->set_rules('jumlah', 'jumlah', 'required|numeric|greater_than_equal_to[10000]');
        $this->form_validation->set_rules('bayar', 'bayar', 'required');
    }
    public function topup_non_rules()
    {
        $this->form_validation->set_rules('jumlah', 'jumlah', 'required|numeric|greater_than_equal_to[10000]');
        $this->form_validation->set_rules('bayar', 'bayar', 'required');
    }

    public function prosestopup()
    {
        $this->topup_rules();
        if ($this->form_validation->run() == FALSE) {
            if (!isset($_SESSION['username'])) {
                redirect('index');
            } else {
                $this->load->view('layout/header');
                $this->load->view('admin/topup');
                $this->load->view('layout/footer');
            }
        } else {
            $this->M_admin->tambahsaldo();
            echo "<SCRIPT language=Javascript>
			        alert('Top-Up Saldo Berhasil!')
		        </script>";
		    echo "<meta http-equiv='refresh' content='0'; url=<?= base_url('auth')?>>";
        }
    }
    public function prosestopup_non($id)
    {
        $this->topup_non_rules();
        if ($this->form_validation->run() == FALSE) {
            if (!isset($_SESSION['username'])) {
                redirect('index');
            } else {
                $data['nontunai']=$this->M_admin->get_id_nontunai($id);
                $this->load->view('layout/header');
                $this->load->view('admin/topupnon', $data);
                $this->load->view('layout/footer');
            }
        } else {
            $this->M_admin->tambahsaldo_non();
            echo "<SCRIPT language=Javascript>
			        alert('Top-Up Saldo Berhasil!')
		        </script>";
		    echo "<meta http-equiv='refresh' content='0'; url=<?= base_url('auth')?>>";
        }
    }

    #SCAN
    public function scan()
    {
        if (!isset($_SESSION['username'])) {
            redirect('index');
        } else {
            $data['tiket'] = $this->M_admin->cek_tiket();
            $this->load->view('layout/header');
            $this->load->view('admin/scan', $data);
            $this->load->view('layout/footer');
        }
    }

    public function cek_tiket($id)
    {
        $this->M_admin->validasi_tiket($id);
        redirect('admin/c_admin/scan');
    }
}

/* End of file Admin.php and path \application\controllers\Admin.php */
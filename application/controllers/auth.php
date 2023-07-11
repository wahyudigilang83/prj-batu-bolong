<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth/M_auth');
    }

    public function index()
    {
        $this->load->view('auth/header');
        $this->load->view('auth/login');
        $this->load->view('layout/footer');
    }
    

    public function register()
    {
        $this->load->view('auth/header');
        $this->load->view('auth/register');
        $this->load->view('layout/footer');
    }
    public function r_rules()
	{
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','required');
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('first_name','first_name','required');
		$this->form_validation->set_rules('last_name','last_name','required');
		$this->form_validation->set_rules('type','last_name','required');
	}
    
    public function r_auth()
    {
        $this->r_rules();
		if ($this->form_validation->run() == FALSE) {
                $this->load->view('layout/header');
                $this->load->view('admin/tambah_stand');
                $this->load->view('layout/footer');
			} else {
			    $this->M_auth->add_register();
				redirect('admin/c_admin/stand');
			}
    }

	public function logout()
	{
		session_destroy();
		redirect('auth');
	}
}

/* End of file Pesona.batubolong.php and path \application\controllers\Pesona.batubolong.php */

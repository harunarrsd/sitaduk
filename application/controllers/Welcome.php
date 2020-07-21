<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		$this->load->model('Administrator_model');
         if($this->session->userdata('status_login') != NULL){
            return redirect();
        }
    }

	public function index()
	{
		$data['title'] = "Selamat Datang di Aplikasi SITDAUK - 2020";
		$data['count'] = $this->Administrator_model->countKeluarga();
        $data['countkepkel'] = $this->Administrator_model->countKepkel();
        $data['countPendatang'] = $this->Administrator_model->countPendatang();
		$data['countTetap'] = $this->Administrator_model->countTetap();
		$data['pages'] = $this->load->view('pages_user/main',$data,true);
		$this->load->view('master_user',$data);
	}

	public function login()
	{
		$data['title'] = "Selamat Datang di Aplikasi SITDAUK - 2020";
		$data['pages'] = $this->load->view('auth/login',$data,true);
		$this->load->view('master_user',$data);
	}

	public function register()
	{
		$data['title'] = "Selamat Datang di Aplikasi SITDAUK - 2020";
		$data['pages'] = $this->load->view('auth/register',$data,true);
		$this->load->view('master_user',$data);
	}
}

<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class SignIn extends CI_Controller {

    public function __construct()
    {
        parent::__construct(); 
   
        $this->load->model('SignIn_model');
    }
    

    public function auth()
    {
        // Inputan Dari Login.php
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        // Cek Usernamenya ada di database atau enggak
        $cekUser = $this->SignIn_model->authenticate($username)->row_array();
        // Masuk Ke Validasi Login
        if($cekUser != 0){
            // Jika Prosesnya masuk kesini tandanya, usernamenya ada
            if($cekUser['password'] != $password){
                // Disini Validasi Password, password yg dimasukan sesuai atau tidak sama yang ada di database
                $this->session->set_flashdata('msgError', 'Password Salah , Tolong Cek Kembali!', 'error');
                redirect('Welcome');
            }else{
                // Disini masuk ke proses jika username dan password benar & Ngebikin Session untuk menandakan dia login
                   //   Jika Rolenya 1 itu berarti dia admin kalo 2 itu warga biasa
              if($cekUser['role'] == "1"){
                $session = array(
                    'nama' => $cekUser['nama'],
                    'user' => $cekUser['username'],
                    'role' => $cekUser['role'],
                    'status_login' => "1"
                );
                $this->session->set_userdata($session);
                redirect('Administrator/dashboard');
              }else if($cekUser['role'] == "2"){
                $session = array(
                    'nama' => $cekUser['nama'],
                    'no_kk'   => $cekUser['no_kk'],
                    'nik'   => $cekUser['nik'],
                    'ttl'   => $cekUser['ttl'],
                    'agama'   => $cekUser['agama'],
                    'pekerjaan'   => $cekUser['pekerjaan'],
                    'alamat'   => $cekUser['alamat'],
                    'user' => $cekUser['username'],
                    'role' => $cekUser['role'],
                    'id'   => $cekUser['id_kepkel'],
                    'status'   => $cekUser['status'],
                    'status_login' => "1"
                );
                $this->session->set_userdata($session);
                redirect('Warga/home');
              }
            }
        }else{
            // Disini proses untuk kalo username / tidak ada akun yg terdaftar
            $this->session->set_flashdata('msgError', 'Akun Tidak Terdaftar !, Harap Buat Akun Terlebih Dahulu !', 'error');
            redirect('Welcome');
        }
    }

}

/* End of file SignIn.php */

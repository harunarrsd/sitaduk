<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class SignUp extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('SignUp_model');
    }
    
    public function createAccount()
    {

        $maxCode = 4;
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
        $randomString = ''; 
    
        for ($i = 0; $i < $maxCode; $i++) { 
            $index = rand(0, strlen($characters) - 1); 
            $randomString .= $characters[$index]; 
        }

        
        $codeMax = 2;
        $karakter = '123456789'; 
        $randomNumber = ''; 
    
        for ($i = 0; $i < $codeMax; $i++) { 
            $index = rand(0, strlen($karakter) - 1); 
            $randomNumber .= $karakter[$index]; 
        }

        $id = $randomNumber.$randomString;

        
        $data = array(
            'id_users' => $id,
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
            'role'     => "2"
        );
        
        $nik = $this->input->post('nik');
        $query = $this->SignUp_model->cekUsername($data);
        $ceknik = $this->SignUp_model->cekNik($nik);
        if($query->num_rows() != 0){
            $this->session->set_flashdata('msgError', 'Username sudah terpakai, silahkan gunakan Username lain !', 'error');
            redirect('Welcome/register');
        }else{
          
                if($ceknik->num_rows()!=0){
                    $this->session->set_flashdata('msgError', 'NIK sudah terpakai, silahkan gunakan NIK lain !', 'error');
                    redirect('Welcome/register');
        
                }else{
                    $users = $this->SignUp_model->CreateAccount($data);
                    $kepkel = array(
                        'id_kepkel' => $id,
                        'nama' => $this->input->post('nama'),
                        'nik' => $this->input->post('nik'),
                        'ttl' => $this->input->post('ttl'),
                        'status' => $this->input->post('status'),
                        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                        'alamat' => $this->input->post('alamat'),
                        'agama' => $this->input->post('agama'),
                        'pekerjaan' => $this->input->post('pekerjaan'),
                        'no_kk' => $this->input->post('nokk'),
                        'id_users' => $id
                    );
                    $this->SignUp_model->createKepkel($kepkel);
                    $this->session->set_flashdata('msgSuccess', 'Berhasil mendaftar, silahkan login untuk melanjutkan sesi', 'success');
                    redirect('Welcome/register');
                }
           
        }
    }

}

/* End of file SignUp.php */

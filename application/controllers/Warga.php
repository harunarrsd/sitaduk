<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Warga extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Warga_model');
        
        if($this->session->userdata('status_login') == NULL){
          $this->session->set_flashdata('msgError', 'Silahkan Login Terlebih Dahulu!', 'error');
         redirect('Welcome');
        }else if( $this->session->userdata('role') != 2){
            redirect('Administrator/dashboard');
        }
    }

    public function home()
    {
        $data['title'] = "Selamat Datang Di Halaman Warga - SITADUK 2020";
        $id_kepkel = $this->session->userdata('id');
        $data['count'] = $this->Warga_model->countKeluarga($id_kepkel);
        $data['countkepkel'] = $this->Warga_model->countKepkel();
        $data['pages'] = $this->load->view('warga/home',$data,true);
        $this->load->view('master_user',$data);
    }
    public function keluarga()
    {
        $id_kepkel =  $this->session->userdata('id');
        
        $data['title'] = "Halaman Keluarga - SITADUK 2020";
        $data['keluarga'] = $this->Warga_model->getKeluargaByKepkel($id_kepkel);
        $data['pages'] = $this->load->view('warga/keluarga',$data,true);
        $this->load->view('master_user',$data);
    }

    public function tambahKeluarga()
    {
        $data['title'] = "Halaman Tambah Keluarga - SITADUK 2020";
        $this->load->view('layouts/masterpage',$data);
    }

    public function inputKeluarga()
    {      
        date_default_timezone_set('Asia/Jakarta');
        $tanggal_create = date('Y-m-d H:i:s');
        
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
            'id_ak' => $id,
            'id_kepkel' => $this->input->post('id_kepkel'),
            'nik' => $this->input->post('nik'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'ttl' => $this->input->post('ttl'),
            'agama' => $this->input->post('agama'),
            'pekerjaan' => $this->input->post('pekerjaan'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'created_date' => $tanggal_create
        );

        $cekNIK = $this->Warga_model->ceknik($data['nik']);
        if($cekNIK->num_rows() != 1){
            $this->Warga_model->inputWarga($data);
            $this->session->set_flashdata('msgsuccess', 'Berhasil Menginput Data ', 'success');
            redirect('Warga/tambahKeluarga');
        }else{
            $this->session->set_flashdata('msgerror', 'NIK Sudah Terdaftar ', 'error');
            redirect('Warga/tambahKeluarga');
        }
    }

    public function editKeluarga()
    {
        $data['title'] = "Halaman Tambah Keluarga - SITADUK 2020";
        $id = $this->uri->segment(3);
        $data['getKeluarga'] = $this->Warga_model->editKeluarga($id);
        $this->load->view('layouts/masterpage',$data);        
    }

    public function detailAnggotaKeluarga()
    {
        $data['title'] = "Halaman Tambah Keluarga - SITADUK 2020";
        $id = $this->uri->segment(3);
        $data['getKeluarga'] = $this->Warga_model->editKeluarga($id);
        $data['pages'] = $this->load->view('warga/detailAnggotaKeluarga',$data,true);
        $this->load->view('master_user',$data);        
    }

    public function updateKeluarga()
    {
        date_default_timezone_set('Asia/Jakarta');
        $updated_at = date('Y-m-d H:i:s');
        $id = $this->input->post('id');
        $data = array(
            'nik' => $this->input->post('nik'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'ttl' => $this->input->post('ttl'),
            'agama' => $this->input->post('agama'),
            'pekerjaan' => $this->input->post('pekerjaan'),
            'updated_at' => $updated_at
        );
        $update = $this->Warga_model->updateKeluarga($id,$data);
        $this->session->set_flashdata('msgsuccess', 'Berhasil Merubah Data Anggota Keluarga', 'success');
        redirect('Warga/keluarga');

    }
    public function deleteKeluarga()
    {
        $id = $this->uri->segment(3);
        $delete = $this->Warga_model->deleteKeluarga($id);
        $this->session->set_flashdata('msgsuccess', 'Berhasil Menghapus Anggota Keluarga', 'success');
        redirect('Warga/keluarga');
    }

    public function akunWarga()
    {
        $data['title'] = "Halaman Ganti Password - SITADUK 2020";
        $this->load->view('layouts/masterpage', $data);
        
    }

    public function updatePassword()
    {
        $id = $this->session->userdata('id');
        $password = md5($this->input->post('password'));
        
        $update = $this->Warga_model->updatePassword($id,$password);
        $this->session->set_flashdata('msgsuccess', 'Berhasil Merubah Password', 'success');
        redirect('Warga/akunWarga');
    }

    public function printKeluarga($id)
    {
        $id_kepkel =  $this->session->userdata('id');
        $data['title'] = "Halaman Keluarga - SITADUK 2020";
        $data['keluarga'] = $this->Warga_model->getKeluargaByKepkel($id_kepkel);
        $data['kepkel'] = $this->Warga_model->getKepkelByID($id_kepkel);
        $this->load->view('warga/PrintKeluarga',$data);


        $html = $this->output->get_output();
        $this->load->library('pdf');
        $this->dompdf->loadHtml($html);
        $this->dompdf->setPaper('A4', 'potrait');
        $this->dompdf->render();
        $this->dompdf->stream("welcome.pdf", array("Attachment"=>0));
    }

    public function keluar()
    {
        session_destroy();
        redirect('Welcome');
    }

    // Pengajuan Surat
    public function pengajuan_surat()
    {
        $nik =  $this->session->userdata('nik');
        $this->session->set_userdata('previous_url', current_url());
        $data['title'] = "Halaman Pengajuan Surat - SITADUK 2020";
        $data['keluarga'] = $this->Warga_model->getPengajuanSurat($nik);
        $data['pages'] = $this->load->view('warga/pengajuan_surat',$data,true);
        $this->load->view('master_user',$data);
    }
    public function tambahPengajuanSurat()
    {
        $data['title'] = "Halaman Pengajuan Surat - SITADUK 2020";
        $data['pages'] = $this->load->view('warga/tambahPengajuanSurat',$data,true);
        $this->load->view('master_user',$data);
    }
    public function inputPengajuanSurat()
    {      
        date_default_timezone_set('Asia/Jakarta');
        $tanggal_create = date('Y-m-d H:i:s');
        
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
            'id_surat' => $id,
            'nik' => $this->input->post('nik'),
            'maksud_keperluan' => $this->input->post('maksud_keperluan'),
            'status' => 'Pengajuan'
        );
        $this->Warga_model->inputPengajuanSurat($data);
        $this->session->set_flashdata('msgsuccess', 'Berhasil Menginput Data ', 'success');
        redirect('Warga/tambahPengajuanSurat');
    }
    public function print_surat($id)
    {
        $data['title'] = "Halaman Keluarga - SITADUK 2020";
        $data['get_surat'] = $this->Warga_model->get_print_surat($id);
        $data['get_nik_kk'] = $this->Warga_model->get_nik_kk($id);
        $data['get_nik_ak'] = $this->Warga_model->get_nik_ak($id);
        $this->load->view('warga/print_surat',$data);

        $html = $this->output->get_output();
        $this->load->library('pdf');
        $this->dompdf->loadHtml($html);
        $this->dompdf->set_option('isRemoteEnabled',TRUE);
        $this->dompdf->setPaper('A4', 'potrait');
        $this->dompdf->render();
        $this->dompdf->stream("welcome.pdf", array("Attachment"=>0));
    }

}

/* End of file Warga.php */

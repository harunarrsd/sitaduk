<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Administrator_model');
        $this->load->model('Warga_model');
        $this->load->model('SignUp_model');
        
        if($this->session->userdata('status_login') == NULL){
             $this->session->set_flashdata('msgError', 'Silahkan Login Terlebih Dahulu!', 'error');
             redirect('Welcome');
        }else if( $this->session->userdata('role') != 1){
             redirect('Warga/home');
        }
    }
    
    public function dashboard()
    {
        
        $data['count'] = $this->Administrator_model->countKeluarga();
        $data['countkepkel'] = $this->Administrator_model->countKepkel();
        $data['countPendatang'] = $this->Administrator_model->countPendatang();
        $data['countTetap'] = $this->Administrator_model->countTetap();
        $data['title'] = "Halaman Dashboard Admin - SITADUK 2020";
        $this->load->view('layouts/masterpage', $data);
        
    }
    // KEPALA KELUARGA
    public function daftarKepalaKeluarga()
    {
        $data['title'] = "Halaman Daftar Keluarga - SITADUK 2020";
        $data['getKepKel'] = $this->Administrator_model->getKepkel();
        $this->load->view('layouts/masterpage', $data);
    }


    // DATA KELUARGA
    public function lihatDataKeluarga()
    {
        $data['title'] = "Halaman Data Keluarga - SITADUK 2020";
        $data['getKeluarga'] = $this->Administrator_model->getKeluarga();
        $this->load->view('layouts/masterpage', $data);
    }


    public function lihatKeluarga()
    {
        $id = $this->uri->segment(3);
        $data['title'] = "Halaman Detail Kepala Keluarga - SITADUK 2020";
        $this->session->set_userdata('previous_url', current_url());
        $data['getKepala'] = $this->Administrator_model->getKeluargaKepalaByID($id);
        $data['getKeluarga'] = $this->Administrator_model->getKeluargaByID($id);
        $this->load->view('layouts/masterpage', $data);
    }

    public function editStatusKeluarga($id)
    {
        $id = $this->uri->segment(3);
        $data['title'] = "Halaman Edit Status Keluarga - SITADUK 2020";
        $data['getKepala'] = $this->Administrator_model->getKeluargaKepalaByID($id);
        $this->load->view('layouts/masterpage', $data);
    }

    public function updateStatusKeluarga()
    {
        $id = $this->input->post('id');
        $status = $this->input->post('status');
        $this->Administrator_model->updateStatusKeluarga($id,$status);
        $this->session->set_flashdata('msgsuccess', 'Berhasil Merubah Status Keluarga', 'success');
        redirect('Administrator/lihatDataKeluarga','refresh');
        
    }

    public function printKeluarga($id)
    {
        $id = $this->uri->segment(3);
        $data['title'] = "Halaman Detail Kepala Keluarga - SITADUK 2020";
        $data['getKepala'] = $this->Administrator_model->getKeluargaKepalaByID($id);
        $data['getKeluarga'] = $this->Administrator_model->getKeluargaByID($id);
        $this->load->view('admin/keluarga/PrintKeluarga',$data);


        $html = $this->output->get_output();
        $this->load->library('pdf');
        $this->dompdf->loadHtml($html);
        $this->dompdf->setPaper('A4', 'potrait');
        $this->dompdf->render();
        $this->dompdf->stream("welcome.pdf", array("Attachment"=>0));
    }

    public function printKepalaKeluarga()
    {
        $data['getKepala'] = $this->Administrator_model->getKeluarga();
        $this->load->view('admin/keluarga/print',$data);


        $html = $this->output->get_output();
        $this->load->library('pdf');
        $this->dompdf->loadHtml($html);
        $this->dompdf->setPaper('A4', 'potrait');
        $this->dompdf->render();
        $this->dompdf->stream("welcome.pdf", array("Attachment"=>0));
    }

    // 
    // DATA WARGA
    // 
 

    public function akun()
    {
        $data['title'] = "Halaman Akun - SITADUK 2020";
        $user = $this->session->userdata('user');
        $data['akun'] = $this->Administrator_model->getProfileByUsername($user);
        $this->load->view('layouts/masterpage', $data);
    }

    public function updatePassword($id)
    {
        $id = $this->input->post('id');
        $password = md5($this->input->post('password'));
        $update = $this->Administrator_model->gantiPassword($id,$password);
        $this->session->set_flashdata('msgsuccess', 'Password Berhasil Di Ubah', 'success');
        redirect('Administrator/akun');
        
    }

    public function keluar()
    {
        session_destroy();
        
        redirect('Welcome');
        
    }

    // Kepala Keluarga
    public function tambah_kepala_keluarga()
    {
        $data['title'] = "Halaman Kepala Keluarga - SITADUK 2020";
        $this->load->view('layouts/masterpage',$data);
    }
    public function input_kepala_keluarga()
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
            redirect('administrator/tambah_kepala_keluarga');
        }else{
          
                if($ceknik->num_rows()!=0){
                    $this->session->set_flashdata('msgError', 'NIK sudah terpakai, silahkan gunakan NIK lain !', 'error');
                    redirect('administrator/tambah_kepala_keluarga');
        
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
                    $this->session->set_flashdata('msgSuccess', 'Berhasil menambahkan kepala keluarga', 'success');
                    redirect('administrator/tambah_kepala_keluarga');
                }
        }
    }
    public function edit_kepala_keluarga()
    {
        $data['title'] = "Halaman Kepala Keluarga - SITADUK 2020";
        $id = $this->uri->segment(3);
        $data['getKeluarga'] = $this->Administrator_model->edit_kepala_keluarga($id);
        $this->load->view('layouts/masterpage',$data);        
    }
    public function update_kepala_keluarga()
    {
        $id = $this->input->post('id');
        $data = array(
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
        $update = $this->Administrator_model->update_kepala_keluarga($id,$data);
        $this->session->set_flashdata('msgsuccess', 'Berhasil Merubah Data Anggota Keluarga', 'success');
        redirect('administrator/lihatDataKeluarga');

    }
    public function delete_kepala_keluarga()
    {
        $id = $this->uri->segment(3);
        $delete = $this->Administrator_model->delete_kepala_keluarga($id);
        $this->session->set_flashdata('msgsuccess', 'Berhasil Menghapus Anggota Keluarga', 'success');
        redirect('administrator/lihatDataKeluarga');
    }
    // anggota keluarga
    public function tambah_anggota_keluarga()
    {
        $data['id_kepkel'] = $this->uri->segment(3);
        $data['title'] = "Halaman Tambah Anggota Keluarga - SITADUK 2020";
        $this->load->view('layouts/masterpage',$data);
    }
    public function input_anggota_keluarga()
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
        $id_kepkel = $this->uri->segment(3);
        
        $data = array(
            'id_ak' => $id,
            'id_kepkel' => $id_kepkel,
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
            redirect('administrator/tambah_anggota_keluarga/'.$id_kepkel);
        }else{
            $this->session->set_flashdata('msgerror', 'NIK Sudah Terdaftar ', 'error');
            redirect('administrator/tambah_anggota_keluarga/'.$id_kepkel);
        }
    }
    public function edit_anggota_keluarga()
    {
        $data['title'] = "Halaman Anggota Keluarga - SITADUK 2020";
        $id = $this->uri->segment(3);
        $data['getKeluarga'] = $this->Warga_model->editKeluarga($id);
        $this->load->view('layouts/masterpage',$data);        
    }
    public function update_anggota_keluarga()
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
        redirect($this->session->userdata('previous_url'));
    }
    public function delete_anggota_keluarga()
    {
        $id = $this->uri->segment(3);
        $delete = $this->Warga_model->deleteKeluarga($id);
        $this->session->set_flashdata('msgsuccess', 'Berhasil Menghapus Anggota Keluarga', 'success');
        redirect($this->session->userdata('previous_url'));
    }
    // Surat Pengajuan
    public function surat_pengajuan()
    {
        $data['title'] = "Halaman Surat Pengajuan - SITADUK 2020";
        $this->session->set_userdata('previous_url', current_url());
        $data['get_surat_pengajuan'] = $this->Administrator_model->get_surat_pengajuan();
        $data['get_nik_kk'] = $this->Administrator_model->get_nik_kk();
        $data['get_nik_ak'] = $this->Administrator_model->get_nik_ak();
        $this->load->view('layouts/masterpage',$data);
    }
    public function tambah_surat_pengajuan()
    {
        $data['title'] = "Halaman Surat Pengajuan - SITADUK 2020";
        $data['get_nik_kk'] = $this->Administrator_model->get_nik_kk();
        $data['get_nik_ak'] = $this->Administrator_model->get_nik_ak();
        $this->load->view('layouts/masterpage',$data);
    }
    public function input_surat_pengajuan()
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
            'status' => $this->input->post('status')
        );
        $this->Warga_model->inputPengajuanSurat($data);
        $this->session->set_flashdata('msgsuccess', 'Berhasil Menginput Data ', 'success');
        redirect('administrator/tambah_surat_pengajuan');
    }
    public function edit_surat_pengajuan()
    {
        $data['title'] = "Halaman Surat Pengajuan - SITADUK 2020";
        $id = $this->uri->segment(3);
        $data['get_nik_kk'] = $this->Administrator_model->get_nik_kk();
        $data['get_nik_ak'] = $this->Administrator_model->get_nik_ak();
        $data['get_surat_pengajuan'] = $this->Administrator_model->edit_surat_pengajuan($id);
        $this->load->view('layouts/masterpage',$data);
    }
    public function update_surat_pengajuan()
    {
        $id = $this->input->post('id');
        $data = array(
            'nik' => $this->input->post('nik'),
            'maksud_keperluan' => $this->input->post('maksud_keperluan'),
            'status' => $this->input->post('status'),
        );
        $update = $this->Administrator_model->update_surat_pengajuan($id,$data);
        $this->session->set_flashdata('msgsuccess', 'Berhasil Merubah Data Anggota Keluarga', 'success');
        redirect($this->session->userdata('previous_url'));

    }
    public function delete_surat_pengajuan()
    {
        $id = $this->uri->segment(3);
        $delete = $this->Administrator_model->delete_surat_pengajuan($id);
        $this->session->set_flashdata('msgsuccess', 'Berhasil Menghapus Anggota Keluarga', 'success');
        redirect($this->session->userdata('previous_url'));
    }

}

/* End of file Administrator.php */

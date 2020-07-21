
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator_model extends CI_Model {

    public function countKeluarga()
    {
        $query = $this->db->query('SELECT COUNT(id_ak) AS jumlah FROM anggota_keluarga ');
        return $query;
    }

    public function countPendatang()
    {
        $query = $this->db->query('SELECT COUNT(id_kepkel) AS jumlah FROM kepala_keluarga WHERE status="pendatang"');
        return $query;
    }
    public function countTetap()
    {
        $query = $this->db->query('SELECT COUNT(id_kepkel) AS jumlah FROM kepala_keluarga WHERE status="tetap"');
        return $query;
    }

    public function countKepkel()
    {
        $query = $this->db->query('SELECT COUNT(id_kepkel) AS jumlah FROM kepala_keluarga');
        return $query;
    }
    // KEPALA KELUARGA
    public function getKepkel()
    {
        $query = $this->db->get('kepala_keluarga');
        return $query;
    }

    public function getKepkelByID($id)
    {
        $query = $this->db->get_where('kepala_keluarga', ['id_kepkel' => $id]);
        return $query;
    }

    // ANGGOTA KELUARGA
    public function insertKeluarga($data)
    {
        $this->db->insert('keluarga', $data);
    }

    public function getKeluarga()
    {
        $query = $this->db->get('kepala_keluarga');
        return $query;
    }

    public function getKeluargaKepalaByID($id)
    {
        $query = $this->db->query('SELECT * FROM kepala_keluarga WHERE id_kepkel = "'.$id.'"');
        return $query; 
    }

    public function getKeluargaByID($id)
    {
        $query = $this->db->query('SELECT * FROM anggota_keluarga WHERE id_kepkel = "'.$id.'"');
        return $query; 
    }

    public function updateStatusKeluarga($id,$status)
    {
        $this->db->where('id_kepkel', $id);
        $this->db->update('kepala_keluarga', ['status' => $status]);
    }
    // AKUN

    public function getProfileByUsername($user)
    {
        $query = $this->db->get_where('users', ['username' => $user]);
        return $query;
    }

    public function gantiPassword($id,$password)
    {
        $this->db->where('id_users', $id);
        $this->db->update('users', ['password' => $password]);
    }
    // Kepala keluarga
    public function delete_kepala_keluarga($id)
    {
        $this->db->where('id_kepkel',$id);
        $this->db->delete('kepala_keluarga');
    }
    public function edit_kepala_keluarga($id)
    {
        $query = $this->db->get_where('kepala_keluarga', ['id_kepkel' => $id]);
        return $query;
    }
    public function update_kepala_keluarga($id,$data)
    {
        $this->db->where('id_kepkel', $id);
        $this->db->update('kepala_keluarga',$data);
    }
    // Surat Pengajuan
    public function get_surat_pengajuan()
    {
        $query = $this->db->get('pengajuan_surat');
        return $query;
    }
    public function get_nik_ak()
    {
        $query = $this->db->get('anggota_keluarga');
        return $query;
    }
    public function get_nik_kk()
    {
        $query = $this->db->get('kepala_keluarga');
        return $query;
    }
    public function edit_surat_pengajuan($id)
    {
        $query = $this->db->get_where('pengajuan_surat', ['id_surat' => $id]);
        return $query;
    }
    public function update_surat_pengajuan($id,$data)
    {
        $this->db->where('id_surat', $id);
        $this->db->update('pengajuan_surat',$data);
    }
    public function delete_surat_pengajuan($id)
    {
        $this->db->where('id_surat',$id);
        $this->db->delete('pengajuan_surat');
    }

}

/* End of file Administrator_model.php */

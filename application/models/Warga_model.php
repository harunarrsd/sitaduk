<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Warga_model extends CI_Model {

    public function ceknik($nik)
    {
        $query = $this->db->get_where('anggota_keluarga', ['nik' => $nik]);
        return $query;
    }

    // WARGA
    public function inputWarga($warga)
    {
        $this->db->insert('anggota_keluarga',$warga);
    }

    public function getKeluargaByKepkel($id_kepkel)
    {
        $query = $this->db->get_where('anggota_keluarga', ['id_kepkel' => $id_kepkel]);
        return $query;
    }
    public function getKepkelByID($id)
    {
        $query = $this->db->get_where('kepala_keluarga', ['id_kepkel' => $id]);
        return $query;
    }
    public function countKeluarga($id_kepkel)
    {
        $query = $this->db->query('SELECT COUNT(id_ak) AS jumlah FROM anggota_keluarga WHERE id_kepkel = "'.$id_kepkel.'" ');
        return $query;
    }

    public function countKepkel()
    {
        $query = $this->db->query('SELECT COUNT(id_kepkel) AS jumlah FROM kepala_keluarga');
        return $query;
    }

    public function editKeluarga($id)
    {
        $query = $this->db->get_where('anggota_keluarga', ['id_ak' => $id]);
        return $query;
    }

    public function updateKeluarga($id,$data)
    {
        $this->db->where('id_ak', $id);
        $this->db->update('anggota_keluarga',$data);
    }

    public function updatePassword($id,$password)
    {
        $this->db->where('id_users', $id);
        $this->db->update('users', ['password' => $password]);
    }

    public function deleteKeluarga($id)
    {
        $this->db->where('id_ak',$id);
        $this->db->delete('anggota_keluarga');
    }

    // Pengajuan Surat
    public function inputPengajuanSurat($warga)
    {
        $this->db->insert('pengajuan_surat',$warga);
    }
    public function getPengajuanSurat($nik)
    {
        $query = $this->db->get_where('pengajuan_surat', ['nik' => $nik]);
        return $query;
    }
    public function get_print_surat($nik)
    {
        $query = $this->db->where('nik',$nik);
        $query = $this->db->get('pengajuan_surat');
        return $query;
    }
    public function get_nik_ak($nik)
    {
        $query = $this->db->where('nik',$nik);
        $query = $this->db->get('anggota_keluarga');
        return $query;
    }
    public function get_nik_kk($nik)
    {
        $query = $this->db->where('nik',$nik);
        $query = $this->db->get('kepala_keluarga');
        return $query;
    }

}

/* End of file Warga_model.php */

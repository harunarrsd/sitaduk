<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SignIn_model extends CI_Model {

    public function authenticate($username)
    {
        $query = $this->db->query('SELECT username,password,role, id_kepkel,nama,nik,no_kk,ttl,jenis_kelamin,agama,pekerjaan,alamat,status
        FROM users 
        LEFT JOIN kepala_keluarga ON users.`id_users` = `kepala_keluarga`.`id_users`
        WHERE username = "'.$username.'" ');
        return $query;
    }

}

/* End of file SignIn_model.php */

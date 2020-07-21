<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SignUp_model extends CI_Model {

    public function cekUsername($data)
    {
        $query = $this->db->get_where('users', ['username' => $data['username']]);
        return $query;
    }  
    
    public function cekNIK($nik)
    {
         $query = $this->db->get_where('kepala_keluarga', ['nik' => $nik]);
         return $query;
    }

   public function CreateAccount($data)
   {
       $this->db->insert('users',$data);

       return $this->db->insert_id();
   }

   public function createKepkel($kepkel)
   {
       $this->db->insert('kepala_keluarga',$kepkel);
   }

 
   
}

/* End of file SignUp_model.php */

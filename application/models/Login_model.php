<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
    
    function cek_login($email,$password){
        return $this->db->get_where('tbl_akun',['Email' => $email, 'Password' => $password]);
    }
}

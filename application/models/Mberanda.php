<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mberanda extends CI_Model {
    
    public function ambillogin($email, $password)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get('akun_siswa');
        if($query->num_rows()>0){
            foreach ($query->result() as $row) {
                $sess = array ('email' => $row->email, 'password' => $row->password);
            }
            $this->session->get_userdata($sess);
            redirect('Beranda/index');
        }
        else
        {
            $this->session->set_flashdata('info', 'Maaf email atau password anda salah');
            redirect('Beranda/signin');
        }
    }

    public function register($username,$email,$password)
    {
        $data_user = array(
            'username' => $username,
            'email' => $email,
            'password' => $password
        );
        $this->db->insert('akun_siswa', $data_user);
    }
}

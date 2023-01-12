<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Mberanda');
    }

	public function index()
	{
		$this->load->view('vw_beranda');
	}

	public function biayales()
	{
		$this->load->view('vw_biayales');
	}

	public function caripengajar()
	{
		$this->load->view('vw_caripengajar');
	}

	public function signin()
	{
		$this->load->view('vw_signin');
	}

	public function signup()
	{
		$this->load->view('vw_signup');
	}

	public function referral()
	{
		$this->load->view('vw_referral');
	}

	public function kebijakanprivasi()
	{
		$this->load->view('vw_kebijakanprivasi');
	}

	public function syarat()
	{
		$this->load->view('vw_syarat');
	}

	public function admin()
	{
		$this->load->view('vw_admin');
	}

	public function signinadmin()
	{
		$this->load->view('vw_signinadmin');
	}

	public function	ceklogin(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$validasi_email = $this->Mberanda->query_validasi_email($email);
		if($validasi_email->num_rows() > 0){
			$validasi_ps = $this->Mberanda->query_validasi_password($email,$password);
			if($validasi_ps->num_rows() > 0){
				$x = $validasi_ps->row_array();
				if($x['status'] == '1'){
					$this->session->set_userdata('logged',TRUE);
					$this->session->set_userdata('user',$email);
					$id=$x['id'];
					if($x['akses'] == '1'){
						$name = $x['username'];
						$this->session->set_userdata('access','admin');
						$this->session->set_userdata('id',$id);
						$this->session->set_userdata('name',$name);
						redirect('Beranda/admin');
					}	
					elseif ($x['akses'] == '2') {
						$name = $x['username'];
						$this->session->set_userdata('access','user');
						$this->session->set_userdata('id',$id);
						$this->session->set_userdata('name',$name);
						redirect('Beranda/index');
					}
					else {
						$this->session->set_flashdata('error', validation_errors());
						redirect('Beranda/signin');
					}
				}
			}	
		}

		// $this->load->model('Mberanda');
		// $this->Mberanda->ambillogin($email,$password);
	}

	public function registrasi()
	{
		$this->form_validation->set_rules('email', 'email','trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('username', 'username','trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('password', 'password','trim|required|min_length[1]|max_length[255]');
		if($this->form_validation->run()==true)
		{
			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$this->Mberanda->register($username,$email,$password);
			$this->session->set_flashdata('Daftar_Berhasil','Pendaftara Berhasil');
			redirect('Beranda/signin');
		}
		else
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect('Beranda/signup');
		}
	}

}


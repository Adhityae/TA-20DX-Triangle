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

	public function tentangkami()
	{
		$this->load->view('vw_tentangkami');
	}

	public function kebijakanprivasi()
	{
		$this->load->view('vw_kebijakanprivasi');
	}

	public function syarat()
	{
		$this->load->view('vw_syarat');
	}

	public function	ceklogin(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$this->load->model('Mberanda');
		$this->Mberanda->ambillogin($email,$password);
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


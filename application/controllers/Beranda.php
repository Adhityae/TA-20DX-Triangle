<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
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
		$this->load->model('Mberanda');
		$this->Mberanda->ambillogin($email,$password);
	}

}


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function index()
	{
		$this->load->view('vw_beranda');
	}

	public function biayales()
	{
		$this->load->view('vw_biayales');
	}

	public function signin()
	{
		$this->load->view('vw_signin');
	}
}


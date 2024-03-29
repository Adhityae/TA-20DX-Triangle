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
		$data['tbl_pelajar'] = $this->Mberanda->tampil_data()->result();
		$this->load->view('vw_admin' ,$data);
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

	public function Logout()
	{
		$this->session->sess_destroy();
		redirect('Beranda/signin');
	}

	// public function tampil(){
    //     $data['akun_siswa'] = $this->Mberanda->tampil_data()->result();
    //     $this->load->view('Beranda/admin', $data);
    // }

    public function tambah_aksi()
    {
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $no_hp = $this->input->post('no_hp');
        $status = $this->input->post('status');
        $mata_pelajaran = $this->input->post('mata_pelajaran');
        $data = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'no_hp' => $no_hp,
            'status' => $status,
            'mata_pelajaran' => $mata_pelajaran,
        );

        $this->Mberanda->tambah_data($data, 'tbl_pelajar');
        redirect('Beranda/admin');   
        
    }

    public function edit($id)
    {
        $where = array('id' =>$id);
        $data['akun_siswa'] = $this->Mberanda->edit_barang($where, 'akun_siswa')->result();
        $this->load->view('Beranda/edit', $data);
    }

    public function update(){
        $id = $this->input->post('id');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $username = $this->input->post('username');
        $akses = $this->input->post('akses');
        $status = $this->input->post('status');

        $data = array(

            'email' => $email,
            'password' => $password,
            'username' => $username,
            'akses' => $akses,
            'status' => $status
        );

        $where = array (
            'id' => $id
        );

        $this->Mberanda->update_data($where,$data,'akun_siswa');
        redirect('Beranda/edit');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->MBeranda->hapus_data($where, 'akun_siswa');
        redirect('Beranda/admin');
    }

	public function datasiswa()
    {
        $this->load->view('Beranda/data_siswa');
    }

	public function tambahData()
	{
		$this->load->view('tambahData');
	}
}


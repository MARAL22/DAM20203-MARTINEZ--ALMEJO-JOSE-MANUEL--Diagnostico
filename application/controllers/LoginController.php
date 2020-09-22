<?php

defined('BASEPATH') or exit('No direct script access allowed');

class LoginController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function loginForm()
	{
		$data = ['title' => 'login'];
		$this->load->view('templates/header', $data);
		$this->load->view('modules/login');
		$this->load->view('templates/footer');
	}

	public function login()
	{
		$user = $this->input->post('user');
		$pass = $this->input->post('password');

		if ($user == 'admin' && $pass == 'admin') {
			$user_data = ['username' => $user,
				'logged_in' => true];

			$this->session->set_userdata($user_data);
			$this->session->set_flashdata('success', 'Ahora estas logueado');
			redirect(site_url('principal'));
		} else {
			$this->session->set_flashdata('error', 'Credenciales invalidas');
			redirect(site_url('login'));
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('username');

		$this->session->set_flashdata('success', 'Sesión cerrada correctamente');
		redirect(site_url('login'));
	}


}

/* End of file Controllername.php */

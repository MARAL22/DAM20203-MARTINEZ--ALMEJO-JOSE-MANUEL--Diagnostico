<?php
/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 27/11/2018
 * Time: 12:14 PM
 */

class SessionMiddleware
{
	protected $controller;
	protected $ci;

	public function __construct($controller, $ci)
	{
		$this->controller = $controller;
		$this->ci = $ci;
	}

	public function run()
	{
		if (!$this->ci->session->userdata('logged_in')) {
			$this->ci->session->set_flashdata('error', 'Debes de acceder primero');
			redirect('login');
		}

	}
}

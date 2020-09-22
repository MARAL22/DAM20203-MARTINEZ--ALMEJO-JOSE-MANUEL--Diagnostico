<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class HomeController extends MY_Controller {

		public function __construct()
		{
			parent::__construct();
		}

		protected function middleware()
		{
			return ['Session'];
		}

		public function principal(){
			$data = ['title' =>'principal'];
			$this->load->view('templates/header',$data);
			$this->load->view('modules/principal');
			$this->load->view('templates/footer');
		}

	}

	/* End of file Controllername.php */

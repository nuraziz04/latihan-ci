<?php

Class Admin Extends CI_Controller {

	public function index()
	{

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('backend/admin');
		$this->load->view('templates/footer');

	}

}
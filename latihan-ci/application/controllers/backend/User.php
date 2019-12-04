<?php

Class User Extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('email')) {
			redirect('backend/auth');
		}

		$this->load->model('Admin_model', 'adm');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$email = $this->session->userdata('email');
		$roleId = $this->session->userdata('role_id');

		$data['user'] = $this->adm->cekEmail($email);

		$data['menu'] = $this->adm->getMenu($roleId);

		$data['title'] = 'Admin - CV Dwi Abadi Teknik';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('admin/index');
		$this->load->view('templates/footer');
	}
}
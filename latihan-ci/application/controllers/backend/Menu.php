<?php

Class Menu Extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		is_logged_in();

		$this->load->model('Admin_model', 'adm');
		$this->load->model('Menu_model', 'menu');

	}

	public function index()
	{
		$email = $this->session->userdata('email');
		$roleId = $this->session->userdata('role_id');

		$data['user'] = $this->adm->cekEmail($email);

		$data['menu'] = $this->adm->getMenu($roleId);

		$data['userMenu'] = $this->menu->getUserMenu();

		$data['title'] = 'Admin - CV Dwi Abadi Teknik';

		$this->form_validation->set_rules('idMenu', 'id menu', 'required');

		if($this->form_validation->run() == false){
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('admin/menu', $data);
			$this->load->view('templates/footer');
		} else {
			$this->menu->addUserMenu();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! new User Menu has been created.</div>');
				redirect('backend/menu');
		}
		
	}

	public function editUserMenu()
	{
		$email = $this->session->userdata('email');
		$roleId = $this->session->userdata('role_id');

		$data['user'] = $this->adm->cekEmail($email);

		$data['menu'] = $this->adm->getMenu($roleId);

		$data['userMenu'] = $this->menu->getUserMenu();

		$data['title'] = 'Admin - CV Dwi Abadi Teknik';

		$this->form_validation->set_rules('idMenu', 'id menu', 'required');

		if($this->form_validation->run() == false){
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('admin/menu', $data);
			$this->load->view('templates/footer');
		} else {
			$this->menu->editUserMenu();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! User Menu has been updated.</div>');
					redirect('backend/menu');
		}
	}

	public function deletemenu($id)
	{
		$data = $this->menu->deletemenu($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">User Menu has been delete.</div>');
		redirect('backend/menu');
	}
}
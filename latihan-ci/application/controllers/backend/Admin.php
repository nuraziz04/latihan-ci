<?php

Class Admin Extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		is_logged_in();

		$this->load->model('Admin_model', 'adm');
		$this->load->model('Menu_model', 'menu');
		$this->load->model('Role_model', 'role');
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

	public function role()
	{
		$email = $this->session->userdata('email');
		$roleId = $this->session->userdata('role_id');

		$data['user'] = $this->adm->cekEmail($email);

		$data['menu'] = $this->adm->getMenu($roleId);

		$data['role'] = $this->role->getRole();

		$data['title'] = 'Admin - CV Dwi Abadi Teknik';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('admin/role', $data);
		$this->load->view('templates/footer');
	}

	public function roleAccess($id)
	{
		$email = $this->session->userdata('email');
		$roleId = $this->session->userdata('role_id');

		$data['user'] = $this->adm->cekEmail($email);

		$data['menu'] = $this->adm->getMenu($roleId);

		$data['roleAccess'] = $this->role->getRoleAccess($id);

		$data['userMenu'] = $this->menu->getUserMenu();

		$data['title'] = 'Admin - CV Dwi Abadi Teknik';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('admin/role-access', $data);
		$this->load->view('templates/footer');
	}

	public function changeAccess()
	{
		$cek = $this->role->changeAccess();
		if ($cek['status'] === '404') {
			$this->role->addRole();
		} else {
			$this->role->deleteRole();
		}

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access Changed!</div>');
	}

	public function profile()
	{
		$email = $this->session->userdata('email');

		$data['user'] = $this->adm->cekEmail($email);

		$data['title'] = 'Admin - CV Dwi Abadi Teknik';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('admin/profile');
		$this->load->view('templates/footer');

	}

}
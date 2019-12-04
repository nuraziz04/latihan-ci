<?php

Class Auth Extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_model', 'auth');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		if($this->form_validation->run() == false)
		{
			$data['title'] = 'Login - Dwi Abadi Teknik';

			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/login');
			$this->load->view('templates/auth_footer');
		} else {
			$this->_login();
		}

	}

	private function _login()
	{
		$password = $this->input->post('password');
		$data = $this->auth->cekEmail();

		// cek jika usernya ada
		if($data['status'] == 00)
		{
			foreach ($data['data'] as $row) {
				// cek usernya aktif
				if($row['is_active'] == 1){
					// cek password
					if(password_verify($password, $row['password'])){

						$data = [
                        'email' => $row['email'],
                        'role_id' => $row['role_id']
                    	];
	                    $this->session->set_userdata($data);
	                    if ($data['role_id'] == 1) {
                        	redirect('backend/admin');
	                    } else {
	                        redirect('backend/user');
	                    }
	               
					} else {
						$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                    	redirect('backend/auth');
					}

				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This email has not been activated!</div>');
                	redirect('backend/auth');
				}

			}

		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
            redirect('backend/auth');
		}
	}

	public function registration()
	{
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]', [
			'min_length' => 'Password min 5 characters in length.'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]', [
			'matches' => 'Password dont matches'
		]);

		if($this->form_validation->run() == false)
		{
			$data['title'] = 'Registration - Dwi Abadi Teknik';

			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/registration');
			$this->load->view('templates/auth_footer');
		} else {
			$data = $this->auth->cekEmail();

			if($data['status'] == 00){
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Ups !!! Email already exists</div>');
				redirect('backend/auth/registration');
			} else {
				$this->auth->registration();
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created. Please activate your account</div>');
				redirect('backend/auth');
			}   
		}
		
	}

	public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
        redirect('backend/auth');
    }

}
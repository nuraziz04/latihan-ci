<?php

use GuzzleHttp\Client;

class Auth_model extends CI_model
{
	private $_client;

	public function __construct()
	{
		$this->_client = new Client([
			'http_errors' => false,
			'base_uri' => 'http://localhost/rest-server-dwiabaditeknik/api/'
		]);
	}

	public function cekEmail()
	{
		$data = [
			"email" => $this->input->post('email', true)
		];

		$email = $data['email'];

		$response = $this->_client->request('GET', 'user', [
			'query' => [
				'email' => $email
			]
		]);

		$result = json_decode($response->getBody()->getContents(), true);

		return $result;

	}

	public function registration()
	{
		$data = [
			"name" => htmlspecialchars($this->input->post('name', true)),
			"email" => htmlspecialchars($this->input->post('email', true)),
			"password" => $this->input->post('password1', true)
		];

		$response = $this->_client->request('POST', 'user', [
			'form_params' => $data
		]);

		$result = json_decode($response->getBody()->getContents(), true);
		return $result;
	}
}
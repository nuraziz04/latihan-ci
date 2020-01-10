<?php

use GuzzleHttp\Client;

class Role_model extends CI_model
{
	private $_client;

	public function __construct()
	{
		$this->_client = new Client([
			'http_errors' => false,
			'base_uri' => 'http://localhost/rest-server-dwiabaditeknik/api/'
		]);
	}

	public function getRole()
	{
		$response = $this->_client->request('GET', 'role');

		$result = json_decode($response->getBody()->getContents(), true);

		return $result;
	}

	public function getRoleAccess($id)
	{
		$response = $this->_client->request('GET', 'role', [
			'query' => [
				'id' => $id
			]
		]);

		$result = json_decode($response->getBody()->getContents(), true);
	
		return $result;
	}

	public function changeAccess()
	{
		$data = [
			'roleId' => $this->input->post('roleId'),
			'menuId' => $this->input->post('menuId')
		];

		$response = $this->_client->request('GET', 'menu', [
			'query' => $data
		]);

		$result = json_decode($response->getBody()->getContents(), true);
	
		return $result;
	}

	public function addRole()
	{
		$data = [
			'roleId' => $this->input->post('roleId'),
			'menuId' => $this->input->post('menuId')
		];

		$response = $this->_client->request('POST', 'accessmenu', [
			'form_params' => $data
		]);

		$result = json_decode($response->getBody()->getContents(), true);
	
		return $result;
	}

	public function deleteRole()
	{
		$data = [
			'roleId' => $this->input->post('roleId'),
			'menuId' => $this->input->post('menuId')
		];

		$response = $this->_client->request('DELETE', 'accessmenu', [
			'form_params' => $data
		]);

		$result = json_decode($response->getBody()->getContents(), true);
	
		return $result;
	}
}
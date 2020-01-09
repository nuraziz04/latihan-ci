<?php

use GuzzleHttp\Client;

class Menu_model extends CI_model
{
	private $_client;

	public function __construct()
	{
		$this->_client = new Client([
			'http_errors' => false,
			'base_uri' => 'http://localhost/rest-server-dwiabaditeknik/api/'
		]);
	}

	public function getUserMenu()
	{
		$response = $this->_client->request('GET', 'menu');

		$result = json_decode($response->getBody()->getContents(), true);

		return $result;
	}

	public function getIdUserMenu($id)
	{
		$response = $this->_client->request('GET', 'menu', [
			'query' => [
				'id' => $id
			]
		]);

		$result = json_decode($response->getBody()->getContents(), true);

		return $result;
	}

	public function addUserMenu()
	{
		$data = [
			'idMenu' => $this->input->post('idMenu')
		]; 

		$response = $this->_client->request('POST', 'menu', [
			'form_params' => $data
		]);

		$result = json_decode($response->getBody()->getContents(), true);

		return $result;
	}

	public function editUserMenu()
	{
		$data = [
			'idMenu' => $this->input->post('idMenu'),
			'id' => $this->input->post('id')
		];

		$response = $this->_client->request('PUT', 'menu', [
			'form_params' => $data
		]);

		$result = json_decode($response->getBody()->getContents(), true);

		return $result;
	}

	public function deletemenu($id)
	{
		$response = $this->_client->request('DELETE', 'menu', [
			'form_params' => [
				'id' => $id
			]
		]);

		$result = json_decode($response->getBody()->getContents(), true);

		return $result;
	}

	public function getSubmenu()
	{
		$response = $this->_client->request('GET', 'submenu');

		$result = json_decode($response->getBody()->getContents(), true);

		return $result;
	}

	public function addSubMenu()
	{
		$fg = $this->input->post('isActive');

		if ($fg === NULL) {
			$isActive = '0';
		} else {
			$isActive = '1';
		}

		$data = [
			'menuId' => $this->input->post('menuId'),
			'title' => $this->input->post('title'),
			'url' => $this->input->post('url'),
			'icon' => $this->input->post('icon'),
			'isActive' => $isActive
		];
		
		$response = $this->_client->request('POST', 'submenu', [
			'form_params' => $data
		]);

		$result = json_decode($response->getBody()->getContents(), true);

		return $result;
	}

	public function editSubMenu()
	{
		$fg = $this->input->post('isActive');

		if ($fg === NULL) {
			$isActive = '0';
		} else {
			$isActive = '1';
		}

		$data = [
			'menuId' => $this->input->post('menuId'),
			'title' => $this->input->post('title'),
			'url' => $this->input->post('url'),
			'icon' => $this->input->post('icon'),
			'isActive' => $isActive,
			'id' => $this->input->post('id')
		];

		$response = $this->_client->request('PUT', 'submenu', [
			'form_params' => $data
		]);

		$result = json_decode($response->getBody()->getContents(), true);

		return $result;
	}

	public function deletesubmenu($id)
	{
		$response = $this->_client->request('DELETE', 'submenu', [
			'form_params' => [
				'id' => $id
			]
		]);

		$result = json_decode($response->getBody()->getContents(), true);

		return $result;
	}
}

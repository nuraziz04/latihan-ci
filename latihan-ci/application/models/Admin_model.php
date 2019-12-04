<?php

use GuzzleHttp\Client;

class Admin_model extends CI_model
{
	private $_client;

	public function __construct()
	{
		$this->_client = new Client([
			'http_errors' => false,
			'base_uri' => 'http://localhost/rest-server-dwiabaditeknik/api/'
		]);
	}

	public function cekEmail($email)
	{
		$response = $this->_client->request('GET', 'user', [
			'query' => [
				'email' => $email
			]
		]);

		$result = json_decode($response->getBody()->getContents(), true);

		return $result;

	}

	public function getMenu($roleId)
	{
		$response = $this->_client->request('GET', 'menu', [
			'query' => [
				'roleId' => $roleId
			]
		]);

		$result = json_decode($response->getBody()->getContents(), true);

		return $result;
	}

}
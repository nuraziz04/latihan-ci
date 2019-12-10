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
}
<?php

use GuzzleHttp\Client;

function is_logged_in()
{

	$client = new Client([
      'http_errors' => false,
      'base_uri' => 'http://localhost/rest-server-dwiabaditeknik/api/'
    ]);

	$ci = get_instance();

	if (!$ci->session->userdata('email')) {

		redirect('backend/auth');

	} else {

		$roleId = $ci->session->userdata('role_id');
		$namaMenu = $ci->uri->segment(2);
		// get id dr nama menu di url
		$response = $client->request('GET', 'menu', [
                    'query' => [
                      'namaMenu' => $namaMenu
                    ]
                  ]);

		$result = json_decode($response->getBody()->getContents(), true);

		foreach ($result['data'] as $hasil) {
			$menuId = $hasil['id'];
			$data = $roleId;

			// cek user access menu
			$response = $client->request('GET', 'menu', [
	                    'query' => [
	                      'roleId' => $roleId,
	                      'menuId' => $menuId
	                    ]
	                  ]);

			$hasilCek = json_decode($response->getBody()->getContents(), true);

			if($hasilCek['status'] === '404'){
				redirect('backend/auth/blocked');
			}

		}

	}
}

function check_access($roleId, $menuId)
{
	$client = new Client([
      'http_errors' => false,
      'base_uri' => 'http://localhost/rest-server-dwiabaditeknik/api/'
    ]);
    
	$ci = get_instance();

	// cek user access menu
	$response = $client->request('GET', 'menu', [
                'query' => [
                  'roleId' => $roleId,
                  'menuId' => $menuId
                ]
              ]);

	$hasilCek = json_decode($response->getBody()->getContents(), true);

	if($hasilCek['status'] === '00'){
		return "checked='checked'";
	}
}
<?php

Class Product Extends CI_Controller {

	public function index()
	{

		$this->load->view('frontend/product');

	}

	public function detail()
	{
		$this->load->view('frontend/product_detail');
	}

}
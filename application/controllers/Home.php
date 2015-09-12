<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$this->load->view('common/header');
		$this->load->view('pages/home');
		$this->load->view('common/footer');
	}

	public function web_list()
	{
		$this->load->view('partial/web_list');
	}

	public function web_details()
	{
		$this->load->view('partial/web_details');
	}
}
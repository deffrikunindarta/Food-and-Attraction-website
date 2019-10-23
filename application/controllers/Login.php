<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Login extends CI_Controller
{
	public function index()
	{
		$data['judul'] = 'Home';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/login', $data);
	}

	public function signup()
	{

		$this->load->view('templates/header');
		$this->load->view('templates/signup');
	}
}

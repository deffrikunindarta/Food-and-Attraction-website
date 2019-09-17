<?php


class Login extends CI_Controller{
	public function index(){
		$data['judul'] = 'Home';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/login', $data);		
	}
}
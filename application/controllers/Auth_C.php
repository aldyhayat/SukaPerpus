<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_C extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_model');
        
	}

	public function index()
	{
		$this->load->view('front_end/client/login');
	}

	public function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if($this->Auth_model->login($username,$password))
		{
			redirect('Databuku_C/index');
		}
		else
		{
			$this->session->set_flashdata('error','Username & Password salah');
			$this->load->view('front_end/client/login');
        
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->load->view('front_end/client/home');
	}


}
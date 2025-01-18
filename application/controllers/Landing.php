<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {
    
	public function Login()
	{
		$this->load->view('Landing/Login');
	}
	public function Signup()
	{
		$this->load->view('Landing/Signup');
	}
}
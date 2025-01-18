<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CarpenterAdminSide extends CI_Controller {
    
	public function index()
	{
		$this->load->view('Carpenter/CarpenterAdmin/AdminDashboard');
	}

    public function requestPage()
	{
		$this->load->view('Carpenter/CarpenterAdmin/AdminRequestPage');
	}

    public function profile()
	{
		$this->load->view('Carpenter/CarpenterAdmin/AdminProfile');
	}

    public function changePassword()
	{
		$this->load->view('Carpenter/CarpenterAdmin/AdminChangePassword');
	}
}
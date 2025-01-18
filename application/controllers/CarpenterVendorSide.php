<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CarpentervendorSide extends CI_Controller {
    
	public function index()
	{
		$this->load->view('Carpenter/CarpenterVendor/VendorDashboard');
	}

    public function requestPage()
	{
		$this->load->view('Carpenter/CarpenterVendor/VendorRequest');
	}

    public function profile()
	{
		$this->load->view('Carpenter/CarpenterVendor/VendorProfile');
	}

    public function changePassword()
	{
		$this->load->view('Carpenter/CarpenterVendor/VendorChangePassword');
	}
}
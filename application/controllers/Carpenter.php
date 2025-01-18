<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carpenter extends CI_Controller {

	public function index()
	{
		$this->load->view('Carpenter/Landing');
	}
}
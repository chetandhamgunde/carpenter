<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CarpenterUserSide extends CI_Controller {
    
	public function index()
	{
		$this->load->view('Carpenter/CarpenterHome/carpenterhome');
	}

    public function searchPage()
	{
		$this->load->view('Carpenter/CarpenterHome/carpentersearchpage');
	}

    public function knowMore()
	{
		$this->load->view('Carpenter/CarpenterHome/KnowMore');
	}

    public function bookNow()
	{
		$this->load->view('Carpenter/CarpenterHome/BookNowPage');
	}

    public function Booking()
	{
		$this->load->view('Carpenter/CarpenterHome/UserBooking');
	}

    public function Feedback()
	{
		$this->load->view('Carpenter/CarpenterHome/UserFeedback');
	}

    public function profile()
	{
		$this->load->view('Carpenter/CarpenterHome/ProfilePage');
	}

    public function changePassword()
	{
		$this->load->view('Carpenter/CarpenterHome/UserChangePassword');
	}
}
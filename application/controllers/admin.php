<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index()
	{
		$this->load->view('v_admin');
	}

	function customer()
	{
		$this->load->view('v_customer');
	}
}

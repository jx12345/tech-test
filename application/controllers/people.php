<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class People extends CI_Controller {

	public function index()
	{
		$this->load->view('people/index');
	}
}

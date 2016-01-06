<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class People extends CI_Controller {

	public function index() {
    $this->load->model('Data_handler');
    
    $dh = new Data_handler();
    $data['people'] = $dh->load();
    
		$this->load->view('header');
		$this->load->view('people/index', $data);
    $this->load->view('footer');
	}
    
  public function save() {
    $this->load->model('Data_handler');
    
    $people = $this->input->post('people');
    
    $dh = new Data_handler();
    $dh->save($people);
    
    redirect(base_url('people'));
  }
  
}

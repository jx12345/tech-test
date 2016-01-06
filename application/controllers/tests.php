<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tests extends CI_Controller {

	public function index() {
    $this->load->library('unit_test');
    $this->load->model('Data_handler');
    
    $dh = new Data_handler();
    
    $people = array();
    $people[] = array('firstname' => 'Mick', 'surname' => 'Jagger');
    $people[] = array('firstname' => 'Keith', 'surname' => 'Richards');
    $people[] = array('firstname' => 'Charlie', 'surname' => 'Watts');
    
    $dh->save($people);
    $retrieved = $dh->load();
      
    $test_name = "Data storage and retrieval";

    $this->unit->run($retrieved, $people, $test_name);
		$this->load->view('header');
    $this->load->view('tests/index');
    $this->load->view('footer');
	}
  
  
}

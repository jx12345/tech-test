<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Tests the Data_handler model by testing an array of people against the 
 * same array that has been saved to and retrieved from disk
 */
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
    $test_notes = "An array of people is tested against the same array that has been saved to and retrieved from disk.";
    $this->unit->run($retrieved, $people, $test_name, $test_notes);
    
		$this->load->view('header');
    $this->load->view('tests/index');
    $this->load->view('footer');
	}
  
  
}

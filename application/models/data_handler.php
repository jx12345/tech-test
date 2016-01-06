<?php

/**
 * Handles saving and loading data from file
 *
 * @author Jim
 */
class Data_handler {
  
  private $path;
  
  public function __construct() {
    $this->path = getcwd() . '/data/data.csv';
  }
  
  /**
   * Sets path of file to load / save to
   * @param string $path
   */
  public function setPath($path) {
    $this->path = $path;
  }
  
/**
 * Loads data from file into an array of hashes each with elements firstname and surname
 * @return array
 */
  public function load() {
    $lines = file($this->path);
    $people = array();
    foreach ($lines as $line) {
      $person = array('firstname' => strtok($line, ','), 'surname' => strtok("\n"));
      $people[] = $person;
    }
    return $people;
  }
  
  /**
   * Accepts an array of hashes with the elements firstname and surname
   * turns these into a string of the form firstname,surname\n 
   * and saves to disc as csv
   * @param array $people 
   */
  public function save($people) {
    $data = "";
    foreach ($people as $person) {
      $data .= "{$person['firstname']},{$person['surname']}\n";
    }
    write_file($this->path, $data);
  } 
 
}

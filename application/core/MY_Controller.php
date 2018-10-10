<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * Our base controller.
 * This allows us future flexibility of adding 
 * functionality to all of our models without
 * modifying each model.
 */
class MY_Controller extends CI_Controller{
	
	public function __construct(){
		// call parent constructor
		parent::__construct();
		
		// load resources that will be used 
		// for all methods in the controller
		$this->load->model('book');
		$this->load->model('author');
//		$this->load->model('publisher');	
	}
	
}
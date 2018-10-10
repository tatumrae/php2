<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authors extends MY_Controller {
	
	public function index()
	{
		$data = array();		
		
		// set page title
		$data['title'] = 'Authors';
		
		// example of how to use parameters 
		// (not currently used for anything)
		$x = intval($this->input->get("count"));
		
		$data['authors'] = Author::getAuthors();
		
		$this->load->view('authors/index', $data);
	}
	
//	// $authorId comes from the url after the method name
//	// ex. yoursite/authors/detail/id
//	public function detail($id){
//		$data = array();
//		
//		// load author from database
//		$data['author'] = new Author($id);
//		
//		// set page title
//		$data['title'] = $data['author'];
//		
//		// render template
//		$this->load->view('authors/detail', $data);
//	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Books extends MY_Controller {
	
	public function index()
	{
		$data = array();		
		
		// set page title
		$data['title'] = 'Books';
		
		// example of how to use parameters 
		// (not currently used for anything)
		$x = intval($this->input->get("count"));
		
		$data['books'] = Book::getBooks();
		
		$this->load->view('books/index', $data);
	}
	
	// $bookId comes from the url after the method name
	// ex. yoursite/books/detail/id
	public function detail($id){
		$data = array();
		
		// load book from database
		$data['book'] = new Book($id);
		
		// set page title
		$data['title'] = $data['book']->title;
		
		// render template
		$this->load->view('books/detail', $data);
	}
}

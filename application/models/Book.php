<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends MY_Model {

	public $id; 
	public $title;
	public $publisherCode;
	public $genre;
	public $price;
	public $paperback = false;

	// object composition
	private $_authors;
	private $publisher;

	public function __construct($id = ''){
		// Call the CI_Model constructor
		parent::__construct();
	
		if($id){
			$this->load($id);
		}
	}
	
	public function __toString(){
		return $this->title;	
	}
	
	function load($id){	
		// to manually load the database
		//$this->load->database();
		// we autoload the database in config/autoload.php
		
		$sql = "SELECT * FROM book WHERE book_code = ?";
		$values = array($id);
		
		// $result will be an array of values
		if ($query = $this->db->query($sql, $values)) {
			$row = $query->row(); // we only want the first record
			
			// assign values from the database to the object properties
			$this->id = $row->book_code;
			$this->title = $row->title;
			$this->publisherCode = $row->publisher_code;
			$this->genre = $row->type;
			$this->price = $row->price;
			$this->paperback = $row->paperback;
		}else{
			// if there is no reults, there is probably an error.
			$this->title = "Book Not Found";
		}
		
	}
	// static method to get all books from the database
    public static function getBooks(){
        $db = self::db();
        
        // run query
        $sql = "SELECT book_code AS id, title, publisher_code AS publisherCode, type AS genre, price, paperback
				FROM book
				ORDER BY book_code";
        
        $query = $db->query($sql);
		$result = $query->custom_result_object('Book');
		
		return $result;
    }
	
	public function authors(){
		if(empty($this->_authors)){
			$this->_authors = Author::getAuthorsByBook($this->id);
		}
		
		return $this->_authors; 
	}
}
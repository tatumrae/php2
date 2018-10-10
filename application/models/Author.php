<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Author extends MY_Model {
	
	public 	$authorNum, 
			$authorLast, 
			$authorFirst;
	
	public function __construct($id = ''){
		// Call the CI_Model constructor
		parent::__construct();
	
		if($id){
			$this->load($id);
		}
	}
	
	public function __toString(){
		return $this->authorFirst . " " . $this->authorLast;	
	}
	
	function load($id){	
		// to manually load the database
		//$this->load->database();
		// we autoload the database in config/autoload.php
		
        $sql = "SELECT * FROM author WHERE author_num = ?";
		$values = array($id);
		
		// $result will be an array of values
		if ($query = $this->db->query($sql, $values)) {
			$row = $query->row(); // we only want the first record
			
		// assign values from the database to the object properties
        // -> prop = $row->ColumnName
        $this->authorNum = $row->author_num;
        $this->authorLast = $row->author_last;
        $this->authorFirst = $row->author_first;
			
		}else{
			// if there are no results, there is probably an error.
			$this->authorFirst = "Author Not Found";
		}
	}
	
	public static function getAuthors(){
		$db = self::db();
		
		$sql = "SELECT author_first as authorFirst,
						author_last as authorLast,
						author_num as authorNum
				FROM author";
		$query = $db->query($sql);
		$result = $query->custom_result_object('Author');
		
		return $result;
	}
	
	public static function getAuthorsByBook($bookCode){
		$db = self::db();
		
		$sql = "SELECT author_first as authorFirst, 
                        author_last as authorLast,
                        author.author_num as authorNum
                FROM author
                JOIN wrote ON wrote.author_num = author.author_num
                WHERE wrote.book_code = ?";
		$values = array($bookCode);
		$query = $db->query($sql, $values);
		$result = $query->custom_result_object('Author');
		
		return $result;
	}
}
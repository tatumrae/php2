<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MY_Controller {
	function __construct() { 
         parent::__construct(); 
         $this->load->library('session'); 
         $this->load->helper('form'); 
      } 
		
      public function index() { 
		 $data = array();		
		
		 // set page title
		 $data['title'] = 'Contact';
	
         $this->load->helper('form'); 
         $this->load->view('contact/index.php', $data); 
      } 
  
      public function submitform() { 
		 $data = array();		
		
		 // set page title
		 $data['title'] = 'Thank You!';
		  
         $contactEmail = $this->input->post("contactEmail"); 
		 $contactName = $this->input->post("contactName");
		 $message = $this->input->post("message");
		  
         //Load email library 
         $this->load->library('email'); 
   
         $this->email->from($contactEmail, $contactName); 
         $this->email->to("tatumrae.t@gmail.com");
         $this->email->subject('New Form Submission'); 
         $this->email->message($message); 
   
         //Send mail 
         if($this->email->send()) 
         $this->session->set_flashdata("email_sent","Email sent successfully."); 
         else 
         $this->session->set_flashdata("email_sent","Error in sending Email."); 
		 $this->load->view('contact/thankyou', $data);
      } 
}
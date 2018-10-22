<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    
    function writers(){
        $this->load->view('writer');
    }
    
    public function index()
	{
       $this->load->model('Bookmodel');
      $records = $this->Bookmodel->getBooks();
      //$this->load->helper('url');
      $this->load->view('publisher', ['records' =>$records]);

	}
    
     public function getCover(){
   $this->load->model('bookmodel');
      $records = $this->bookmodel->getRecords();
      //$this->load->helper('url');
		$this->load->view('read', ['records' =>$records]);
       // $this->load->helper('');
     
    }
    
    public function SearchResults(){

      $this->load->model('Bookmodel');
      $records = $this->Bookmodel->search();
      //$this->load->helper('url');
      $this->load->view('publisher', ['records' =>$records]);

    }
    
     public function Category(){

      $this->load->model('Bookmodel');
      $records = $this->Bookmodel->getCategory();
      //$this->load->helper('url');
      $this->load->view('publisher', ['records' =>$records]);

    }
    
    public function rate(){

  $id=$_GET["id"];
  $rating=$_POST["rating"];
  $comment=$_POST["comments"];
  $rating= array(
    'User_ID' => 1,
    'Book_ID' =>$id,
    'Rating' =>$rating,
    'Comment' =>$comment   
  );
        
   $this->load->model('Bookmodel');
   $this->Bookmodel->RateBook($rating);
   $this->load->model('Bookmodel');
      $records = $this->Bookmodel->getRecords();
      //$this->load->helper('url');
      $this->load->view('read', ['records' =>$records]);

 }
    
    function reader(){
        $this->load->view('readers');
    }
    
    

}

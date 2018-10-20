<?php
class Book extends CI_Controller{
    public function index(){
     
      $this->load->model('Bookmodel');
      $records = $this->Bookmodel->getRecords();
      //$this->load->helper('url');
      $this->load->view('Read', ['records' =>$records]);
     
    }
	 public function getCover(){
     
      $this->load->model('Bookmodel');
      $records = $this->Bookmodel->getBooks();
      //$this->load->helper('url');
      $this->load->view('reader', ['records' =>$records]);
     
    }
	public function SearchResults(){
   
      $this->load->model('Bookmodel');
      $records = $this->Bookmodel->search();
      //$this->load->helper('url');
      $this->load->view('reader', ['records' =>$records]);
     
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
      $this->load->view('Read', ['records' =>$records]);

 }
	
	    public function Category(){
     
      $this->load->model('Bookmodel');
      $records = $this->Bookmodel->getCategory();
      //$this->load->helper('url');
      $this->load->view('reader', ['records' =>$records]);
     
    }
	
}
?>
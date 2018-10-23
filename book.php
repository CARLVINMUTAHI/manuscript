<?php
class Book extends CI_Controller{
    public function index(){
     
      $this->load->model('modelbook');
      $records = $this->modelbook->getRecords();
      //$this->load->helper('url');
      $this->load->view('Readmodule', ['records' =>$records]);
     
    }
	 public function getCover(){
     
      $this->load->model('modelbook');
      $records = $this->modelbook->getBooks();
      //$this->load->helper('url');
      $this->load->view('reader', ['records' =>$records]);
     
    }
	public function SearchResults(){
   
      $this->load->model('modelbook');
      $records = $this->modelbook->search();
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
   $this->load->model('modelbook');
   $this->modelbook->RateBook($rating);
   $this->load->model('modelbook');
      $records = $this->modelbook->getRecords();
      //$this->load->helper('url');
      $this->load->view('Readmodule', ['records' =>$records]);

 }
	
	    public function Category(){
     
      $this->load->model('modelbook');
      $records = $this->modelbook->getCategory();
      //$this->load->helper('url');
      $this->load->view('reader', ['records' =>$records]);
     
    }
	
}
?>
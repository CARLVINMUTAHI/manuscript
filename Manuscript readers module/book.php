<?php
class Book extends CI_Controller{
    public function index(){
     
      $this->load->model('Bookmodel');
      $records = $this->Bookmodel->getRecords();
      //$this->load->helper('url');
      $this->load->view('Read', ['records' =>$records]);
     
    }
}
?>
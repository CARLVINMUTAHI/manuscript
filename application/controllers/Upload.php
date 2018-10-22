<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('upload_model');
        //$this->load->library('form_validation');
        
    }
    
    public function custom_view(){
        $this->load->view('writer', array('error' => ' ' ));
    }
    
    public function do_upload(){
        
        
        $data['Book_Name'] = $this->input->post('Book_Name');
        $data['Book_Category'] = $this->input->post('Book_Category');
        $data['Author'] = $this->input->post('Author');
        $data['Year'] = $this->input->post('Year');
        $data['Synopsis'] = $this->input->post('Synopsis');
        
        //$data['title'] = $this->input->post('title');

        
        $config = array(
            'upload_path' => "./assets/Books/",
            'allowed_types' => "gif|jpg|png|jpeg|pdf",
            'overwrite' => TRUE,
            'max_size' => "4096000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
            
        );
        
        
        $this->load->library('upload', $config);
        
        
        if ( ! $this->upload->do_upload('Book')){
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('writer', $error);
			}else{
 
				//file is uploaded successfully
				//now get the file uploaded data 
				$upload_data = $this->upload->data();
 
				//get the uploaded file name
				$data['Book'] = $upload_data['file_name'];
 
				//store pic data to the db
				$this->upload_model->store_pic_data($data);
 
				redirect('/');
			}
        
//        if ( ! $this->upload->do_upload('Image_Data')){
//				$error = array('error' => $this->upload->display_errors());
//				$this->load->view('writer', $error);
//			}else{
// 
//				//file is uploaded successfully
//				//now get the file uploaded data 
//				$upload_data = $this->upload->data();
// 
//				//get the uploaded file name
//				$data['Image_Data'] = $upload_data['file_name'];
// 
//				//store pic data to the db
//				$this->upload_model->store_pic_data($data);
// 
//				redirect('/');
//			}
        
        
//        if($this->upload->do_upload())
//        {
//            $data = array('upload_data' => $this->upload->data());
////          $this->load->view('upload_success',$data);
//            $
//            echo 'success';
//            }
//        
//        else
//            {
//            $error = array('error' => $this->upload->display_errors());
//            $this->load->view('writer', $error);
//            }
        }
    
    
    
    }

?>
<?php

class Auth extends CI_Controller{
    
    public function login(){
        
         $this->form_validation->set_rules('username','Username','required');
 $this->form_validation->set_rules('password','Password','required');
        
        if($this->form_validation->run()==TRUE){
            
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            
            $this->db->select('*');
            $this->db->from('users');
            $this->db->where(array('username'=>$username, 'password' => $password));
            
            $query = $this->db->get();
            
            $user = $query->row();
            
        }
        
        $this->load->view('login');
    }
    
     public function register(){
         
         if(isset($_POST['register'])){
             $this->form_validation->set_rules('username','Username','required');
             $this->form_validation->set_rules('email','Email','required');
             $this->form_validation->set_rules('password','Password','required');
             
             
             if($this->form_validation->run() == TRUE){
                 echo 'form validated';
                 
                 $data = array(
                    'username'=>$_POST['username'],
                    'email'=>$_POST['email'],
                    'password'=>$_POST['password'], 
                     'gender'=>$_POST['gender'],
                   'created_date'=>date('Y-m-d'),
                     'phone'=>$_POST['phone']
                     
             );
                 $this->db->insert('users', $data);
                 $this->session->set_flashdata("success");
                 
                 redirect("auth/register","refresh");
             }
         }
         
         $this->load->view('register');
     }
}
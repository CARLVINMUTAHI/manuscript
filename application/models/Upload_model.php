<?php

class Upload_model extends CI_Model{
    
    function store_pic_data($data){
        $insert_data['title'] = $data['title'];
		$insert_data['category'] = $data['category'];
		$insert_data['synopsis'] = $data['synopsis'];
		$insert_data['userfile'] = $data['userfile'];

        $query = $this->db->insert('manuscripts', $insert_data);
        
    }
}
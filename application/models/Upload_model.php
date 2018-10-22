<?php

class Upload_model extends CI_Model{
    
    function store_pic_data($data){
        if(isset($_POST['upload'])){
            
        $insert_data['Book_Name'] = $data['Book_Name'];
		$insert_data['Book_Category'] = $data['Book_Category'];
        $insert_data['Author'] = $data['Author'];
        $insert_data['Year'] = $data['Year'];
		$insert_data['Synopsis'] = $data['Synopsis'];
		$insert_data['Book'] = $data['Book'];
//        $insert_data['Image_Data'] = $data['Image_Data'];
            
//             $insert_data=array(
//                            'Book_Name'=>$_POST['Book_Name'],
//                            'Book_Category'=>$_POST['Book_Category'],
//                            'Author'=>$_POST['Author'],
//                            'Year'=>$data['Year'],
//                            'Synopsis'=>$data['Synopsis'],
//                            'Book'=>$data['upload_data']['file_name'],
//                            'Image_Data'=>$data['upload_data']['file_name']
//                            );
        
        }
        $query = $this->db->insert('manuscripts', $insert_data);
        
    }
    
    
}
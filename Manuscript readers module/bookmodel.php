<?php 
class Bookmodel extends CI_Model{
    public function getRecords(){
        $query = $this->db->get('manuscripts');
       return $query->result();
    }
}
?>
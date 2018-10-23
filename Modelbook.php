<?php 
class modelbook extends CI_Model{
    public function getRecords(){
		$book=$_GET['id'];
		  $query = $this->db->query("SELECT * from manuscripts Where Book_ID=$book");
       return $query->result();
    }
	 public function getBooks(){
        $query = $this->db->get('manuscripts');
       return $query->result();
    }
	 public function search(){

		$book=$_POST["search"];
		  $query = $this->db->query("SELECT * FROM manuscripts WHERE Book_Name LIKE '%$book%'");
       return $query->result();
    }
	public function RateBook($rating){ 
  $this->db->insert('rating', $rating); 
 }
   public function getCategory(){
	   $book=$_POST['category'];
		if($book=="all")
		{
			$query = $this->db->query("SELECT * FROM `manuscripts`");
		}
		else {
		  $query = $this->db->query("SELECT * FROM `manuscripts` WHERE `Book_Category`='$book'");
		}
       return $query->result();
    }
	
}
?>
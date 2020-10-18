<?php
              
class Update_M extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
       
    }
     
  
    function update($id,$user,$passw,$name,$lastname,$email,$identification,$typeIdentification)
	{
	$this->db->query("UPDATE users SET user='$user',passw='$passw', name='$name', lastname='$lastname',email='$email' WHERE identification='".$identification."'");
	}	
}
	

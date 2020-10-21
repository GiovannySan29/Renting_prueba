<?php
        class Update_M extends CI_Model{
            public function update($userData){
            
                // $response =$this->Update_C->update($userData);
                $this->load->view('Layouts/header');
                $this->load->view('sign_in_V');
                $this->load->view('Layouts/footer');
                
                    $this->db->query("UPDATE users SET id='{$userData['id']}',user='{$userData['user']}',passw='{$userData['passw']}',name='{$userData['name']}',lastname='{$userData['lastname']}',email='{$userData['email']}',identification='{$userData['identification']}',typeidentification='{$userData['typeidentification']}'");
                     
               
            }      
// class Update_M extends CI_Model{
//     public function __construct() {
//         parent::__construct();
//         $this->load->database();
       
//     }
     
  
//     function update($id,$user,$passw,$name,$lastname,$email,$identification,$typeIdentification)
// 	{
// 	$this->db->query("UPDATE users SET user='$user',passw='$passw', name='$name', lastname='$lastname',email='$email',typeIdentification='$typeIdentification'  WHERE  identification='".$identification."' ");
// 	}	
} 
	

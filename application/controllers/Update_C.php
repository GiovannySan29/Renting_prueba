<?php

class Update_C extends CI_Controller{
    public function __construct() {
        
        parent::__construct();
    
        $this->load->database();
        $this->load->helper("url"); 
        $this->load->model("Update_M");
    }
    public function update($userData){
        $id= $this->input->get('id');
        $user=$this->input->post('user');
        $passw=$this->input->post('passw');
        $name=$this->input->post('name');
        $lastname=$this->input->post('lastname');
        $email=$this->input->post('email');
        $identification=$this->input->post('identification');
        $typeidentification=$this->input->post('typeidentification');
            $userData =array(
            'id' =>$id,
            'user'=>$user,
            'passw'=>$passw,
            'name'=>$name,
            'lastname'=>$lastname,
            'email'=>$email,
            'identification'=>$identification,
            'typeidentification'=>$typeidentification,
            );
            $response= $this->Update_M->update($userData);
                $redirect = base_url()."/home";
                header("location: $redirect");
                echo $response;
    }
       
    
}

    // public function update($identification)
	// {
    //     // $typeIdentification=$this->input->post('typeIdentification');
    //     $identification=$this->input->post('identification');
	//     $result=$this->Update_M->update($identification );
	//     $this->load->view('update_V',$result);	
	
	// 	if($this->input->post('update')){
	// 	$typeIdentification=$this->input->post('typeIdentification');
    //     $user=$this->input->post('user');
    //     $passw=$this->input->post('passw');
    //     $name=$this->input->post('name');
    //     $lastname=$this->input->post('lastname');
    //     $email=$this->input->post('email');


	// 	$this->Update_M->update($user,$passw,$name,$lastname,$email,$identification,$typeIdentification);
	// 	$this->load->view('Layouts/header');
	// 	$this->load->view('Update_V');
    //     $this->load->view('Layouts/footer');
	// 	}
    

    // }
// }
<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class User extends Controller {


//auto reload
	public function __construct() {
		parent::__construct();
		$this->call->model('User_model');
		$this->call->helper(array('form','alert','url'));

		
	
	}
	
	
	//insert data
	public function show_data(){
		$data = $this->User_model->retrieve_data();
	   if($this->form_validation->submitted())
	   {
		$this->call->library('form_validation');
		$this->form_validation
			 ->name('username')->required()
			 ->min_length(5)
			->max_length(15)
			 ->name('password')->required()
			 ->name('email')->required()
			 ->valid_email()
			 ->name('usertype')->required();


			 if($this->form_validation->run()){ 
				if( $this->User_model->insert_data($this->io->post('username'),
				 $this->io->post('password'),
				  $this->io->post('email'), 
				  $this->io->post('usertype'))){

				  //var_dump($this->io->post());
				 $this->session->set_flashdata(array('status' => 'User was Successfully added'));
				 redirect('show_data'); 
			       
	   exit;
		
		}
	  }
	  }
	  $this->call->view('users/show', $data);
	  }



  //deleting data
  public function delete_data($id){
	if ($this->User_model->delete_data($id))
	  redirect ('show_data');
	exit;
  }
   


  public function update_data(){
	/* $this->load-.view('user/show_data');
	exit; */
	  if($this->form_validation->submitted())
	  {
		    
		$this->call->library('form_validation');
		$this->form_validation
			->name('username')->required()
			//->min_length(5)
		   // ->max_length(15)
			->name('password')->required()
			->name('email')->required()
			->valid_email()
			->name('usertype')->required();
  
		  if($this->form_validation->run()){ 
			$result= $this->User_model->update_data($this->io->post('id'), $this->io->post('username'), $this->io->post('password'), $this->io->post('email'), $this->io->post('usertype'));{
			  //var_dump($this->io->post());
			//  $this->session->set_flashdata(array('status' => 'User was Successfully updated'));
			//  redirect('show_data');        
				

			if ($result) 
				return true;
			
			
			}
		}
	}
}

  
   public function edit_data($id){
	$data = $this->User_model->get_single_data($id);
	$this->call->view('users/edit', $data);
  }
  
  
  }

?>
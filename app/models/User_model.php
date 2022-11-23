<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class User_model extends Model {

  

    public function insert_data($username,$password,$email,$usertype){
    {

      $data=array(
        'username'=>$username,
        'password'=>$password,
        'email'=>$email,
        'usertype'=>$usertype     
      );
  
      $result= $this->db->table('tb_crud')
               ->insert($data);
               
      if($result)
        return true;    
    }
  }
  // retrive data
  public function retrieve_data(){
    return$this->db->table('tb_crud')->get_all();
  }
  

//delete data

public function delete_data($id){
  $result = $this->db->table('tb_crud')   
                  ->where(array('id' => $id))    
                  ->delete();             
                 
       if ($result)
       return true;
}
//Update Data
public function update_data($id, $username, $password, $email, $usertype){
  $data = array(
    'username' => $username,
    'password' => $password,
    'email' => $email,
    'usertype' => $usertype,

  );

$result = $this->db->table('tb_crud')
            ->where(array('id'=> $id))
             ->update($data);
              redirect('show_data');
      
if ($result)
return true;
}



public function get_single_data($id){
  return $this->db->table('tb_crud')
  ->where('id',$id)
  ->get();
}


}



  
?>
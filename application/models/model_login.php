<?php if(!defined('BASEPATH'))exit('No direct script access allowed');

class Model_login extends CI_Model {

    public function cek_username_password($username,$password) {
        
        //cara 1
     //  $sql = "SELECT * FROM users WHERE username=$username AND password=$password ";
       
   //    $hasil= $this->db->query($sql);
       
       //cara 2
       $hasil= $this->db->where('username',$username)->where('password',$password)->limit(1)->get('users');

           if($hasil->num_rows()>0){
           
           return $hasil->row();
           
       }  else {
       
           return FALSE ;
       }
    }
    

}

<?php
class registrationmodel extends CI_Model{
    public function registration($array){
       
        $this->db->insert("users",$array);

    }
}
?>
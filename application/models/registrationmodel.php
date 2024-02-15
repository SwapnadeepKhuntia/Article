<?php
class registrationmodel extends CI_Model{
    public function registration($imagedata){
        // echo $firstname;
        // echo $lastname;
        // echo $email;
        // echo $password;
        // echo $filename;
        // echo $post;

        $this->db->insert("use",$imagedata);


        echo "<pre>";
        print_r($imagedata);




    }
}
?>
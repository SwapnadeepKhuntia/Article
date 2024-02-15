<?php

class loginmodel extends CI_Model{

    public function isvalidate($email,$password){

        $sql=$this->db->where(["email"=>$email,"password"=>$password])
                      ->get("users");
                    //   -where("email","password")
                    //   ->where("$email","$password")
                    //   ->from("users");
                     
                  // echo "<pre>";    
                  //   print_r($sql->result());
                  //     echo "<pre>";
                  //     print_r($sql);
            if($sql->num_rows())
            {
                return $sql->row()->id;
            }
            else{
                return false;
            }
          
    }

    public function articallist(){
       $id = $this->session->userdata("id");
       $q = $this->db->select("*")
                // select("article_title,article_body")
                 ->from("artical")
                 ->where(["user_id"==$id])
                 ->get();
        
                 return $q->result();
                 

    }
}

?>
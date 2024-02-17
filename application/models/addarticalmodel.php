<?php
 class addarticalmodel extends CI_Model{
    public function addarticle($array){
      $sql = $this->db->insert("artical",$array);
                    //  echo "<pre>";    
                    // print_r($sql->result());
                      // echo "<pre>";
                      // print_r($sql);
    } 
}
?>
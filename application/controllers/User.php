<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends My_Controller{

    public function index(){
        // $this->load->helper("url");
        // $this->load->helper("html");
        $this->load->view("users/artical_list");
    }
}

?>
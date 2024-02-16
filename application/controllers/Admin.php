<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Admin extends My_Controller{

    // public function __construct(){
    //   parent :: __construct();

    //   if(!$this->session->userdata("id"))
    //   return redirect("Admin/login");
    //   }
    
    public function login(){
           $this->load->library('form_validation','fv');
           $this->form_validation->set_rules("email","Email","required|trim|valid_email");
           $this->form_validation->set_rules("pass","password","trim|required|min_length[8]");


           $this->form_validation->set_error_delimiters("<div class='text-danger fw-bold'>","</div>");


          if($this->form_validation->run()){
            $email = $this->input->post("email");
            $password=$this->input->post("pass");

            $this->load->model("loginmodel");

            $id = $this->loginmodel->isvalidate($email,$password);

            if($id)
            {
                  //  echo "details match";
                  //  $this->load->view("users/artical_list");
                  // $this->load->library("session");
               $this->session->set_userdata("id",$id);
               //  echo  $this->session->userdata("id");
                return redirect("admin/welcome");
            
            }
            else{
              // $this->load->view("admin/login");
              // show_error("email not exits");
              $this->session->set_flashdata("login_faild","Invalid Username/Password");
              return redirect("admin/login");
            }

          }
          else
          {
            //   echo validation_errors();
            $this->load->view("admin/login");

          }
       }

       public function registration(){

        $this->load->library("form_validation");
        $this->form_validation->set_rules("fname","First name","required|trim|alpha");
        $this->form_validation->set_rules("lname","Last name","required|trim|alpha");
        $this->form_validation->set_rules("email","Email","required|trim|valid_email|is_unique[users.email]");                     
        $this->form_validation->set_rules("pass","password","trim|required|min_length[8]");

        $this->form_validation->set_error_delimiters("<div class='text-danger fw-bold'>","</div>");

        if($this->form_validation->run())
        {
            // $this->load->library("email");

            // $this->email->from(set_value("email"),set_value("fname"));
            // $this->email->to("swapnadipkhutia@gmail.com");
            // $this->email->subject("Registration Gretting...");

            // $this->email->message("Thank you for Registration");
            // $this->email->set_newline("\r\n");
            // $this->email->send();

            // if(!$this->email->send()){
            //   show_error($this->email->print_debugger());
            // }else{
            //   echo "Your email has been sent";
            // }

        }else{
          $this->load->view("admin/registration");
        }
       }





       public function welcome(){

        if(! $this->session->userdata("id"))
         return redirect("Admin/login");
         $this->load->model("loginmodel","ar");
         $articales = $this->ar->articallist();
        $this->load->view("admin/dashboard",["art"=>$articales]);
       }

       public function logout(){
        $this->session->unset_userdata("id");
        return redirect("admin/login");
       }

      //  public function adduser(){

      //  }
      //  public function edituser(){
         
      //  }
      //  public function deleteuser(){
         
      //  }
   }
?>
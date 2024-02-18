<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Admin extends My_Controller{
 
    public function login(){
           $this->form_validation->set_rules("email","Email","required|trim|valid_email");
           $this->form_validation->set_rules("pass","password","trim|required|min_length[8]");


           $this->form_validation->set_error_delimiters("<div class='text-danger fw-bold'>","</div>");

           if($this->session->userdata("id"))
           return redirect("Admin/welcome");

          if($this->form_validation->run()){
            $email = $this->input->post("email");
            $password=$this->input->post("pass");

            $this->load->model("loginmodel");

            $id = $this->loginmodel->isvalidate($email,$password);
            echo $id;
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

        if($this->form_validation->run("registration_rules"))
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

            $post=$this->input->post();
            $this->load->model("registrationmodel");
           if(!$this->registrationmodel->registration($post)){

              $this->session->set_flashdata("reg_message","Registration Successfull");
              $this->session->set_flashdata("res_class","alert-success");
           }
           else{
              $this->session->set_flashdata("reg_message","Registration not Successfull");
              $this->session->set_flashdata("res_class","alert-danger");
           }

           return redirect("admin/registration");

        }else{
          $this->form_validation->set_error_delimiters("<div class='text-danger fw-bold'>","</div>");
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

       public function addarticle(){

       if($this->form_validation->run("add_article_rules"))
        {
           $post = $this->input->post();
           $this->load->model("addarticalmodel");
           if(!$this->addarticalmodel->addarticle($post)){
           $this->session->set_flashdata("message","Data Add Success full");
           $this->session->set_flashdata("message_class","alert-success");
          }else{
            $this->session->set_flashdata("message","Article not added plese try again");
            $this->session->set_flashdata("message_class","alert-danger");
          }
          return redirect("admin/welcome");

        }else{
          $this->form_validation->set_error_delimiters("<div class='text-danger fw-bold'>","</div>");
          $this->load->view("article/Add_article");
        }
       }
      //  public function edituser(){
         
      //  }
       public function deletearticle(){
         
        $artiid = $this->input->post("id");
        $this->load->model("addarticalmodel");
        if(!$this->addarticalmodel->deletearticle($artiid)){
        $this->session->set_flashdata("message","Delete Success full");
        $this->session->set_flashdata("message_class","alert-success");
       }else{
         $this->session->set_flashdata("message","Plese try again.. not deleted");
         $this->session->set_flashdata("message_class","alert-danger");
       }
       return redirect("admin/welcome"); 



       }

      //  public function __construct(){
      // parent :: __construct();

      // if(!$this->session->userdata("id"))
      // return redirect("Admin/login");
      // }
   }
?>
<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }
  }

  function index(){
    //Allowing session to admin only
      if($this->session->userdata('level')==='1'){
          $this->load->view('dashboard_view');
      }else{
          echo "Access Denied";
      }

  }

  function staff(){
    //Allowing session to staff only
    if($this->session->userdata('level')==='2'){
      $this->load->view('page2');
    }else{
        echo "Access Denied";
    }
  }

  function author(){
    //Allowing session to author only
    if($this->session->userdata('level')==='3'){
      $this->load->view('page3');
    }else{
        echo "Access Denied";
    }
  }

   

}

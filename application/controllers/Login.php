<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

 public function __construct()
 {
  parent::__construct();
  if($this->session->userdata('id'))
  {
   redirect('https://transvisionrek.000webhostapp.com/pages/view/home2');
  }
  $this->load->library('form_validation');
  $this->load->library('encryption');
  $this->load->model('login_model');
 }

 function index()
 {
  $this->load->view('pages/login');
 }

 function validation()
 {
  $this->form_validation->set_rules('user_email', 'Email Address', 'required|trim|valid_email');
  $this->form_validation->set_rules('user_password', 'Password', 'required');
  if($this->form_validation->run())
  {
   $result = $this->login_model->can_login($this->input->post('user_email'), $this->input->post('user_password'));
   if($result == '')
   {
    redirect('https://transvisionrek.000webhostapp.com/pages/view/home2');
   }
   else
   {
    $this->session->set_flashdata('message',$result);
    $this->load->view('pages/login');
   }
  }
  else
  {
   $this->index();
  }
 }

}

?>
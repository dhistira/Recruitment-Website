<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

 public function __construct()
 {
  parent::__construct();
  if($this->session->userdata('id'))
  {
   redirect('private_area');
  }
  $this->load->library('form_validation');
  $this->load->library('encryption');
  $this->load->model('register_model');
 }

 function index()
 {
  $this->load->view('pages/register');
 }

 function validation()
 {
  $this->form_validation->set_rules('user_name', 'Name', 'required|trim');
  $this->form_validation->set_rules('user_email', 'Email Address', 'required|trim|valid_email|is_unique[codeigniter_register.email]');
  $this->form_validation->set_rules('user_password', 'Password', 'required');
  if($this->form_validation->run())
  {
   $verification_key = md5(rand());
   $encrypted_password = $this->encryption->encrypt($this->input->post('user_password'));
   $data = array(
    'name'  => $this->input->post('user_name'),
    'email'  => $this->input->post('user_email'),
    'password' => $encrypted_password,
    'verification_key' => $verification_key
   );
   $id = $this->register_model->insert($data);
   if($id > 0)
   {
    $subject = "Silahkan verifikasi email";
    $message = "
    <p>Hi ".$this->input->post('user_name')."</p>
    <p>Selamat Datang, silahkan verifikasi email dengan klik <a href='".base_url()."Register/verify_email/".$verification_key."'>link</a>. Selanjutnya login pada sistem</p>";

    $config = array(
    'protocol' => 'smtp',
    'smtp_host' => 'ssl://smtp.googlemail.com',
    'smtp_port' => 465,
    'smtp_user' => 'ivanazmi.1999@gmail.com',
    'smtp_pass'  => 'waladunazami12',
    'mailtype'  => 'html', 
    'charset'   => 'utf-8',
    'validation' => TRUE,
    'v' => 'spf1 ip4:12.34.56.78 include:ivanazmi.1999@gmail.com -all',
    'wordwrap'   => TRUE);
    
    $this->load->library('email');
    $this->email->initialize($config);
    $this->email->set_newline("\r\n");
    $this->email->from('ivanazmi.1999@gmail.com');
    $this->email->to($this->input->post('user_email'));
    $this->email->subject($subject);
    $this->email->message($message);
    if($this->email->send());
    {
     $this->session->set_flashdata('message', 'Check in your email for email verification mail');
     redirect('register');
    }
   }
  }
  else
  {
   $this->index();
  }
 }
 function verify_email()
 {
  if($this->uri->segment(3))
  {
   $verification_key = $this->uri->segment(3);
   if($this->register_model->verify_email($verification_key))
   {
    $data['message'] = '<h1 align="center">Email Anda berhasil terverifikasi, silahkan login <a href="'.base_url().'login">disini</a></h1>';
   }
   else
   {
    $data['message'] = '<h1 align="center">Invalid Link</h1>';
   }
   $this->load->view('pages/email_verification', $data);
  }
 }

}

?>
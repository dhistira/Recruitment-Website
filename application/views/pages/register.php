<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="<?php echo $this->config->item('base_url'); ?>asset/icon.png">
 <title>Recruitment Transvision</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>
<style type="text/css">
    .panel-heading {
        font-size: 18px;
    }
    .panel-default{
        height: 350px;
        width: 800px;
        left: 160px;
        top: 50px;
        position: relative;
    }
#btn {
    background-color:#D225B5;
}
</style>
<body>
 <div class="container">
  <br />

        <h3 align="center">Registration</h3>
        <h3 align="center">Recruitment Transvision</h3>
  <br />
  <div class="panel panel-default">
   <div class="panel-heading">Register</div>
   <div class="panel-body">
      <?php 
        if ($this->session->flashdata('message'))
         {
          echo '<div class="alert alert-success">
          '.$this->session->flashdata("message").'</div>';
          }
      ?>
       <form method="post" action="<?php echo base_url(); ?>register/validation">
     <div class="form-group">
      <label>Enter Your Name</label>
      <input type="text" name="user_name" class="form-control" value="<?php echo set_value('user_name'); ?>" />
      <span class="text-danger"><?php echo form_error('user_name'); ?></span>
     </div>
     <div class="form-group">
      <label>Enter Your Valid Email Address</label>
      <input type="text" name="user_email" class="form-control" value="<?php echo set_value('user_email'); ?>" />
      <span class="text-danger"><?php echo form_error('user_email'); ?></span>
     </div>
     <div class="form-group">
      <label>Enter Password</label>
      <input type="password" name="user_password" class="form-control" value="<?php echo set_value('user_password'); ?>" />
      <span class="text-danger"><?php echo form_error('user_password'); ?></span>
     </div>
     <div class="form-group">
      <input type="submit" name="register" value="Register" class="btn btn-info" id="btn"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url(); ?>login">Login</a>
     </div>
    </form>
   </div>
  </div>
 </div>
</body>
</html>
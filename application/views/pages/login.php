<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="<?php echo $this->config->item('base_url'); ?>asset/icon.png">
  <title>Recruitment Transvision</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
</div>
<div class="gambar"><img src="<?php echo $this->config->item('base_url'); ?>asset/tr.png"
 width="300" height="80"></div>
<div class="vl"></div>
<style type="text/css">
  .gambar{
    padding-top: 30px;
    padding-left: 50px;
  }
.body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
  #head {
    background: #D71149;
    font-family: Panton Black;
  }
  #head1 {
    color:white;
  }
.navbar {
  overflow: hidden;
  background-color: #ffffff;
  position: relative;
  left: 550px;
  width: 50%  ;
  bottom: 105px;
}

.navbar a {
  float: left;
  display: block;
  color: #000000;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 14px;
}

.navbar a:hover {
  background-color: #BDAEAE;
  color: #ffffff;
}
.navbar a.karir:hover {
  background-color: #BDAEAE;
  color: #ffffff;
  left:20px;
  padding-left: 16px;
}
.navbar a.karir {
  padding-left: 0px;
  width: 15%;
}
.navbar a.active {
  background-color: #BDAEAE;
  color: white;
  width: 15%;
}
.main {
  padding: 16px;
  margin-bottom: 30px;
}
.icon1 {
  padding-left: 520px;
  position: relative;
  bottom: 55px;   
}
.icon2 {
  padding-left: 20px;
}
.footer {
   position: fixed;
   bottom: 0;
   padding-top: 10px;
   width: 100%;
   background-color: #123B8D;
   color: white;
   padding-left: 20px;
   text-align: left;
   font-size: 10px;
}
.navbar a.karir {
  padding-left: 0px;
  width: 15%;
}
.navbar a.kontak {
  padding-left: 0px;
  width: 15%;
}
.navbar a.login {
  padding-left: 0px;
  width: 15%;
}

.vl {
  border-left: 2px solid grey;
  height: 60px;
  position: absolute;
  left: 35%;
  top: 40px;
}
.button {
  position: relative;
  left: 570px;
  bottom: 300px;
  background-color: #D225B5;
  padding: 12px 28px;
  color: white;
}

.content {
  height: 550px;
  
}

.panel-heading {
    font-size: 18px;
    }
.panel-default{
    height: 280px;
    width: 800px;
    left: 160px;
    top: 50px;
    position: relative;
    }
.container h3 {
    position: relative;
    top: 30px;
}
.container {
    position: relative;
    bottom: 120px;
}

#h {
    position: relative;
    padding-left:20px;
}
#btn {
    background-color:#D225B5;
}
</style>
<body>
  <div class="content">
  <div class="icon1"><img src="<?php echo $this->config->item('base_url'); ?>asset/home.png"
 width="30" height="30"></div>
<div class="navbar">
  <a href="<?php echo base_url(); ?>" class="karir" id="h" >Home </a>
    <div class="icon2"><img src="<?php echo $this->config->item('base_url'); ?>asset/career.png"
 width="30" height="30"></div>
  <a href="<?php echo base_url(); ?>pages/view/career" class="karir">Career</a>
    <div class="icon3"><img src="<?php echo $this->config->item('base_url'); ?>/asset/contact.png"
 width="30" height="30"></div>
  <a href="<?php echo base_url(); ?>pages/view/contact" class="karir">Contact</a>
    <div class="icon4"><img src="<?php echo $this->config->item('base_url'); ?>/asset/login.png"
 width="30" height="30"></div>
  <a href="<?php echo base_url(); ?>pages/view/login" class="active">Login</a>
</div>
    <div class="container">
        <br />
        <h3 align="center">Selamat Datang</h3>
        <br />
        <div class="panel panel-default">
            <div class="panel-body">
                <?php
                if($this->session->flashdata('message'))
                {
                    echo '
                    <div class="alert alert-success">
                        '.$this->session->flashdata("message").'
                    </div>
                    ';
                }
                ?>
                <form method="post" action="<?php echo base_url(); ?>login/validation">
                    <div class="form-group">
                        <label>Enter Email Address</label>
                        <input type="text" name="user_email" class="form-control" value="<?php echo set_value('user_email'); ?>" />
                        <span class="text-danger"><?php echo form_error('user_email'); ?></span>
                    </div>
                    <div class="form-group">
                        <label>Enter Password</label>
                        <input type="password" name="user_password" class="form-control" value="<?php echo set_value('user_password'); ?>" />
                        <span class="text-danger"><?php echo form_error('user_password'); ?></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="login" value="Login" class="btn btn-info" id="btn"/>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url(); ?>register">Register</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </body>
    
<div class="footer">
  <p>Copyright © 2020 www.transvision.co.id.<br> All Rights Reserved.<br>
Privacy Policy | Term Of Use</p>
</html>

</html>

<html>
<head>
<title>Form Rekrutmen Transvision</title>
<link rel="icon" href="<?php echo $this->config->item('base_url'); ?>asset/icon.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'/>

</head>
<body>
<style>
#container {
    position:relative;
    left:80px;
    height:400px;
}
.error {
color:red;
font-size:13px;
margin-bottom:-15px
}
form {
width:700px;
height:1200px;
position:relative;
left:235px;
padding:0 50px 20px;
background:linear-gradient(#ffffff,#ffffff,#ffffff);
border:1px solid #ccc;
box-shadow:0 0 5px;
font-family:'Marcellus',serif;
float:left;
margin-top:10px
}
h1 {
text-align:center;
font-size:28px
}
hr {
border:0;
border-bottom:1.5px solid #ccc;
margin-top:-10px;
margin-bottom:30px
}
label {
font-size:17px
}
input {
width:100%;
padding:10px;
margin:6px 0 20px;
border:none;
box-shadow:0 0 5px
}
input#submit {
margin-top:20px;
font-size:18px;
background:#D225B5;
color:white;
border:1px solid #0F799E;
color:#fff;
font-weight:700;
cursor:pointer;
text-shadow:0 1px 0 #13506D
}
/*input#submit:hover {*/
/*background:linear-gradient(#36caf0 5%,#22abe9 100%)*/
/*}*/
.rek {
    text-align:center;
    padding-top:20px;
}
.file {
    background-color:white;
    height:60px;
    position:relative;
    padding:0px;
}
.h {
    color:red;
    position:relative;
    top:10px;
}
.button1 {
    border-radius:50%;
    width:50px;
    left:10px;
    height:50px;
    background-color:#D225B5;
    color:white;
    position:relative;
    bottom:20px;
    
}
.button2 {
    border-radius:50%;
    width:50px;
    background-color:#D225B5;
    color:white;
    height:50px;
    left:125px;
    position:relative;
    bottom:20px;
    
}
.button3 {
    border-radius:50%;
    width:50px;
    height:50px;
    left:255px;
    background-color:#D225B5;
    color:white;
    position:relative;
    bottom:20px;
    
}.button4 {
    border-radius:50%;
    width:50px;
    height:50px;
    left:380px;
    position:relative;
    bottom:20px;
    
}
.button {
    position:relative;
    bottom:20px;
}
#submit {
    width:200px;
    height:50px;
    position:relative;
    left:200px;
    border-radius:12px;
}
.personal {
    position:relative;
    left:10px;
    bottom:32px;
    width:0px;
    height:0px;
}
.education {
    position:relative;
    left:174px;
    bottom:50px;
    width:0px;
    height:0px;
}
.skills {
    position:relative;
    left:340px;
    bottom:65px;
    width:150px;
    height:0px;
}
.upload {
    position:relative;
    left:530px;
    bottom:80px;
    width:100px;
    height:0px;
} .button button:hover {
    background-color:#D225B5;
    color:white;
}
.dot {
  height: 50px;
  width: 50px;
  position:relative;
  left:10px;
  background-color: #D225B5;
  border-radius: 50%;
  display: inline-block;
}
.dot2 {
  height: 50px;
  width: 50px;
  position:relative;
  left:125px;
  background-color: #D225B5;
  border-radius: 50%;
  display: inline-block;
}
.per {
    width:15px;
    height:15px;
    position:relative;
    bottom:140px;
    left:30px;
    color:white;
}
.konten {
    position:relative;
    bottom:40px;
}

.ed {
    width:15px;
    height:15px;
    color:white;
    position:relative;
    bottom:170px;
    left:200px;
}
.konten {
    position:relative;
    bottom:70px;
}

</style>
<?php
 if (!empty($_SESSION['error_page3'])) {
 echo $_SESSION['error_page3'];
 unset($_SESSION['error_page3']);
 }
 ?>

<div id="container">
    <?php echo form_open('Insert_ctrl3'); ?>
 <form action="<?php echo base_url(); ?>pages/view/insert_view4" method="post">
<h3 class="rek">Recruitment Transvision</h3><br/>
<p>Complete your profile:</p><hr/>
<div class="button">
<a href="<?php echo base_url(); ?>pages/view/insert_view" <span class="dot"></span></a>
<a href="<?php echo base_url(); ?>pages/view/insert_view2" <span class="dot2"></span></a>
<button class="button3"> 3</button> 
<button class="button4"> 4</button> <br/>
</div>
<p class="personal">Personal</p>
<p class="education">Education</p>
<p class="skills">Skills and Work</p>
<p class="upload">Upload File</p>
<p class="per">1</p>
<p class="ed">2</p>

<div class="konten">
<?php if (isset($message)) { ?>
<CENTER><p style="color:green;">Educational profile complete! Please complete the Skill and Work profile</p></CENTER><br>
<?php } ?>
<?php echo form_label('Skill Description :'); ?> <?php echo form_error('deskripsi'); ?><br />
<?php echo form_input(array('id' => 'deskripsi', 'name' => 'deskripsi')); ?> <br />

<?php echo form_label('Certificate :'); ?> <br />
<div class="file">
<?php echo form_input(array('id' => 'sertif1', 'type'=>'file', 'name' => 'sertif1')); ?>
</div>
<br/>

<?php echo form_label('Certificate 2 :'); ?><br />
<div class="file">
<?php echo form_input(array('id' => 'sertif2', 'type'=>'file', 'name' => 'sertif2')); ?>
</div>
<br/>

<?php echo form_label('Certificate 3 :'); ?><br />
<div class="file">
<?php echo form_input(array('id' => 'sertif3', 'type'=>'file', 'name' => 'sertif3')); ?>
</div>
<br/>

<?php echo form_label('Work Experience (year) :'); ?> <?php echo form_error('pengalaman'); ?><br />
<?php echo form_input(array('id' => 'pengalaman', 'name' => 'pengalaman')); ?><br />

<?php echo form_label('Previous Company :'); ?> <?php echo form_error('company'); ?><br />
<?php echo form_input(array('id' => 'company', 'name' => 'company')); ?><br />

<?php echo form_label('Expected Salary :'); ?> <?php echo form_error('salary'); ?><br />
<?php echo form_input(array('id' => 'salary', 'name' => 'salary', 'placeholder' => 'Ex: 5000000')); ?><br />
<div class ="h">
      <a href="<?php echo base_url(); ?>pages/view/home2">Home</a>
</div>
<?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
</form>
<?php echo form_close(); ?><br/>
<div id="fugo">
</div>
</div>
</div>
</body>
</html>

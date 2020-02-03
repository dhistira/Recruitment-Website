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
    bottom:15px;
    width:0px;
    height:0px;
}
.education {
    position:relative;
    left:174px;
    bottom:30px;
    width:0px;
    height:0px;
}
.skills {
    position:relative;
    left:340px;
    bottom:45px;
    width:150px;
    height:0px;
}
.upload {
    position:relative;
    left:530px;
    bottom:60px;
    width:100px;
    height:0px;
} .button button:hover {
    background-color:#D225B5;
    color:white;
}
</style>
<?php
 if (!empty($_SESSION['error'])) {
 echo $_SESSION['error'];
 unset($_SESSION['error']);
 }
 ?>
<div id="container">
<!--<?php echo form_open('Insert_ctrl'); ?>-->
 <form action="<?php echo base_url(); ?>pages/view/insert_view2" method="post">
<h3 class="rek">Recruitment Transvision</h3><br/>
<p>Complete your profile:</p><hr/>
<div class="button">
<button class="button1"> 1</button> 
<button class="button2"> 2</button> 
<button class="butto<html>
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
    bottom:15px;
    width:0px;
    height:0px;
}
.education {
    position:relative;
    left:174px;
    bottom:30px;
    width:0px;
    height:0px;
}
.skills {
    position:relative;
    left:340px;
    bottom:45px;
    width:150px;
    height:0px;
}
.upload {
    position:relative;
    left:530px;
    bottom:60px;
    width:100px;
    height:0px;
} .button button:hover {
    background-color:#D225B5;
    color:white;
}
</style>
<?php
 if (!empty($_SESSION['error'])) {
 echo $_SESSION['error'];
 unset($_SESSION['error']);
 }
 ?>
<div id="container">
<?php echo form_open('Insert_ctrl'); ?>
 <form action="<?php echo base_url(); ?>pages/view/insert_view2" method="post">
<h3 class="rek">Recruitment Transvision</h3><br/>
<p>Complete your profile:</p><hr/>
<div class="button">
<button class="button1"> 1</button> 
<button class="button2"> 2</button> 
<button class="button3"> 3</button> 
<button class="button4"> 4</button> <br/>
</div>
<p class="personal">Personal</p>
<p class="education">Education</p>
<p class="skills">Skills and Work</p>
<p class="upload">Upload File</p>
<?php if (isset($message)) { ?>
<CENTER><p style="color:green;">Profile complete! Please apply the job. Good luck.</p></CENTER><br>
<?php } ?>
<?php echo form_label('Complete Name :'); ?> <?php echo form_error('nama_lengkap'); ?><br />
<?php echo form_input(array('id' => 'nama_lengkap', 'name' => 'nama_lengkap')); ?><br />

<?php echo form_label('Email :'); ?> <?php echo form_error('calon_email'); ?><br />
<?php echo form_input(array('id' => 'calon_email', 'name' => 'calon_email')); ?><br />

<?php echo form_label('Phone Number :'); ?> <?php echo form_error('telfon'); ?><br />
<?php echo form_input(array('id' => 'telfon', 'name' => 'telfon', 'placeholder' => 'Ex: 0811 xxxx xxxx')); ?><br />

<?php echo form_label('Address :'); ?> <?php echo form_error('alamat'); ?><br />
<?php echo form_input(array('id' => 'alamat', 'name' => 'alamat')); ?><br />

<?php echo form_label('Birthday :'); ?> <?php echo form_error('lahir'); ?><br />
<?php echo form_input(array('id' => 'lahir', 'type' => 'date', 'name' => 'lahir')); ?><br />

<?php echo form_label('Gender :'); ?> <?php echo form_error('gender'); ?><br />
<select <?php echo form_input(array('id' => 'gender', 'name' => 'gender')); ?> ><br />
<option>Male</option>
<option>Female</option>
</select>
<br/>
<br/>

<?php echo form_label('Residence ID Number :'); ?> <?php echo form_error('no_KTP'); ?><br />
<?php echo form_input(array('id' => 'no_KTP', 'name' => 'no_KTP')); ?><br />

<?php echo form_label('Status Marriage :'); ?> <?php echo form_error('status_marriage'); ?><br />
<select <?php echo form_input(array('id' => 'status_marriage', 'name' => 'status_marriage')); ?> ><br />
<option>Single</option>
<option>Married</option>
<option>Widow</option>
<option>Widower</option>
</select>
<br/>
<br/>

<?php echo form_label('Religion :'); ?> <?php echo form_error('religion'); ?><br />
<select <?php echo form_input(array('id' => 'religion', 'name' => 'religion')); ?> ><br />
<option>Islam</option>
<option>Christian</option>
<option>Catholic</option>
<option>Buddha</option>
<option>Hindu</option>
<option>Confucius</option>
</select>
<br/>
<br/>

<?php echo form_label('Blood Type :'); ?> <?php echo form_error('blood_type'); ?><br />
<select <?php echo form_input(array('id' => 'blood_type', 'name' => 'blood_type')); ?> ><br />
<option>A</option>
<option>B</option>
<option>AB</option>
<option>O</option>
</select>
<br/>
<br/>

<?php echo form_label('Height (cm) :'); ?> <?php echo form_error('height'); ?><br />
<?php echo form_input(array('id' => 'height', 'name' => 'height', 'placeholder' => 'Ex: 170.6')); ?><br />

<?php echo form_label('Weight (cm) :'); ?> <?php echo form_error('weight'); ?><br />
<?php echo form_input(array('id' => 'weight', 'name' => 'weight', 'placeholder' => 'Ex: 65.5')); ?><br />

<div class ="h">
      <a href="<?php echo base_url(); ?>pages/view/home2">Home</a>
</div>
<?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
<?php echo form_close(); ?><br/>
</form>
<div id="fugo">
</div>
</div>
</body>
</html>n3"> 3</button> 
<button class="button4"> 4</button> <br/>
</div>
<p class="personal">Personal</p>
<p class="education">Education</p>
<p class="skills">Skills and Work</p>
<p class="upload">Upload File</p>
<?php if (isset($message)) { ?>
<CENTER><p style="color:green;">Profile complete! Please apply the job. Good luck.</p></CENTER><br>
<?php } ?>
<?php echo form_label('Complete Name :'); ?> <?php echo form_error('nama_lengkap'); ?><br />
<?php echo form_input(array('id' => 'nama_lengkap', 'name' => 'nama_lengkap')); ?><br />

<?php echo form_label('Email :'); ?> <?php echo form_error('calon_email'); ?><br />
<?php echo form_input(array('id' => 'calon_email', 'name' => 'calon_email')); ?><br />

<?php echo form_label('Phone Number :'); ?> <?php echo form_error('telfon'); ?><br />
<?php echo form_input(array('id' => 'telfon', 'name' => 'telfon', 'placeholder' => 'Ex: 0811 xxxx xxxx')); ?><br />

<?php echo form_label('Address :'); ?> <?php echo form_error('alamat'); ?><br />
<?php echo form_input(array('id' => 'alamat', 'name' => 'alamat')); ?><br />

<?php echo form_label('Birthday :'); ?> <?php echo form_error('lahir'); ?><br />
<?php echo form_input(array('id' => 'lahir', 'type' => 'date', 'name' => 'lahir')); ?><br />

<?php echo form_label('Gender :'); ?> <?php echo form_error('gender'); ?><br />
<select <?php echo form_input(array('id' => 'gender', 'name' => 'gender')); ?> ><br />
<option>Male</option>
<option>Female</option>
</select>
<br/>
<br/>

<?php echo form_label('Residence ID Number :'); ?> <?php echo form_error('no_KTP'); ?><br />
<?php echo form_input(array('id' => 'no_KTP', 'name' => 'no_KTP')); ?><br />

<?php echo form_label('Status Marriage :'); ?> <?php echo form_error('status_marriage'); ?><br />
<select <?php echo form_input(array('id' => 'status_marriage', 'name' => 'status_marriage')); ?> ><br />
<option>Single</option>
<option>Married</option>
<option>Widow</option>
<option>Widower</option>
</select>
<br/>
<br/>

<?php echo form_label('Religion :'); ?> <?php echo form_error('religion'); ?><br />
<select <?php echo form_input(array('id' => 'religion', 'name' => 'religion')); ?> ><br />
<option>Islam</option>
<option>Christian</option>
<option>Catholic</option>
<option>Buddha</option>
<option>Hindu</option>
<option>Confucius</option>
</select>
<br/>
<br/>

<?php echo form_label('Blood Type :'); ?> <?php echo form_error('blood_type'); ?><br />
<select <?php echo form_input(array('id' => 'blood_type', 'name' => 'blood_type')); ?> ><br />
<option>A</option>
<option>B</option>
<option>AB</option>
<option>O</option>
</select>
<br/>
<br/>

<?php echo form_label('Height (cm) :'); ?> <?php echo form_error('height'); ?><br />
<?php echo form_input(array('id' => 'height', 'name' => 'height', 'placeholder' => 'Ex: 170.6')); ?><br />

<?php echo form_label('Weight (cm) :'); ?> <?php echo form_error('weight'); ?><br />
<?php echo form_input(array('id' => 'weight', 'name' => 'weight', 'placeholder' => 'Ex: 65.5')); ?><br />

<div class ="h">
      <a href="<?php echo base_url(); ?>pages/view/home2">Home</a>
</div>
<?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
<?php echo form_close(); ?><br/>
</form>
<div id="fugo">
</div>
</div>
</body>
</html>
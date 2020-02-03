<?php

$connect = new PDO("mysql:host=localhost;dbname=id12267778_root", "id12267778_transvision", "transvision");
$message = '';
if(isset($_POST["calon_email"]))
{
 sleep(5);
 $query = "
 INSERT INTO students 
 (nama_lengkap,calon_email,telfon,alamat,lahir,gender,no_KTP,status_marriage,religion,blood_type,height,weight,jenjang,nama_sekolah,kota_sekolah,jurusan,IPK,status,deskripsi,pengalaman,company,salary,cv,resume) VALUES 
 (:nama_lengkap, :calon_email, :telfon, :alamat, :lahir, :gender, :no_KTP, :status_marriage, :religion, :blood_type, :height, :weight, :jenjang, :nama_sekolah, :kota_sekolah, :jurusan, :IPK, :status,  :deskripsi, :pengalaman, :company, :salary, :cv, :resume)";
 $user_data = array(
  ':nama_lengkap'  => $_POST["nama_lengkap"],
  ':calon_email'  => $_POST["calon_email"],
  ':telfon'   => $_POST["telfon"],
  ':alamat'   => $_POST["alamat"],
  ':lahir'   =>  $_POST["lahir"],
  ':gender'   => $_POST["gender"],
  ':religion'  => $_POST["religion"],
  ':blood_type'  => $_POST["blood_type"],
  ':height'  => $_POST["height"],
  ':weight'   => $_POST["weight"],
  ':jenjang'   => $_POST["jenjang"],
  ':nama_sekolah'   =>  $_POST["nama_sekolah"],
  ':kota_sekolah'   => $_POST["kota_sekolah"],
  ':jurusan'  => $_POST["jurusan"],
  ':IPK'  => $_POST["IPK"],
  ':status'  => $_POST["status"],
  ':deskripsi'   => $_POST["deskripsi"],
  ':pengalaman'  => $_POST["pengalaman"],
  ':company'  => $_POST["company"],
  ':salary'  => $_POST["salary"],
  ':cv'   => $_POST["cv"],
  ':resume'   => $_POST["resume"]
 );
 $statement = $connect->prepare($query);
 if($statement->execute($user_data))
 {
  $message = '
  <div class="alert alert-success">
  Profile Completed Successfully
  </div>
  ';
 }
 else
 {
  $message = '
  <div class="alert alert-success">
  There is an error in Completely Profile
  </div>
  ';
 }
}
?>

<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Multi Step Registration Form Using JQuery Bootstrap in PHP</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  <style>
  .box
  {
   width:800px;
   margin:0 auto;
  }
  .active_tab1
  {
   background-color:#fff;
   color:#333;
   font-weight: 600;
  }
  .inactive_tab1
  {
   background-color: #f5f5f5;
   color: #333;
   cursor: not-allowed;
  }
  .has-error
  {
   border-color:#cc0000;
   background-color:#ffff99;
  }
  </style>
 </head>
 <body>
 <br />
  <div class="container box">
   <br />
 <h3 class="rek">Recruitment Transvision</h3><br/>
<p>Complete your profile:</p><hr/>
   <?php echo $message; ?>
   <form method="post" id="register_form">
    <ul class="nav nav-tabs">
     <li class="nav-item">
      <a class="nav-link active_tab1" style="border:1px solid #ccc" id="list_login_details">Personal</a>
     </li>
     <li class="nav-item">
      <a class="nav-link inactive_tab1" id="list_personal_details" style="border:1px solid #ccc">Education</a>
     </li>
     <li class="nav-item">
      <a class="nav-link inactive_tab1" id="list_skill_details" style="border:1px solid #ccc">Skill and Work</a>
     </li>
     <li class="nav-item">
      <a class="nav-link inactive_tab1" id="list_contact_details" style="border:1px solid #ccc">File Upload</a>
     </li>
    </ul>
    <div class="tab-content" style="margin-top:16px;">
     <div class="tab-pane active" id="login_details">
      <div class="panel panel-default">
       <div class="panel-heading">Personal</div>
       <div class="panel-body">
           <div class="form-group">
         <label>Email:</label>
         <input type="text" name="calon_email" id="calon_email" class="form-control" />
         <span id="error_calon_email" class="text-danger"></span>
        </div>
        <div class="form-group">
         <label>Complete Name:</label>
         <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" />
         <span id="error_nama_lengkap" class="text-danger"></span>
        </div>
        <div class="form-group">
         <label>Phone Number:</label>
         <input type="text" name="telfon" id="telfon" class="form-control" />
         <span id="error_telfon" class="text-danger"></span>
        </div>
        <div class="form-group">
         <label>Address:</label>
         <input type="text" name="alamat" id="alamat" class="form-control" />
         <span id="error_alamat" class="text-danger"></span>
        </div>
        <div class="form-group">
         <label>Birthday:</label>
         <input type="date" name="lahir" id="lahir" class="form-control" />
         <span id="error_lahir" class="text-danger"></span>
        </div>
        <div class="form-group">
         <label>Gender</label>
         <label class="radio-inline">
          <input type="radio" name="gender" value="male" checked> Male
         </label>
         <label class="radio-inline">
          <input type="radio" name="gender" value="female"> Female
         </label>
        </div>
        <div class="form-group">
         <label>Residence ID Number:</label>
         <input type="text" name="no_KTP" id="no_KTP" class="form-control" />
         <span id="error_no_KTP" class="text-danger"></span>
        </div>
           <div class="form-group">
         <label>Status Marriage:</label>
         <label class="radio-inline">
          <input type="radio" name="status_marriage" value="male" checked> Single
         </label>
         <label class="radio-inline">
          <input type="radio" name="status_marriage" value="married"> Married
         </label>
         <label class="radio-inline">
          <input type="radio" name="status_marriage" value="widow"> Widow
         </label>
         <label class="radio-inline">
          <input type="radio" name="status_marriage" value="widower"> Widower
         </label>
        </div>
           <div class="form-group">
         <label>Religion:</label>
         <label class="radio-inline">
          <input type="radio" name="religion" value="islam" checked> Islam
         </label>
         <label class="radio-inline">
          <input type="radio" name="religion" value="christian"> Christian
         </label>
         <label class="radio-inline">
          <input type="radio" name="religion" value="catholic"> Catholic
         </label>
         <label class="radio-inline">
          <input type="radio" name="religion" value="buddha"> Buddha
         </label>
         <label class="radio-inline">
          <input type="radio" name="religion" value="hindu"> Hindu
         </label>
         <label class="radio-inline">
          <input type="radio" name="religion" value="confucius"> Confucius
         </label>
        </div>
           <div class="form-group">
         <label>Blood Type:</label>
         <label class="radio-inline">
          <input type="radio" name="blood_type" value="A" checked> A </label>
         <label class="radio-inline">
          <input type="radio" name="blood_type" value="B"> B </label>
         <label class="radio-inline">
          <input type="radio" name="blood_type" value="AB"> AB </label>
         <label class="radio-inline">
          <input type="radio" name="blood_type" value="O"> O </label>
        </div>
        <div class="form-group">
         <label>Height:</label>
         <input type="text" name="height" id="height" class="form-control" />
         <span id="error_height" class="text-danger"></span>
        </div>
        <div class="form-group">
         <label>Weight:</label>
         <input type="text" name="weight" id="weight" class="form-control" />
         <span id="error_weight" class="text-danger"></span>
        </div>
        <br />
        <div align="center">
            <button type="button" name="btn_login_details" id="btn_login_details" class="btn btn-info btn-lg">Next</button>
        </div>
        <br />
       </div>
      </div>
     </div>
     <div class="tab-pane fade" id="personal_details">
      <div class="panel panel-default">
       <div class="panel-heading">Education</div>
       <div class="panel-body">
         <div class="form-group">
         <label>Last Level Education:</label>
         <label class="radio-inline">
          <input type="radio" name="jenjang" value="SMA" checked> SMA
         </label>
         <label class="radio-inline">
          <input type="radio" name="jenjang" value="Diploma"> Diploma
         </label>
         <label class="radio-inline">
          <input type="radio" name="jenjang" value="S1"> S1
         </label>
         <label class="radio-inline">
          <input type="radio" name="jenjang" value="S2"> S2
         </label>
         <label class="radio-inline">
          <input type="radio" name="jenjang" value="S3"> S3
         </label>
        </div>
        <div class="form-group">
         <label>School Name:</label>
         <input type="text" name="nama_sekolah" id="nama_sekolah" class="form-control" />
         <span id="error_nama_sekolah" class="text-danger"></span>
        </div>
        <div class="form-group">
         <label>City:</label>
         <input type="text" name="kota_sekolah" id="kota_sekolah" class="form-control" />
         <span id="error_kota_sekolah" class="text-danger"></span>
        </div>
        <div class="form-group">
         <label>Major:</label>
         <input type="text" name="jurusan" id="jurusan" class="form-control" />
         <span id="error_jurusan" class="text-danger"></span>
        </div>
        <div class="form-group">
         <label>GPA:</label>
         <input type="text" name="IPK" id="IPK" class="form-control" placeholder="3.2" />
         <span id="error_IPK" class="text-danger"></span>
        </div>
                  <div class="form-group">
         <label>Status:</label>
         <label class="radio-inline">
          <input type="radio" name="status" value="Still Active" checked> Still Active
         </label>
         <label class="radio-inline">
          <input type="radio" name="status" value="Graduate"> Graduate
         </label>
         <label class="radio-inline">
          <input type="radio" name="status" value="Not Graduate"> Not Graduate
         </label>
        </div>
        <br />
        <div align="center">
         <button type="button" name="previous_btn_personal_details" id="previous_btn_personal_details" class="btn btn-default btn-lg">Previous</button>
         <button type="button" name="btn_personal_details" id="btn_personal_details" class="btn btn-info btn-lg">Next</button>
        </div>
        <br />
       </div>
      </div>
     </div>
     <div class="tab-pane fade" id="skill_details">
      <div class="panel panel-default">
       <div class="panel-heading">Skill and Work</div>
       <div class="panel-body">
      <div class="form-group">
         <label>Skill Description:</label>
         <input type="text" name="deskripsi" id="deskripsi" class="form-control" />
         <span id="error_deskripsi" class="text-danger"></span>
        </div>
        <div class="form-group">
         <label>Work Experience:</label>
         <input type="text" name="pengalaman" id="pengalaman" class="form-control" />
         <span id="error_pengalaman" class="text-danger"></span>
        </div>
        <div class="form-group">
         <label>Previous Company:</label>
         <input type="text" name="company" id="company" class="form-control" />
         <span id="error_company" class="text-danger"></span>
        </div>
        <div class="form-group">
         <label>Salary:</label>
         <input type="text" name="salary" id="salary" class="form-control" />
         <span id="error_salary" class="text-danger"></span>
           </div>
        <br />
            <div align="center">
         <button type="button" name="previous_btn_skill_details" id="previous_btn_skill_details" class="btn btn-default btn-lg">Previous</button>
         <button type="button" name="btn_skill_details" id="btn_skill_details" class="btn btn-info btn-lg">Next</button>
          </div>
        <br />
       </div>
      </div>
     </div>
     <div class="tab-pane fade" id="contact_details">
      <div class="panel panel-default">
       <div class="panel-heading">File Upload</div>
       <div class="panel-body">
        <div class="form-group">
         <label>File CV:</label>
         <input type="file" name="cv" id="cv" class="form-control"></input>
         <span id="error_cv" class="text-danger"></span>
        </div>
            <div class="form-group">
         <label>File Resume:</label>
         <input type="file" name="resume" id="resume" class="form-control" />
         <span id="error_resume" class="text-danger"></span>
        </div>
        <div align="center">
         <button type="button" name="previous_btn_contact_details" id="previous_btn_contact_details" class="btn btn-default btn-lg">Previous</button>
         <button type="button" name="btn_contact_details" id="btn_contact_details" class="btn btn-success btn-lg">Submit</button>
        </div>
        <br />
       </div>
      </div>
     </div>
    </div>
   </form>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 $('#btn_login_details').click(function(){
  var error_calon_email = '';
    var error_nama_lengkap = '';
      var error_telfon = '';
        var error_address = '';
          var error_lahir = '';
              var error_no_KTP = '';
                var error_height = '';
                var error_weight = '';
  var mobile_validation = /^\d{12}$/;
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  
  if($.trim($('#calon_email').val()).length == 0)
  {
   error_calon_email = 'Email is required';
   $('#error_calon_email').text(error_calon_email);
   $('#calon_email').addClass('has-error');
  }
  else
  {
   if (!filter.test($('#calon_email').val()))
   {
    error_calon_email = 'Invalid Email';
    $('#error_calon_email').text(error_calon_email);
    $('#calon_email').addClass('has-error');
   }
   else
   {
    error_calon_email = '';
    $('#error_calon_email').text(error_calon_email);
    $('#calon_email').removeClass('has-error');
   }
  }
  
  if($.trim($('#nama_lengkap').val()).length == 0)
  {
   error_nama_lengkap = 'Complete Name is required';
   $('#error_nama_lengkap').text(error_nama_lengkap);
   $('#nama_lengkap').addClass('has-error');
  }
  else
   {
    error_nama_lengkap = '';
    $('#error_nama_lengkap').text(error_nama_lengkap);
    $('#nama_lengkap').removeClass('has-error');
   }
  
  
  if($.trim($('#alamat').val()).length == 0)
  {
   error_alamat = 'Address is required';
   $('#error_alamat').text(error_alamat);
   $('#alamat').addClass('has-error');
  }
   else
   {
    error_alamat = '';
    $('#error_alamat').text(error_alamat);
    $('#alamat').removeClass('has-error');
   }
  
  
  if($.trim($('#telfon').val()).length == 0)
  {
   error_telfon = 'Mobile Number is required';
   $('#error_telfon').text(error_telfon);
   $('#telfon').addClass('has-error');
  }
  else
  {
   if (!mobile_validation.test($('#telfon').val()))
   {
    error_telfon = 'Invalid Mobile Number';
    $('#error_telfon').text(error_telfon);
    $('#telfon').addClass('has-error');
   }
   else
   {
    error_telfon = '';
    $('#error_telfon').text(error_telfon);
    $('#telfon').removeClass('has-error');
   }
  }
  
  if($.trim($('#lahir').val()).length == 0)
  {
   error_lahir = 'Birthday is required';
   $('#error_lahir').text(error_lahir);
   $('#lahir').addClass('has-error');
  }
   else
   {
    error_lahir = '';
    $('#error_lahir').text(error_lahir);
    $('#lahir').removeClass('has-error');
   }
  

 
  if($.trim($('#no_KTP').val()).length == 0)
  {
   error_no_KTP = 'Residence ID Number is required';
   $('#error_no_KTP').text(error_no_KTP);
   $('#no_KTP').addClass('has-error');
  }
   else
   {
    error_no_KTP = '';
    $('#error_no_KTP').text(error_no_KTP);
    $('#no_KTP').removeClass('has-error');
   }
  
  
  if($.trim($('#height').val()).length == 0)
  {
   error_height = 'Height is required';
   $('#error_height').text(error_height);
   $('#height').addClass('has-error');
  }
   else
   {
    error_height = '';
    $('#error_height').text(error_height);
    $('#height').removeClass('has-error');
   }
  
  
  if($.trim($('#weight').val()).length == 0)
  {
   error_weight = 'Weight is required';
   $('#error_weight').text(error_weight);
   $('#weight').addClass('has-error');
  }
   else
   {
    error_weight = '';
    $('#error_weight').text(error_weight);
    $('#weight').removeClass('has-error');
   }

  if(error_calon_email != '' || error_nama_lengkap != '' || error_telfon != '' || error_alamat != '' || error_lahir != '' || error_no_KTP != '' || error_height != '' || error_weight != '')
  {
   return false;
  }
  else{
   $('#list_login_details').removeClass('active active_tab1');
   $('#list_login_details').removeAttr('href data-toggle');
   $('#login_details').removeClass('active');
   $('#list_login_details').addClass('inactive_tab1');
   $('#list_personal_details').removeClass('inactive_tab1');
   $('#list_personal_details').addClass('active_tab1 active');
   $('#list_personal_details').attr('href', '#personal_details');
   $('#list_personal_details').attr('data-toggle', 'tab');
   $('#personal_details').addClass('active in');
  }
 });
  $('#previous_btn_personal_details').click(function(){
  $('#list_personal_details').removeClass('active active_tab1');
  $('#list_personal_details').removeAttr('href data-toggle');
  $('#personal_details').removeClass('active in');
  $('#list_personal_details').addClass('inactive_tab1');
  $('#list_login_details').removeClass('inactive_tab1');
  $('#list_login_details').addClass('active_tab1 active');
  $('#list_login_details').attr('href', '#login_details');
  $('#list_login_details').attr('data-toggle', 'tab');
  $('#login_details').addClass('active in');
 });

 $('#btn_personal_details').click(function(){
  var error_nama_sekolah = '';
  var error_kota_sekolah = '';
  var error_jurusan = '';  
  var error_IPK = '';
  
 
  if($.trim($('#nama_sekolah').val()).length == 0)
  {
   error_nama_sekolah = 'School Name is required';
   $('#error_nama_sekolah').text(error_nama_sekolah);
   $('#nama_sekolah').addClass('has-error');
  }
  else
  {
   error_nama_sekolah = '';
   $('#error_nama_sekolah').text(error_nama_sekolah);
   $('#nama_sekolah').removeClass('has-error');
  }

 if($.trim($('#kota_sekolah').val()).length == 0)
  {
   error_kota_sekolah = 'City of School is required';
   $('#error_kota_sekolah').text(error_kota_sekolah);
   $('#kota_sekolah').addClass('has-error');
  }
  else
  {
   error_kota_sekolah = '';
   $('#error_kota_sekolah').text(error_kota_sekolah);
   $('#kota_sekolah').removeClass('has-error');
  }

 if($.trim($('#jurusan').val()).length == 0)
  {
   error_jurusan = 'Major is required';
   $('#error_jurusan').text(error_jurusan);
   $('#jurusan').addClass('has-error');
  }
  else
  {
   error_jurusan = '';
   $('#error_jurusan').text(error_jurusan);
   $('#jurusan').removeClass('has-error');
  }
  
     if($.trim($('#IPK').val()).length == 0)
  {
   error_IPK = 'GPA is required';
   $('#error_IPK').text(error_IPK);
   $('#IPK').addClass('has-error');
  }
  else
  {
   error_IPK = '';
   $('#error_IPK').text(error_IPK);
   $('#IPK').removeClass('has-error');
  }

  if( error_nama_sekolah != '' || error_kota_sekolah != '' || error_jurusan != '' || error_IPK != '')
  {
   return false;
  }
  else
  {
   $('#list_personal_details').removeClass('active active_tab1');
   $('#list_personal_details').removeAttr('href data-toggle');
   $('#personal_details').removeClass('active');
   $('#list_personal_details').addClass('inactive_tab1');
   $('#list_skill_details').removeClass('inactive_tab1');
   $('#list_skill_details').addClass('active_tab1 active');
   $('#list_skill_details').attr('href', '#skill_details');
   $('#list_skill_details').attr('data-toggle', 'tab');
   $('#skill_details').addClass('active in');
  }
 });
 
 $('#previous_btn_skill_details').click(function(){
  $('#list_skill_details').removeClass('active active_tab1');
  $('#list_skill_details').removeAttr('href data-toggle');
  $('#skill_details').removeClass('active in');
  $('#list_skill_details').addClass('inactive_tab1');
  $('#list_personal_details').removeClass('inactive_tab1');
  $('#list_personal_details').addClass('active_tab1 active');
  $('#list_personal_details').attr('href', '#personal_details');
  $('#list_personal_details').attr('data-toggle', 'tab');
  $('#personal_details').addClass('active in');
 });
 
 
 $('#btn_skill_details').click(function(){
  var error_deskripsi = '';
  var error_pengalaman = '';
  var error_company = '';
  var error_salary = '';
  
  if($.trim($('#deskripsi').val()).length == 0)
  {
   error_deskripsi = 'Skill Description is required';
   $('#error_deskripsi').text(error_deskripsi);
   $('#deskripsi').addClass('has-error');
  }
  else
  {
   error_deskripsi = '';
   $('#error_deskripsi').text(error_deskripsi);
   $('#deskripsi').removeClass('has-error');
  }
  
  if($.trim($('#pengalaman').val()).length == 0)
  {
   error_pengalaman = 'Work Experience is required';
   $('#error_pengalaman').text(error_pengalaman);
   $('#pengalaman').addClass('has-error');
  }
  else
  {
   error_pengalaman = '';
   $('#error_pengalaman').text(error_pengalaman);
   $('#pengalaman').removeClass('has-error');
  }

 if($.trim($('#company').val()).length == 0)
  {
   error_company = 'Previous Company is required';
   $('#error_company').text(error_company);
   $('#company').addClass('has-error');
  }
  else
  {
   error_company = '';
   $('#error_company').text(error_company);
   $('#company').removeClass('has-error');
  }

 if($.trim($('#salary').val()).length == 0)
  {
   error_salary = 'Salary is required';
   $('#error_salary').text(error_salary);
   $('#salary').addClass('has-error');
  }
  else
  {
   error_salary = '';
   $('#error_salary').text(error_salary);
   $('#salary').removeClass('has-error');
  }

  if(error_deskripsi != '' || error_pengalaman != '' || error_company != '' || error_salary != '' )
  {
   return false;
  }
  else
  {
   $('#list_skill_details').removeClass('active active_tab1');
   $('#list_skill_details').removeAttr('href data-toggle');
   $('#skill_details').removeClass('active');
   $('#list_skill_details').addClass('inactive_tab1');
   $('#list_contact_details').removeClass('inactive_tab1');
   $('#list_contact_details').addClass('active_tab1 active');
   $('#list_contact_details').attr('href', '#contact_details');
   $('#list_contact_details').attr('data-toggle', 'tab');
   $('#contact_details').addClass('active in');
  }
 });
 
 $('#previous_btn_contact_details').click(function(){
  $('#list_contact_details').removeClass('active active_tab1');
  $('#list_contact_details').removeAttr('href data-toggle');
  $('#contact_details').removeClass('active in');
  $('#list_contact_details').addClass('inactive_tab1');
  $('#list_skill_details').removeClass('inactive_tab1');
  $('#list_skill_details').addClass('active_tab1 active');
  $('#list_skill_details').attr('href', '#skill_details');
  $('#list_skill_details').attr('data-toggle', 'tab');
  $('#skill_details').addClass('active in');
 });
 
 
 $('#btn_contact_details').click(function(){
  var error_cv = '';
  var error_resume = '';
 
  if($.trim($('#cv').val()).length == 0)
  {
   error_cv = 'CV is required';
   $('#error_cv').text(error_cv);
   $('#cv').addClass('has-error');
  }
  else
  {
   error_cv = '';
   $('#error_cv').text(error_cv);
   $('#cv').removeClass('has-error');
  }
 
  if($.trim($('#resume').val()).length == 0)
  {
   error_resume = 'Resume is required';
   $('#error_resume').text(error_resume);
   $('#resume').addClass('has-error');
  }
  else
  {
   error_resume = '';
   $('#error_resume').text(error_resume);
   $('#resume').removeClass('has-error');
  }

  if(error_cv != '' || error_resume != '')
  {
   return false;
  }
  else
  {
   $('#btn_contact_details').attr("disabled", "disabled");
   $(document).css('cursor', 'prgress');
   $("#register_form").submit();
  }
  
 });
 
});
</script>
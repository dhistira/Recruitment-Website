<!DOCTYPE HTML>
<html>
 <head>
 <title>PHP Multi Page Form</title>
 <link rel="stylesheet" href="style.css" />
 </head>
 <body>
 <div class="container">
 <div class="main">
 <h2>PHP Multi Page Form</h2>
 <?php
  if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
   
 foreach ($_POST as $key => $value) {
 $_SESSION['post'][$key] = $value;
 } 
 extract($_SESSION['post']); // Function to extract array.
 $connection = mysqli_connect("localhost", "id12267778_transvision", "transvision","id12267778_root");
 $query = "insert into students (nama_lengkap,calon_email,telfon,alamat,lahir,gender,no_KTP,status_marriage,religion,blood_type,height,weight,jenjang,nama_sekolah,kota_sekolah,jurusan,IPK,status,deskripsi,sertif1,sertif2,sertif3,pengalaman,company,salary,cv,resume) values('$nama_lengkap','$calon_email','$telfon','$alamat','$lahir','$gender','$no_KTP','$status_marriage','$religion','$blood_type','$height','$weight','$jenjang','$nama_sekolah','$kota_sekolah','$jurusan','$IPK','$status','$deskripsi','$sertif1','$sertif2','$sertif3','$pengalaman','$company','$salary','$cv','$resume')";
 $data = mysqli_query($connection,$query);
 ?>
 </div>
 </div>
 </body>
</html>

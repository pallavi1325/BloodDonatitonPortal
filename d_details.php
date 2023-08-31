<?php

session_start();
if(isset($_POST['srno'])){
//Update
$srno=$_POST['srno'];
  $conn = mysqli_connect('localhost', 'root', "", 'reg');
  if ($conn === false) {
    die("ERROR: Could not connect. "
      . mysqli_connect_error());
  }

  $fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$phone = $_POST['phone'];

$address = $_POST['address'];
$tentative = $_POST['tentative'];
$state = $_POST['state'];
$city = $_POST['city'];

$bname = $_POST['bname'];
$blood = $_POST['blood'];
$aadhar = $_POST['aadhar'];
$status = $_POST['status'];

$qyy = "UPDATE form SET fname = '$fname', lname = '$lname', gender = '$gender', dob = '$dob', phone = '$phone',
address = '$address', tdate = '$tentative', state = '$state', city = '$city',
bloodbank = '$bname', bloodgroup = '$blood', aadhar = '$aadhar', status = '$status' WHERE srno = '$srno'";

if (mysqli_query($conn, $qyy)) {
  echo ('
  <style>
 .alert {
  width:50%;
  height:15%;
  position:center;
   padding: 20px;
   background-color: #f44336;
   color: white;
   opacity: 1;
   transition: opacity 0.6s;
   margin-left: 25%;
   margin-top: 5 %;
   border-radius: 10px;
 }
 
 .alert.success {background-color: #04AA6D;}
 
 .closebtn {
  
   margin-left: 15px;
   color: white;
   font-weight: bold;
   float: right;
   font-size: 22px;
   line-height: 20px;
   cursor: pointer;
   transition: 0.2;
 }
 
 .closebtn:hover {
   color: black;
 }
 </style>

  <h2  id="mydiv" class="alert success">
 <span class="closebtn">&times;</span>  
 <strong >Updated!!! </strong> <br>
 </h2>
 <script>
 var close = document.getElementsByClassName("closebtn");
 var i;
 
 for (i = 0; i < close.length; i++) {
   close[i].onclick = function(){
     var div = this.parentElement;
     div.style.opacity = "0";
     setTimeout(function(){ div.style.display = "none"; }, 200);
   }
 }
 function Suc(){
   var close = document.getElementById("mydiv");
 close.style.display="block";
 setTimeout(function(){
   close.style.display="none";
 },1000) 
 }
 Suc();
 </script>
 </body>
 </html>
 ');
echo ("<script LANGUAGE='JavaScript'>
  setTimeout(function(){
    window.location.href='database2.php';},300);
  </script>");

} else {
  echo "ERROR: Hush! Sorry $qyy. "
    . mysqli_error($conn);
}

}else{
  
//CREATE
if(!isset($_POST['srno'])){
  $conn = mysqli_connect('localhost', 'root', "", 'reg');
  if ($conn === false) {
    die("ERROR: Could not connect. "
      . mysqli_connect_error());
  }

  $fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$phone = $_POST['phone'];

$address = $_POST['address'];
$tentative = $_POST['tentative'];
$state = $_POST['state'];
$city = $_POST['city'];

$bname = $_POST['bname'];
$blood = $_POST['blood'];
$aadhar = $_POST['aadhar'];
$status = 0;


$quu = "select * from form where  aadhar = '$aadhar' && phone = '$phone' ";

$resultt = mysqli_query($conn, $quu);

$numm = mysqli_num_rows($resultt);

if ($numm == 1) {
echo '
<style>
 .alert {
  width:50%;
  height:15%;
  position:center;
   padding: 20px;
   background-color: red ;
   color: white;
   opacity: 1;
   transition: opacity 0.6s;
   margin-left: 25%;
   margin-top: 5 %;
   border-radius: 10px;
 }
 
 .alert.success {background-color: #04AA6D;}
 
 .closebtn {
  
   margin-left: 15px;
   color: white;
   font-weight: bold;
   float: right;
   font-size: 22px;
   line-height: 20px;
   cursor: pointer;
   transition: 0.2;
 }
 
 .closebtn:hover {
   color: black;
 }
 </style>

  <h2  id="mydiv" class="alert success">
 <span class="closebtn">&times;</span>  
 <strong >This  Aadhar number and Phone number alredy in use!!!</strong> <br>
 </h2>
 <script>
 var close = document.getElementsByClassName("closebtn");
 var i;
 
 for (i = 0; i < close.length; i++) {
   close[i].onclick = function(){
     var div = this.parentElement;
     div.style.opacity = "0";
     setTimeout(function(){ div.style.display = "none"; }, 100);
   }
 }
 function Suc(){
   var close = document.getElementById("mydiv");
 close.style.display="block";
 setTimeout(function(){
   close.style.display="none";
 },3000) 
 }
 Suc();
 </script>';
 echo ("<script LANGUAGE='JavaScript'>
 setTimeout(function(){
   window.location.href='d_details.html';},3000);
 </script>");
} else {

  $qyy = "INSERT INTO `form` (`fname`,`lname`,`gender`,`dob`,`phone`,`address`,`tdate`,`state`,`city`, bloodbank,`bloodgroup`,`aadhar`,`status`) 
          VALUES ('$fname','$lname','$gender', '$dob', '$phone','$address','$tentative', '$state', '$city','$bname', '$blood', '$aadhar','$status')";

if (mysqli_query($conn, $qyy)) {
  echo '
 <!DOCTYPE html>
 <html lang="en">
 <style>
 .alert {
   padding: 20px;
   background-color: #f44336;
   color: white;
   opacity: 1;
   transition: opacity 0.6s;
   margin-bottom: 15px;
   margin-top: 2px;
   border-radius: 10px;
 }
 
 .alert.success {background-color: #04AA6D;}
 
 .closebtn {
   margin-left: 15px;
   color: white;
   font-weight: bold;
   float: right;
   font-size: 22px;
   line-height: 20px;
   cursor: pointer;
   transition: 0.2;
 }
 
 .closebtn:hover {
   color: black;
 }

 </style>
 <body>
 <h2  id="mydiv" class="alert success">
 <span class="closebtn">&times;</span>  
 <strong >Successfully Registered!! </strong> <b> Dear,'. $fname.''. $lname .' </b><br>
 <b>Thank You for registration!!!</b><br>
 <b>Youre appointment is schedule 10:00 am - 05:00 pm on this date <br>'.$tentative .' </b>
 </h2>
 <script>
 var close = document.getElementsByClassName("closebtn");
 var i;
 
 for (i = 0; i < close.length; i++) {
   close[i].onclick = function(){
     var div = this.parentElement;
     div.style.opacity = "0";
     setTimeout(function(){ div.style.display = "none"; }, 200);
   }
 }
 function Suc(){
   var close = document.getElementById("mydiv");
 close.style.display="block";
 setTimeout(function(){
   close.style.display="none";
 },9000) 
 }
 Suc();
 </script>
 </body>
 </html>
 ';
echo ("<script LANGUAGE='JavaScript'>
  setTimeout(function(){
    window.location.href='home.php';},9000);
  </script>");
  
} else {
  echo "ERROR: Hush! Sorry $qyy. "
    . mysqli_error($conn);
}
}
}


}

// Close connection
mysqli_close($conn);

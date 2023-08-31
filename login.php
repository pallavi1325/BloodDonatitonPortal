


<?php

session_start();

$con = mysqli_connect('localhost','root');
if($con)
{
  // echo "connection Sucessful";
}
else {
  echo "connection Error!!";
}

mysqli_select_db($con,'reg');

$email = $_POST['email'];
$password = $_POST['password'];

$qu = "select * from signup where email = '$email' && password = '$password' ";

$result = mysqli_query($con,$qu);

$num = mysqli_num_rows($result);

$qu2 = "select name from signup where email='$email' ";
$res=$con ->query($qu2);
while ($row =$res-> fetch_assoc()){
  $name=$row['name'];
}
if($num==1){
  $_SESSION ['name']=$name;
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
  <div  id="mydiv" class="alert success">
  <span class="closebtn">&times;</span>  
  <strong >Successfully Login!! </strong> <b>  WELCOME '.$name.'</b>
  </div>
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
  },3000) 
  }
  Suc();
  </script>
  </body>
  </html>
  ';
 echo ("<script LANGUAGE='JavaScript'>
   setTimeout(function(){
     window.location.href='home.php';},4000);
   </script>");


} else {
  echo ('<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
</head>
<body>
<div  id="mydiv" class="alert success">
  <span class="closebtn">&times;</span>  
  <strong>Login Failed!</strong> Please Enter Valid Email And Password.
  </div>


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
  },2000) 
  }
  Suc();
  </script>
  
</body>
</html>

');
echo ("<script LANGUAGE='JavaScript'>
   setTimeout(function(){
     window.location.href='login.html';},2000);
   </script>");
}



?>


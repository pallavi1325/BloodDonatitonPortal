<?php

session_start();
$con = mysqli_connect('localhost','root','','reg');
if($con)
{
//   echo "connection Sucessful";
}
else {
  echo "connection Error!!";
}

mysqli_select_db($con,'reg');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];


$qu = "select * from signup where email = '$email' && phone = '$phone' ";

$result = mysqli_query($con,$qu);

$num = mysqli_num_rows($result);
if($num>=1){
  echo "This email and Phone alredy in use!!!";
}else {
  $qy = "INSERT INTO `signup` (`name`,`email`,`phone`,`password`) VALUES ('$name','$email', '$phone', '$password')";
  if(mysqli_query($con,$qy)){
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
    <strong >Successfully Registration!! </strong> <b>  WELCOME '.$name.'</b>
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
       window.location.href='login.html';},4000);
     </script>");
  
  
  }
  
}
$con->close();

?>


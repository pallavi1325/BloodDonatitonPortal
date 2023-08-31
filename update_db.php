<?php

session_start();
//UPDATE
if (isset($_GET['status'])) {
       $srno = $_GET['srno'];
      $status = $_GET['status'];

        $conn = mysqli_connect('localhost', 'root', "", 'reg');
      if ($conn === false) {
      die("ERROR: Could not connect. "
    . mysqli_connect_error());
      }

      $qu1 = "UPDATE `form` SET `status`  = '$status' WHERE `srno` = $srno";

    if (mysqli_query($conn, $qu1)) {
  
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
 <strong >Verified!!! </strong> <br>
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
 },1500) 
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
}

 //DELETE



if (isset($_GET['isDEL'])) {

    $srno = $_GET['srno'];
    $conn = mysqli_connect('localhost', 'root', "", 'reg');

   if ($conn === false) {
   die("ERROR: Could not connect. "
 . mysqli_connect_error());
   }

$qu1= "DELETE FROM `form` WHERE srno= $srno";
   
 if (mysqli_query($conn, $qu1)) {

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

.alert.success {background-color: red;}

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
<strong >DELATED!!! ID: '.$srno.' </strong> <br>
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
},3000) 
}
Suc();
</script>
</body>
</html>
');
echo ("<script LANGUAGE='JavaScript'>
setTimeout(function(){
 window.location.href='database2.php';},3000);
</script>");


} else {
echo "ERROR: Hush! Sorry $qyy. "
 . mysqli_error($conn);
}
}

// Close connection
mysqli_close($conn);
?>
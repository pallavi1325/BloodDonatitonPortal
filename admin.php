<?php
if(isset($_POST['passcode'])){
session_start();
$passcode=$_POST['passcode'];
if($passcode == '111111'){

    echo '<a href="database.php">Click here to view user database</a><br><br>';
    echo '<a href="database2.php">Click here to view donor details database</a>';

}else{
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Please Enter Valid Passcode!!!');
    window.location.href='admin.html';
    </script>");
}

}


?>
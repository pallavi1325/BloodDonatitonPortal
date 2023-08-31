<?php
header('content-type:image/jpeg');
$conn = mysqli_connect('localhost','root','','reg');
if($conn->connect_error)
{
	die("Connection Failed".$conn->connect_error);

}
// $sql = "select name,tdate,bloodbank from form";
$sql = "select  fname,lname, tdate,bloodbank from form where aadhar = '555555555555' ";
$result = $conn->query($sql);
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
$font = "BebasNeue-Regular.ttf";
$image =imagecreatefromjpeg("images/certificate.jpg");
$color = imagecolorallocate($image,19,21,22);
$fname = $row['fname'];
imagettftext($image,50,0,840,720,$color,$font,$fname);
$lname = $row['lname'];
imagettftext($image,50,0,1060,720,$color,$font,$lname);
$date = $row['tdate'];
imagettftext($image,35,0,380,1170,$color,$font,$date);
$bloodbank = $row['bloodbank'];
imagettftext($image,35,0,480,1230,$color,$font,$bloodbank);
imagejpeg($image);

imagedestroy($image);
echo "Certificate created";
	}
}
else
{
	echo "No date found";
}



?>

<?php
session_start();
if(isset($_POST['aadhar'])){
$aadhar=$_POST['aadhar'];
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'reg'); 
$qry = "select fname,lname, tdate,bloodbank,bloodgroup,status,aadhar from form where aadhar = $aadhar && status = 1 ";

$result = mysqli_query($con,$qry);
$num = mysqli_num_rows($result);

if($num!=0){
    $result = mysqli_query($con, $qry);
    while ($rows = mysqli_fetch_assoc($result)) {
        $fname=$rows['fname'];
        $lname=$rows['lname'];
        $tdate=$rows['tdate'];
        $bname=$rows['bloodbank'];
        $aadhar=$rows['aadhar'];
        $bloodgroup=$rows['bloodgroup'];  


}
$_SESSION['fname']=$fname;
$_SESSION['lname']=$lname;
$_SESSION['tdate']=$tdate;
$_SESSION['bname']=$bname;
$_SESSION['bloodgroup']=$bloodgroup;
$_SESSION['aadhar']=$aadhar;

echo ("<script LANGUAGE='JavaScript'>
setTimeout(function(){
  window.location.href='certificate2.php';},100);
</script>");

}else{
    echo "Enter Valid Aadhar Number Or Your Certificate Is Not Verify yet!!";
}

}else{
    echo "Not set";
}

?>



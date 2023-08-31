<!-- certificat
oth login
password encripation -->



<?php
session_start();
if(!isset($_SESSION['name'])){
header('location:login.html');
}
?>


<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="d_details.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css">
    <title>Dashboard</title>
</head>


<body>
    <img class="img-logo" src="images/Giving = Living1.png" alt="website-logo">
    
    <marquee scrollamount="10"><b>Warning: </b> Do not pay any amount to any person promising supply of blood packets or arranging donors. Inform <b style="color: rgba(53, 151, 231, 0.904);">givingliving@gmail.com </b> or call team members. so that we can initiate legal action. We have received complaints of middlemen seeking money - GivingLiving has no agents, does not arrange blood/donors and does not collect money for any service.</marquee>
   
    <nav class="nav1">
        <a href="home.php" target="_blank"><i class="fa fa-fw fa-home"></i> Home</a>
        <a href="https://www.worldometers.info/coronavirus/" target="_blank"><i class="fas fa-head-side-mask"></i> Covid-19</a>
        <a href="gallery.html" target="_blank"><i class="fas fa-images"></i> Gallery</a>
        <a href="contact.html" target="_blank"><i class="fa fa-fw fa-envelope"></i> Contact</a>
        <a href="admin.html" target="_blank"><i class="fa fa-fw fa-user-tie"></i> Admin</a>
        
        
        <a style="float: right;" href="logout.php" target="_blank"><i class="fa fa-fw fa-sign-out"></i> Log Out</a>
        <a href="#" style="float: right;"> <?php echo $_SESSION['name']; ?></a>
        
        <div class="animation start-home"></div>
    </nav>

    <nav class="nav3">  
        <a href="d_details.html"><i class="fa fa-hand-holding-water fa-2x statIcon "></i> <br><br> Donate <br>Blood</a>
     <a href="d_detailorgan.html"><i class="fas fa-lungs fa-2x statIcon"></i><br><br> Donate <br>Organ</a>
     <a href="#"><i class="fas fa-lungs fa-2x statIcon"></i><br><br> Donate <br>Plasma</a>
     <!-- <i class="far fa-box-heart"></i> -->
    <a href="certificate.html"><i class="fas fa-address-card fa-2x statIcon"></i><br><br> Get <br>Certificate</a>
    
</nav>
<div class="img">
    <img class="img1" src="images/11.jpg" alt="who can donate blood">
    <img class="img1" src="images/33.jpg" alt="how often can you donate">
    <img class="img1" src="images/22.jpg" alt="how much blood do you donote">
    <img class="img1" src="images/22.jpg" alt="how much blood do you donote">
    
    
   
    </div> 

</body>

</html>
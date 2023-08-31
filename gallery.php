<?php


if(isset($_FILES['img'])){
    $name = $_POST['sname'];
    $img = $_FILES['img'] ['name'];

        $destfile = 'images/'.$img;
        move_uploaded_file($img,$destfile);
        
        $con = mysqli_connect('localhost', 'root','','reg');
    


    

   


    $sql =  "INSERT INTO `img` ( `name`, `img`) VALUES ('$name','$destfile')";
    $run = mysqli_query($con,$sql);
    
}


?>




<?php

$qry = "select * from img";
$query1 = mysqli_query($con, $qry);
$result = mysqli_fetch_array($query1);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <h2>Gallery</h2>
        

        <?php
        while ($result = mysqli_fetch_array($query1)) {
        ?>
            
               
                <img src="<?php echo $result['img']; ?>" alt=" <?php echo $result['name']; ?>" width="auto" height="auto">
                
        
                
            
        <?php
        }

        ?>

    


</body>

</html>
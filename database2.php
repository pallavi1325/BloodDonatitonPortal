<?php

session_start();

$con = mysqli_connect('localhost', 'root');


mysqli_select_db($con, 'reg');

?>

<?php

$qry = "select * from form";
$result = mysqli_query($con, $qry);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
</head>

<body>
    <table align="center" border="1px" style="width:600px; line-height:40px;">
        <tr>
            <th colspan="70">
                <h2>Donor Details</h2>
            </th>
        <tr>
            <th colspan="4">srno</th>
            <th colspan="4">First Name</th>
            <th colspan="4">Last Name</th>
            <th colspan="4">Gender</th>
            <th colspan="4">Date of Birth</th>
            <th colspan="4">Phone No</th>
            <th colspan="4">Address</th>
            <th colspan="4">Tentative Date</th>
            <th colspan="4">State</th>
            <th colspan="4">City</th>
            <th colspan="4">Blood Bank</th>
            <th colspan="4">Blood Group</th>
            <th colspan="4">Aahar No</th>
            <th colspan="6">Status</th>
            <th colspan="8">Opertions</th>

        </tr>

        <?php
        while ($rows = mysqli_fetch_assoc($result)) {
        ?>

            <head>
                <style>
                    body {

                        font-size: 12px;
                        font-family: sans-serif;
                        background-color: #fbfbfcee;

                    }


                    .nav1 {
                        margin: 1px auto 0;

                        position: relative;
                        width: 100%;
                        height: 50px;
                        background-color: #f7f9fa;
                        border-radius: 1px;
                        font-size: 15px;
                        border: 1px solid rgb(5, 3, 3);
                    }

                    .nav1 a {
                        line-height: 50px;
                        height: 100%;
                        display: inline-block;
                        position: relative;
                        z-index: 1;
                        text-decoration: none;
                        text-transform: uppercase;
                        text-align: center;
                        color: rgb(7, 0, 0);
                        cursor: pointer;
                        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                        font-size: 20px;
                        font-weight: bold;
                    }

                    .nav1 .animation {
                        position: absolute;
                        height: 100%;
                        top: 0;
                        z-index: 0;
                        transition: all .5s ease 0s;
                        border-radius: 1px;
                    }

                    a:nth-child(1) {
                        width: 150px;
                    }

                    a:nth-child(2) {
                        width: 150px;
                    }

                    a:nth-child(3) {
                        width: 150px;
                    }

                    a:nth-child(4) {
                        width: 150px;
                    }

                    a:nth-child(5) {
                        width: 150px;
                    }

                    a:nth-child(6) {
                        width: 155px;
                    }

                    .nav1 .start-home,
                    a:nth-child(1):hover~.animation {
                        width: 150px;
                        left: 0;
                        background-color: #62f17ad2;
                    }

                    .nav1 .start-covid,
                    a:nth-child(2):hover~.animation {
                        width: 150px;
                        left: 160px;
                        background-color: #62f17ad2;
                    }

                    .nav1 .start-gallery,
                    a:nth-child(3):hover~.animation {
                        width: 150px;
                        left: 310px;
                        background-color: #62f17ad2;
                    }

                    .nav1 .start-contact,
                    a:nth-child(4):hover~.animation {
                        width: 150px;
                        left: 465px;
                        background-color: #62f17ad2;
                    }

                    .nav1 .start-admin,
                    a:nth-child(5):hover~.animation {
                        width: 150px;
                        left: 615px;
                        background-color: #62f17ad2;
                    }

                    .nav1 .start-logout,
                    a:nth-child(6):hover~.animation {
                        width: 160px;
                        left: 785px;
                        background-color: #62f17ad2;

                    }

                    .i
                    /* Donor details */

                    td {
                        padding: 15px;
                    }

                    td input,
                    textarea {
                        height: 25px;
                        border: solid rgb(236, 45, 11) 1px;
                        border-radius: 5px;
                        background-color: white;
                        box-shadow: 0 0 15px 1px rgb(248, 190, 190);
                    }

                    select {
                        height: 35px;
                        width: 300px;
                        border: solid rgb(236, 45, 11) 1px;
                        border-radius: 15px;
                        background-color: white;
                        box-shadow: 0 0 15px 1px rgb(248, 190, 190);
                    }

                    placeholder {
                        background-color: red;
                    }

                    .btn {

                        background-color: rgb(241, 63, 63);
                        color: white;
                        font-weight: bold;
                        width: 12vw;
                        height: 5vh;
                        border-radius: 5px;
                        margin-left: 50px;
                    }

                    #del {
                        background-color: red;
                        height: 55px;
                        width: 55px;
                        border-radius: 5px;
                        border: none;
                        font-weight: bold;
                        color: white;

                    }

                    #update {
                        background-color: orangered;
                        height: 55px;
                        width: 55px;
                        border-radius: 5px;
                        border: none;
                        font-weight: bold;
                        color: white;
                    }
                </style>

            </head>

            <tr>

                <td colspan="4"><input type="text" name="srno" value="<?php echo $rows['srno']; ?>" required size="2" readonly></td>
                <td colspan="4"><input type="text" name="fname" value="<?php echo $rows['fname']; ?>" required size="8" readonly></td>

                <td colspan="4"><input type="text" name="lname" value="<?php echo $rows['lname']; ?>" required size="8" readonly></td>

                <td colspan="4"><input type="text" name="gender" value="<?php echo $rows['gender']; ?>" required size="3" readonly></td>

                <td colspan="4"><input type="date" name="dob" value="<?php echo $rows['dob']; ?>" required readonly></td>


                <td colspan="4"><input type="text" name="phone" value="<?php echo $rows['phone']; ?>" required size="8" readonly></td>

                <td colspan="4"><textarea readonly name="address" cols="30" rows="10"><?php echo $rows['address']; ?></textarea></td>

                <td colspan="4"><input type="date" readonly name="tentative" value="<?php echo $rows['tdate']; ?>" required></td>

                <td colspan="4"><input type="text" readonly name="state" value="<?php echo $rows['state']; ?>" required size="2"></td>


                <td colspan="4"><input type="text" readonly name="city" value="<?php echo $rows['city']; ?>" required size="8"></td>

                <td colspan="4"><input type="text" readonly name="bname" value="<?php echo $rows['bloodbank']; ?>" required size="8"></td>

                <td colspan="4"><input type="text" readonly name="blood" value="<?php echo $rows['bloodgroup']; ?>" required size="1"></td>

                <td colspan="4"><input type="text" readonly name="aadhar" value="<?php echo $rows['aadhar']; ?>" required size="8"></td>
                <td colspan="4">
                    <input style="border-radius:50px; width:10px;" type="text" id="<?php echo $rows['srno']; ?>" value="<?php echo $rows['status']; ?>" name="status" required size="1">
                </td>

                <td colspan="4"><a href="update_db.php?status=1&srno=<?php echo $rows['srno']; ?>"><button id="update" onclick="verify<?php echo $rows['srno']; ?>()"><i class="fa-solid fa-check" aria-hidden="true"></i>Verify</button></a></td>

                <td colspan="4"><a href="updatedb1.php?yes=yes&srno=<?php echo $rows['srno']; ?>"><button  style="background-color: green;" id="update"><i class="fa fa-refresh" aria-hidden="true"></i>Update</button></a></td>

                <td colspan="4"><a href=""><button id="update" style="background-color: red;" onclick="confirmbox<?php echo $rows['srno']; ?>()"><i class="fa fa-trash" aria-hidden="true"></i>Delate</button></td>
            </tr>

            <script>
                function verify<?php echo $rows['srno']; ?>() {
                    var x = document.getElementById(<?php echo $rows['srno']; ?>);
                    x.value = 1;

                }

                function confirmbox<?php echo $rows['srno']; ?>() {

                    var result = confirm("Alert: Are you sure  to delete this record?");
                    if (result==true) {
                        window.location.href="update_db.php?isDEL=yes&srno="+<?php echo $rows['srno']; ?>;
                    } 

                }

function confirmbox<?php echo $rows['srno']; ?>() {

var result = confirm("Alert: Are you sure  to delete this record?");
if (result == true) {
    window.location.href = "update_db.php?isDEL=yes&srno=" + <?php echo $rows['srno']; ?>;
}

}
            </script>
        <?php
        }

        ?>

    </table>

    <a style="font-size:25px" href="home.php">Home</a>
</body>

</html>
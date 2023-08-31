<?php

include_once('connection.php');
//UPDATE
if (isset($_GET['yes'])) {
    $srno = $_GET['srno'];

   $qu0 = "SELECT  * from `form` WHERE srno=$srno";
   $result = mysqli_query($con, $qu0);
 }
?>

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
          <th colspan="4">Status</th>
          <th colspan="4">Opertions</th>

      </tr>
<form action="d_details.php" method="post">
    <?php while($rows=mysqli_fetch_assoc($result)){
        ?>
    
      <tr>

                <td colspan="4"><input type="text" name="srno" value="<?php echo $rows['srno']; ?>" required size="2"></td>
                <td colspan="4"><input type="text" name="fname" value="<?php echo $rows['fname']; ?>" required size="8"></td>

                <td colspan="4"><input type="text" name="lname" value="<?php echo $rows['lname']; ?>" required size="8"></td>

                <td colspan="4"><input type="text" name="gender" value="<?php echo $rows['gender']; ?>" required size="3"></td>

                <td colspan="4"><input type="date" name="dob" value="<?php echo $rows['dob']; ?>" required></td>


                <td colspan="4"><input type="text" name="phone" value="<?php echo $rows['phone']; ?>" required size="8"></td>

                <td colspan="4"><textarea name="address" cols="30" rows="10"><?php echo $rows['address']; ?></textarea></td>

                <td colspan="4"><input type="date" name="tentative" value="<?php echo $rows['tdate']; ?>" required></td>

                <td colspan="4"><input type="text" name="state" value="<?php echo $rows['state']; ?>" required size="2"></td>


                <td colspan="4"><input type="text" name="city" value="<?php echo $rows['city']; ?>" required size="8"></td>

                <td colspan="4"><input type="text" name="bname" value="<?php echo $rows['bloodbank']; ?>" required size="8"></td>

                <td colspan="4"><input type="text" name="blood" value="<?php echo $rows['bloodgroup']; ?>" required size="1"></td>

                <td colspan="4"><input type="text" name="aadhar" value="<?php echo $rows['aadhar']; ?>" required size="8"></td>
                <td colspan="4">
                    <input  type="text" id="<?php echo $rows['srno']; ?>" value="<?php echo $rows['status']; ?>" name="status" required size="3">
                </td>

                <td colspan="4"><input type="submit" name="Update"></td>
            <?php
    }
      ?>
</form>
    </table>
</body>

</html>

     
<?php

include("../LoginSystem/config.php");

error_reporting(0);

if($_POST['register'])
{
    $clgname = $_POST['collegename'];
    $tname = $_POST['teamname'];
    $cname = $_POST['coachname'];
    $city = $_POST['city'];
    $pincode = $_POST['pnumber'];
    $mnumber = $_POST['number'];
    $email = $_POST['email'];

    $query = "INSERT INTO  tournament_tbl VALUES ('$clgname ', '$tname', '$cname', '$city', '$pincode ', '$mnumber', '$email')";
    $data = mysqli_query($conn, $query);

    
        if($data)
        {
            echo "Registration has been successfull.";
            echo"<script> window.open('../index page/index_page.php','_self') </script>";
        }
        else
        {
            echo "Registration Failed!!";
        }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tournament Registration form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <!---Tab Logo---->
   <link rel="icon" href="../images/arenalogo.png">

</head>
<body>
   
<div class="form-container">

   <form action="" method="POST" enctype="multipart/form-data">
      <h3>Tournament Registration</h3>
        <div class="row g-3">
            <div class="col">
                <input type="text" class="form-control" name="collegename" placeholder="College Name" value="<?php echo $clgname; ?>" aria-label="Last name" required>
            </div>
            <div class="col">
                <input type="text" class="form-control" name="teamname" placeholder="Team Name" value="<?php echo $tname; ?>" aria-label="Last name" required>
            </div>
            <div class="col">
                <input type="text" class="form-control" name="coachname" placeholder="Coach Name" value="<?php echo $cname; ?>" aria-label="Last name" required>
            </div>
            <div class="col">
                <input type="text" class="form-control" name="city" placeholder="City" value="<?php echo $city; ?>" aria-label="Last name" required>
            </div>
            <div class="col">
                <input type="text" class="form-control" id="number" name="pnumber"  maxlength = "6" value="<?php echo $pincode; ?>" placeholder="Pin Code" aria-label="Last name" required>
            </div>
            <div class="col">
                <input type="text" class="form-control" id="number" name="number"  maxlength = "10" value="<?php echo $mnumber; ?>" placeholder="Mobile No" aria-label="Last name" required>
            </div>
            <div class="col">
                <input type="email" class="form-control" name="email" placeholder="Email Address" value="<?php echo $email; ?>" aria-label="Last name" required>
            </dic>
            <input type="submit" name="register" value="REGISTER" class="form-btn">
        </div>
   </form>

</div>
</body>
</html>
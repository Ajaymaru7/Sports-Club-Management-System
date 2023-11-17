<?php
include("../LoginSystem/config.php");

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $f = "INSERT INTO  feedback_tbl VALUES ('$name', '$email', '$message')";
    $feedback = mysqli_query($conn, $f);

        if($feedback)
        {
            echo "Submit Successfull.";
            echo"<script> window.open('../index page/index_page.php','_self') </script>";
            
        }
        else
        {
            echo "Failed!!";
        }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!---Tab Logo---->
   <link rel="icon" href="../images/arenalogo.png">
   
   <title>Feedback form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">

   <form class="form-floating" action="" method="post">
      <h3>Feedback Form</h3>
      <input type="text" class="form-control" name="name" placeholder="Name" required>
      <input type="email" name="email" required placeholder="Email" required>
      <textarea class="form-control" name="message" placeholder="Message"></textarea>
      <input type="submit" name="submit" value="SUBMIT" class="form-btn">
   </form>

</div>
</body>
</html>
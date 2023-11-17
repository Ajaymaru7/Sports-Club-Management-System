<?php
include("../LoginSystem/config.php");
error_reporting(0);

session_start();
$_SESSION["Id"] = "1";

if (isset($_POST['change-password']))
{
   $username = $_POST['username'];
   $password =($_POST['newpassword']);

   if (count($_POST) > 0)
   {
      $select = mysqli_query($conn, "SELECT *from user_tbl WHERE id='" . $_SESSION["id"] . "'");
      $data = mysqli_fetch_array($select);

      if($_POST["password"] == $data["password"])
      {
         mysqli_query($conn, "UPDATE user_tbl set password='" . $_POST["newpassword"] . "' WHERE id='" . $_SESSION["id"] . "'");
         echo "Password has been changed";
         header("Location:signin-signup.php");
         exit();
      }
      else
      {
         echo "Password Not Change!";
      }

   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Forgot password</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <!---Tab Logo---->
   <link rel="icon" href="../images/arenalogo.png">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>CREATE NEW PASSWORD</h3>
      <input type="password" name="oldpassword" required placeholder="OLD Password">
      <input type="password" name="newpassword" required placeholder="New Password">
      <input type="password" name="cnewpassword" required placeholder="Conform Password">

      <input type="hidden" name="hidden_id" value="<?php if(isset($id)) echo $id; ?>">
      <input type="submit" name="change-password" value="UPDATE" class="form-btn">
   </form>

</div>

</body>
</html>
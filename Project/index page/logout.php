<?php
session_start();
session_destroy();

echo"<script>alert('logout successfully')</script>";
echo"<script> window.open('../LoginSystem/signin-signup.php','_self') </script>";
?>
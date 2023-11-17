<?php 

session_start();

    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "sports_club_db";

    $conn = mysqli_connect($server, $user, $pass, $database);

    if (!$conn) {
        die("<script>alert('Connection Failed.')</script>");
    }

?>
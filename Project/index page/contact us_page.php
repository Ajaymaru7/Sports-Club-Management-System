<?php

include("../LoginSystem/config.php");

if(isset($_POST['click']))
{
    $name = $_POST['name'];
    $phonenumber = $_POST['pno'];
    $email = $_POST['email'];
    $message = $_POST['msg'];

    $s = "INSERT INTO  contact_tbl VALUES ('$name', '$phonenumber', '$email', '$message')";
    $cont = mysqli_query($conn, $s);

        if($cont)
        {
            echo "Submit Successfull.";
        }
        else
        {
            echo "Failed!!";
        }
}

?>

<html>
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
        <title>Contact Us</title>

        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
        <link rel="stylesheet" type="text/css" href="style.css">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

        <!---Tab Logo---->
        <link rel="icon" href="../images/arenalogo.png">

    </head>
    <body>
        <!--Navigation Bar-->
        <section id="nav-bar">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                  <a class="navbar-brand" href="http://localhost/project/index%20page/index_page.php#"><img src="https://upload.wikimedia.org/wikipedia/hr/d/dd/ArenaSport2019.png"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav m-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost/project/index%20page/index_page.php#top"><i class="fa fa-house"></i> Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Activities
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Games
                                        <select class="form-select" name="links" size="1" onchange="window.location.href=this.value;">
                                            <option value="">Select</option>
                                            <option value="http://localhost/project/index%20page/cricket_page.php">Cricket</option>
                                            <option value="http://localhost/project/index%20page/badminton_page.php">Badminton</option>
                                            <option value="http://localhost/project/index%20page/football_page.php">Football</option>
                                            <option value="http://localhost/project/index%20page/golfball_page.php">Golf Ball</option>
                                            <option value="http://localhost/project/index%20page/volleyball_page.php">Volley Ball</option>
                                            <option value="http://localhost/project/index%20page/basketball_page.php">Basket Ball</option>
                                            <option value="http://localhost/project/index%20page/8pool_page.php">8 Pooll</option>
                                            <option value="http://localhost/project/index%20page/aquapoint_page.php">Aqua Point</option>
                                        </select>
                                    </a></li>
                                  <li><a class="dropdown-item" href="http://localhost/project/loginsystem/tournament%20reg.php">Tournament</a></li>
                                  <li><hr class="dropdown-divider"></li>
                                  <li><a class="dropdown-item" href="http://localhost/project/index%20page/game%20result_page.php">Result</a></li>
                                  <li><a class="dropdown-item" href="http://localhost/project/index%20page/gallery_page.php">Gallery</a></li>
                                  <li><a class="dropdown-item" href="http://localhost/project/index%20page/event_page.php">Event</a></li>
                                  <li><a class="dropdown-item" href="http://localhost/project/index%20page/sheadule_page.php">Sheadule</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost/project/loginsystem/feedback%20form.php"><i class="fa fa-comment"></i> Feedback</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost/project/index%20page/contact%20us_page.php"><i class="fa fa-address-book"></i> Contact Us</a>
                            </li>
                            
                            <li class="nav-item cta">
                                <a href="logout.php" class="nav-link"> <i class="fa fa-arrow-right-from-bracket"></i> Logout</a>
                            </li>
                            <li class="nav-item cta">
                                <i class="fa fa-user"></i> <?php echo($_SESSION['username']); ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </section>
    <!---contact us---->
    <section id="contact">
            <div class="container">
                <h1>CONTACT US</h1>
                <div class="title">
                        <h2>Get In Touch</h2>
                    </div>
                <div class="row">
                    <div class="col-md-6">
                        <form class="contact-form" action="" method="POST">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Name" required>
                            </div>
                            <div class="form-group">
                                <input type="texts" name="pno" class="form-control" id="number" maxlength="10" placeholder="Phone Number" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="msg" placeholder="Message" required></textarea>
                            </div>
                            <button type="submit" name="click" class="btn btn-primery">Submit</button>
                        </form>
                    </div>
                    <div class="col-md-6 contact-info">
                        <div class="follow"><b>Address: </b><i class="fa fa-map-marker"></i> Gandhi road, oop stare plaza,Surat</div>
                        <div class="follow"><b>Phone No: </b><i class="fa fa-phone"></i>+91 4568794389</div>
                        <div class="follow"><b>Email: </b><i class="fa fa-envelope"></i>arenaclun@gmail.com</div>
                        <div class="follow">
                            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                            <label><b>Social: </b><a href="https://www.instagram.com/mr.ajay_9573/" class="fa fa-instagram"></a>   <a href="https://www.facebook.com/profile.php?id=100056165302350" class="fa fa-facebook"></a>   <a href="https://twitter.com/AjayMar94989923" class="fa fa-twitter"></a>    <a href="https://www.linkedin.com/in/ajay-maru-25894b200/" class="fa fa-linkedin"></a></label>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="footer">
                <center>
                    <span class="credit">Created By Ajay Maru & Atrey Zala</a> | </span>
                    <span class="far fa-copyright"></span><span> 2022 All rights reserved.</span>
                </center>
            </div>
        </footer>
    </body>
</html>
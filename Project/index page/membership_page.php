<?php


include("../LoginSystem/config.php");


?>

<html>
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
        <title>Arena Sport</title>

        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <!--Membership-->
        <section id="membership">
            <div class="container">
                <h1>MEMBERSHIP</h1>
                <h4>You can purchase membership on club</h4>
                <div class="row">
                    <div class="col-md-3">
                        <div class="single-price">
                            <div class="price-head">
                                <h2>Free</h2>
                                <p>$0/<span>Month</span></p>
                            </div>
                            <div class="price-content">
                                <ul>
                                    <li><i class="fa fa-check-circle"></i>1 Month Free Trile</li>
                                    <li><i class="fa fa-check-circle"></i>Access Some Game</li>
                                    <li><i class="fa fa-times-circle"></i>Play Game</li>
                                    <li><i class="fa fa-check-circle"></i>View Games</li>
                                    <li><i class="fa fa-times-circle"></i>Watch Matches</li>
                                    <li><i class="fa fa-times-circle"></i>Tournament Registration</li>
                                </ul>
                            </div>
                            <div class="price-button">
                                <a class="buy-btn" href="http://localhost/project/loginsystem/signin-signup.php">Join Free</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-price">
                            <div class="price-head">
                                <h2>Start</h2>
                                <p>$199/<span>Month</span></p>
                            </div>
                            <div class="price-content">
                                <ul>
                                    <li><i class="fa fa-check-circle"></i>3 Month</li>
                                    <li><i class="fa fa-check-circle"></i>Access Some game</li>
                                    <li><i class="fa fa-times-circle"></i>Play Game</li>
                                    <li><i class="fa fa-check-circle"></i>View Games</li>
                                    <li><i class="fa fa-check-circle"></i>Watch Matches</li>
                                    <li><i class="fa fa-times-circle"></i>Tournament Registration</li>
                                </ul>
                            </div>
                            <div class="price-button">
                                <a class="buy-btn" href="http://localhost/project/loginsystem/signin-signup.php">Join Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-price">
                            <div class="price-head">
                                <h2>Start</h2>
                                <p>$399/<span>Month</span></p>
                            </div>
                            <div class="price-content">
                                <ul>
                                    <li><i class="fa fa-check-circle"></i>6 Month</li>
                                    <li><i class="fa fa-check-circle"></i>Access All Game</li>
                                    <li><i class="fa fa-check-circle"></i>Play Game</li>
                                    <li><i class="fa fa-check-circle"></i>View Games</li>
                                    <li><i class="fa fa-check-circle"></i>Watch Matches</li>
                                    <li><i class="fa fa-times-circle"></i>Tournament Registration</li>
                                </ul>
                            </div>
                            <div class="price-button">
                                <a class="buy-btn" href="http://localhost/project/loginsystem/signin-signup.php">Join Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-price">
                            <div class="price-head">
                                <h2>Offer Price</h2>
                                <p>$1999/<span>Year</span></p>
                            </div>
                            <div class="price-content">
                                <ul>
                                    <li><i class="fa fa-check-circle"></i>1 Year</li>
                                    <li><i class="fa fa-check-circle"></i>Access All Game</li>
                                    <li><i class="fa fa-check-circle"></i>Play Game</li>
                                    <li><i class="fa fa-check-circle"></i>View Games</li>
                                    <li><i class="fa fa-check-circle"></i>Watch Matches</li>
                                    <li><i class="fa fa-check-circle"></i>Tournament Registration</li>
                                </ul>
                            </div>
                            <div class="price-button">
                                <a class="buy-btn" href="http://localhost/project/loginsystem/signin-signup.php">Join Now</a>
                            </div>
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
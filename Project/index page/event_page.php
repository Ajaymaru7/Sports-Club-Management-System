<?php


include("../LoginSystem/config.php");


?>

<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
        <title>Event</title>

        <link rel="stylesheet" href="result.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>

        <!-- Link Swiper's CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

        <!---Tab Logo---->
        <link rel="icon" href="../images/arenalogo.png">

    </head>
    <body>
        <section id="nav-bar">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                  <a class="navbar-brand" href="http://localhost/project/index%20page/index_page.php#"><img src="https://upload.wikimedia.org/wikipedia/hr/d/dd/ArenaSport2019.png"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#top" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
        <h1>EVENT</h1>
        <section id="form-event">
            <div class="banner">
                <img src="https://wallpaperaccess.com/full/343570.jpg">
                <div clas="overlay">
                    <div class="content">
                        <h1>EVENT</h1>
                    </div>
                </div>
            </div>
            <div class="event">
                <div class="row">
                    <table class="content-table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>NO.</th>
                                <th>EVENT NAME</th>
                                <th>DATE</th>
                                <th>TIME</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td>1</td>
                                <td>cricket</td>
                                <td>Sep 9, 2022</td>
                                <td>10:00 AM</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>2</td>
                                <td>Football</td>
                                <td>Sep 10, 2022</td>
                                <td>1:30 PM</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>3</td>
                                <td>Golf</td>
                                <td>Sep 12, 2022</td>
                                <td>9:00 AM</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>4</td>
                                <td>Badmintan</td>
                                <td>Sep 22, 2022</td>
                                <td>3:00 PM</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>5</td>
                                <td>Volley Ball</td>
                                <td>Sep 28, 2022</td>
                                <td>10:30 AM</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>6</td>
                                <td>8 Pooll</td>
                                <td>Oct 1, 2022</td>
                                <td>9:00 AM</td>
                            </tr>
                            <tr>
                                    <td></td>
                                <td>7</td>
                                <td>Basket Ball</td>
                                <td>Oct 5, 2022</td>
                                <td>4:00 PM</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
            <div class="footer">
                <center>
                    <span class="credit">Created By Ajay Maru & Atrey Zala</a> | </span>
                    <span class="far fa-copyright"></span><span> 2022 All rights reserved.</span>
                </center>
            </div>
    </body>
</html>
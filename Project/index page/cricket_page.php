<?php

include("../LoginSystem/config.php");

?>

<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
        <title>Cricket</title>

        <link rel="stylesheet" href="result.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

        <!---Tab Logo---->
        <link rel="icon" href="../images/arenalogo.png">

        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
 
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
        <section id="cricket">
            <div class="container">
                <h1>CRICKET</h1>
            </div>
            <div class="section-container">
                <div class="columns image">
                    <img src="https://media.istockphoto.com/photos/cricket-batsman-hitting-ball-during-cricket-match-in-stadium-picture-id518022060?k=20&m=518022060&s=612x612&w=0&h=F_5uNLLGfLR_HcdJSraIgDQmV54Zsek0MPKJP11VYgc=">
                </div>
                <div class="columns content">
                    <div class="content-container">
                        <h6>Cricket is a team sport played between two teams of eleven players each. It is a bat-and-ball game played on a roughly oval grass field, in the centre of which is a flat strip of ground 20.12  m (22  yards) long, called a pitch. At each end of the pitch is a set of wooden stumps, called a wicket. Note that, rather confusingly, the pitch itself is also often referred to as the wicket. A player from the fielding team (the bowler) propels a hard, fist-sized cork-centred leather ball from one wicket towards the other. The ball usually bounces once before reaching a player from the opposing team (the batsman), who defends the wicket from the ball with a wooden cricket bat. The batsman may then run between the wickets, exchanging ends with another batsman (the "non-striker"), who has been standing in an inactive role near the bowler's wicket, to score runs. The remainder of the bowlers' team stand in various positions around the oval as fielders.</h6>
                        <h4>Timing:</h4>
                        <li>Morning 07:00AM To 01:30PM</li>
                        <li>Evening 04:00PM To 09:00PM</li>

                        <h4>Coaching Timing</h4>
                        <h5>Morning:</h5>
                        <li>08:00AM To 09:00AM</li>
                        <li>10:00AM To 11:00AM</li>

                        <h5>Evening:</h5>
                        <li>04:00PM To 05:00PM</li>
                        <li>07:00PM To 08:00PM</li>
                    </div>
                </div>
            </div>
            <div class="row">
            <h4>PROCEED IN CLUB</h4>
                <table class="content-table">
                    <thead>
                        <tr>
                            <th>NO.</th>
                            <th>DURATION</th>
                            <th>MEMBER</th>
                            <th>CHILD</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>Daily</td>
                            <td>Rs.50</td>
                            <td>Rs.30</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Monthly</td>
                            <td>Rs.500</td>
                            <td>Rs.300</td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Yearly</td>
                            <td>Rs.5000</td>
                            <td>Rs.3000</td>
                        </tr>
                    </tbody>
                </table>
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
        <script src="js/smooth-scril.js"></script>
        <script>
            var scroll = new SmoothScroll('a[href*="#"]');
        </script>
        <script>
            const swiper = new Swiper('.swiper', {
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },

            });
        </script>
    </body>
</html>
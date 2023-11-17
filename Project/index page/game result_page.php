<?php


include("../LoginSystem/config.php");


?>

<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
        <title>Game Result</title>

        <link rel="stylesheet" href="result.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>

        <!-- Link Swiper's CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>

        <!---Tab Logo---->
        <link rel="icon" href="../images/arenalogo.png">
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
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
        <div class="banner">
            <img src="https://cutewallpaper.org/21/cricket-wallpapers-hd/Cricket-wallpaper-HD-for-Android-APK-Download.jpg">
        </div>
        <h1>LATEST GAME RESULT</h1>
        <!--Game Result-->
        <section id="result">
            <section id="table">
                <h2>RESULT TABLE</h2>
                <div class="result-table">
                    <div class="row">
                            <table class="content-table">
                                <thead>
                                    <tr>
                                        <th>NO.</th>
                                        <th>TEAM</th>
                                        <th>SCORE</th>
                                        <th>POINT</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        
                                        <td>1.</td>
                                        <td>Arena</td>
                                        <td>15</td>
                                        <td>24</td>
                                    </tr>
                                    <tr>
                                    
                                        <td>2.</td>
                                        <td>Florida Club</td>
                                        <td>10</td>
                                        <td>19</td>
                                    </tr>
                                    <tr>
                                   
                                        <td>3.</td>
                                        <td>Team Dark</td>
                                        <td>20</td>
                                        <td>27</td>
                                    </tr>
                                    <tr>
                                    
                                        <td>4.</td>
                                        <td>Colorado</td>
                                        <td>14</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                    
                                        <td>5.</td>
                                        <td>Night Rider</td>
                                        <td>16</td>
                                        <td>20</td>
                                    </tr>
                                    <tr>
                                    
                                        <td>6.</td>
                                        <td>CSK</td>
                                        <td>12</td>
                                        <td>24</td>
                                    </tr>
                                    <tr>
                                    
                                        <td>7.</td>
                                        <td>Falcon Club</td>
                                        <td>17</td>
                                        <td>25</td>
                                    </tr>
                                    <tr>
                                   
                                        <td>8.</td>
                                        <td>Alpha Club</td>
                                        <td>20</td>
                                        <td>27</td>
                                    </tr>
                                </tbody>
                            </table>
                    </div> 
                    <div class="row">
                        <table class="content-table">
                            <thead>
                                <tr>
                                    <th>NO.</th>
                                    <th>TEAM</th>
                                    <th>SCORE</th>
                                    <th>POINT</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Arena</td>
                                    <td>15</td>
                                    <td>24</td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Florida Club</td>
                                    <td>10</td>
                                    <td>19</td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Team Dark</td>
                                    <td>20</td>
                                    <td>27</td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>Colorado</td>
                                    <td>14</td>
                                    <td>8</td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>Night Rider</td>
                                    <td>16</td>
                                    <td>20</td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td>CSK</td>
                                    <td>12</td>
                                    <td>24</td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td>Falcon Club</td>
                                    <td>17</td>
                                    <td>25</td>
                                </tr>
                                <tr>
                                    <td>8.</td>
                                    <td>Alpha Club</td>
                                    <td>20</td>
                                    <td>27</td>
                                </tr>
                            </tbody>
                        </table>
                    </div> 
                    <div class="row">
                        <table class="content-table">
                            <thead>
                                <tr>
                                    <th>NO.</th>
                                    <th>TEAM</th>
                                    <th>SCORE</th>
                                    <th>POINT</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Arena</td>
                                    <td>15</td>
                                    <td>24</td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Florida Club</td>
                                    <td>10</td>
                                    <td>19</td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Team Dark</td>
                                    <td>20</td>
                                    <td>27</td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>Colorado</td>
                                    <td>14</td>
                                    <td>8</td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>Night Rider</td>
                                    <td>16</td>
                                    <td>20</td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td>CSK</td>
                                    <td>12</td>
                                    <td>24</td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td>Falcon Club</td>
                                    <td>17</td>
                                    <td>25</td>
                                </tr>
                                <tr>
                                    <td>8.</td>
                                    <td>Alpha Club</td>
                                    <td>20</td>
                                    <td>27</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>       
                </div>
            </section>
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
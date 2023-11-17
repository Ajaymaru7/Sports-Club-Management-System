<?php


include("../LoginSystem/config.php");


?>

<!DOCTYPE HTML>
<html leng="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
        <title>Gallery</title>

        <!--Costome css-->
        <link rel="stylesheet" href="Gallery Css/gallery.css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>

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
        <!--Gallery-->
        <div class="container">
            <h1>PHOTO GALLERY</h1>
                <!-- Slider main container -->
                <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide"><img src="http://d1xchyov513y0i.cloudfront.net/wp-content/uploads/2017/04/22122418/ArenaSports-1.jpg"></div>
                        <div class="swiper-slide"><img src="https://s3-media0.fl.yelpcdn.com/bphoto/reM_vLibZA9t8B-Xnh3yRQ/o.jpg"></div>
                        <div class="swiper-slide"><img src="https://www.mortenson.com/-/media/project/mortenson/site/images/newsroom/news/2020/asu-multipurpose-arena-2.jpg?h=400&w=650&hash=E6A8110895B8D1FAEDF0E5E11262ADEB"></div>
                        <div class="swiper-slide"><img src="https://cdn.nba.com/manage/2020/10/chase-center-suite-784x523.jpg"></div>
                        <div class="swiper-slide"><img src="https://www.american.edu/recfit/facilities/images/Bender-Header-Image.jpg"></div>
                        <div class="swiper-slide"><img src="https://lh5.googleusercontent.com/p/AF1QipNteIL7W43rRV1bLlrAmhHWEid7LLWdm5jobgRW=w408-h272-k-no"></div>
                        <div class="swiper-slide"><img src="https://www.trianglevolleyball.org/sites/default/files/EsdRVccU4AAZBxI.jpg"></div>
                        <div class="swiper-slide"><img src="https://mutigers.com/images/2021/12/5/08042021_MBB_New_Court_Reveal_edits_hd_05.JPG"></div>
                        <div class="swiper-slide"><img src="https://kpe.utoronto.ca/sites/default/files/styles/large/public/image/building/Hybrid_Dome_Stadium_Panorama1.jpg?h=d70f751d&itok=prIGelrf"></div>
                        <div class="swiper-slide"><img src="https://www.theoaklandarena.com/assets/img/Oakland-Arena-6-a646c10624.jpg"></div>
                        <div class="swiper-slide"><img src="https://images.squarespace-cdn.com/content/v1/554cfb8be4b0ee9452bd55e4/1481129157890-PFXVCC7TUDOP51137B0Q/RBC+North+3.jpg"></div>
                        <div class="swiper-slide"><img src="https://media-cdn.tripadvisor.com/media/photo-s/0e/82/1d/63/room-view-from-door.jpg"></div>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <!-- If we need scrollbar -->
                    <div class="swiper-scrollbar"></div>
                </div>
                <h2>CLUB FACILITY</h2>
                <h6>Spend you holidays or host your guests with an ultra luxurious accommodation at Sports club. We have luxury suites, super deluxe and executive deluxe rooms with full fledged amenities that give you a slice of luxury like royalty! Spend a relaxing time in our deluxe suites.</h6>
                <!-- Swiper -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="https://www.ihrsa.org/uploads/Articles/Column-Width/Facilities_Total-Fitness-Poland-3_column.jpg"></div>
                    <div class="swiper-slide"><img src="https://www.umedclub.in/images/club-facility/ac-bar/8.jpg"></div>
                    <div class="swiper-slide"><img src="https://www.madrasclub.org/assets/images/club_facilities/Facilities-Swimming-Pool.jpg"></div>
                    <div class="swiper-slide"><img src="https://www.umedclub.in/images/club-facility/ac-bar/1.jpg"></div>
                    <div class="swiper-slide"><img src="https://www.gcaclubhouse.com/wp-content/uploads/2019/11/Restaurant-6.jpg"></div>
                    <div class="swiper-slide"><img src="https://images.cvent.com/CSN/254fa0d3-1ddc-447a-ba43-09910dd4673b/images/81618da8b273420c8a596272e0dec5ce!_!1621e900a7faf4fe10ab9418cc25ccb4.jpg?d=720"></div>
                    <div class="swiper-slide"><img src="https://karnavaticlub.com/wp-content/uploads/2022/01/Ft_Residential_Rooms.jpg"></div>
                </div>
                <div class="swiper-pagination"></div>
        </div>
        <footer>
            <div class="footer">
                <center>
                    <span class="credit">Created By Ajay Maru & Atrey Zala</a> | </span>
                    <span class="far fa-copyright"></span><span> 2022 All rights reserved.</span>
                </center>
            </div>
        </footer>
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
        <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
    </script>
    </body>
</html>
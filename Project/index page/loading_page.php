<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loading Page</title>

    <link rel="stylesheet" href="loading.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>

    <!-----Swiper Link----->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    
    <!---Tab Logo---->
    <link rel="icon" href="../images/arenalogo.png">
    
  </head>

  <body>
    <section class="hero-section">

      <nav class="navbar">
        <a class="navbar-brand" href="#"><img src="https://upload.wikimedia.org/wikipedia/en/8/8a/Arena_sport_logo.png"></a>
        <ul>
          <li><a href="#contact us">Contact</a></li>
          <li><a href="#contact us">About</a></li>
          
        </ul>
      </nav>
      <div class="hero-text">
        <h2>Welcome To Arena Sports Club</h2>
        <p>To Begin Your Sport Journey With Arena Sport.</p>
        <h4>To Connect With Us You Need To login First..</h4>
        <a href="http://localhost/project/loginsystem/signin-signup.php">SIGN</a>
      </div>
    </section>
    <!--Swiper Slider-->
    <section id="swiper">
      <!-- Slider main container -->
      <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide"><img src="https://www.teahub.io/photos/full/275-2756744_basketball.jpg"></div>
            <div class="swiper-slide"><img src="https://c4.wallpaperflare.com/wallpaper/225/869/220/football-team-al-ahly-sc-egyptian-sports-club-4k-wallpaper-thumb.jpg"></div>
            <div class="swiper-slide"><img src="https://p4.wallpaperbetter.com/wallpaper/1019/648/41/basketball-club-basketball-club-partizan-sports-basketball-hd-art-wallpaper-preview.jpg"></div>
            <div class="swiper-slide"><img src="https://pbs.twimg.com/media/D99nYLRU4AASAE_?format=jpg&name=4096x4096"></div>
            <div class="swiper-slide"><img src="https://wallpaperfordesktop.com/wp-content/uploads/2022/07/Sadio-Mane-8k-Wallpaper.jpg"></div>
            <div class="swiper-slide"><img src="https://wallpaperaccess.com/full/446716.jpg"></div>
            <div class="swiper-slide"><img src="https://vistapointe.net/images/golf-course-2.jpg"></div>
            <div class="swiper-slide"><img src="http://alshareef.org/wp-content/uploads/2015/02/sport-club2.jpg"></div>
            <div class="swiper-slide"><img src="https://www.redlandcitybulletin.com.au/images/transform/v1/crop/frm/3A7XZUYkQMtPbFHsecsYDWq/f911553b-8c85-4362-ae06-e0da20a67d4d.jpg/r0_59_1158_713_w1200_h678_fmax.jpg"></div>
            <div class="swiper-slide"><img src="https://s3.amazonaws.com/msc-media-linux-production/club_detail/5ca198487af64.jpg"></div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
      </div>
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
    </section>
    <!--Footer-->
    <footer>
        <div class="main-content">
          <div class="left box">
            <h2>About us</h2>
            <div class="content">
              <p>The Sports Club gets its flamboyant and elegant design in the heart of city from the renowned architect Charles Correa who also happens to be the designer. With a beautiful design and sprawling space; Sports Club has gradually spread its branches for other sports and has become an epitome of entertainment an Today, Sports Club is one of the most regal clubs of the city and renowned for its state of the art amenities and splendid aura.</p>
              <div class="social">
                <a href="https://www.facebook.com/profile.php?id=100056165302350"><span class="fab fa-facebook"></span></a>
                <a href="https://twitter.com/AjayMar94989923"><span class="fab fa-twitter"></span></a>
                <a href="https://www.instagram.com/mr.ajay_9573/"><span class="fab fa-instagram"></span></a>
              </div>
            </div>
          </div>
          <div class="center box" id="contact us">
            <h2>Contact us</h2>
            <div class="content">
              <div class="place">
                <span class="fas fa-map-marker-alt"></span>
                <span class="text">Gandhi road, oop stare plaza,Surat</span>
              </div>
              <div class="phone">
                <span class="fas fa-phone-alt"></span>
                <span class="text">+91-95765432100</span>
              </div>
              <div class="email">
                <span class="fas fa-envelope"></span>
                <span class="text">arenaclub@gmail.com</span>
              </div>
            </div>
          </div>
          <div class="right box">
            <h2>Get in touch</h2>
            <div class="content">
              <form action="#">
                <div class="email">
                  <div class="text">Email *</div>
                  <input type="email" required>
                </div>
                <div class="msg">
                  <div class="text">Message *</div>
                  <textarea rows="2" cols="25" required></textarea>
                </div>
                <div class="btn">
                  <button type="submit">Send</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="bottom">
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
  </body>

</html>
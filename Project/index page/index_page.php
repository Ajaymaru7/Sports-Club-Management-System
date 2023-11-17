<?php
error_reporting(0);
include("user_header.php");
include("../LoginSystem/config.php");
?>


        <!--Banner-->
        <div class="banner">
            <div class="slider">
                <img src="http://wonderfulengineering.com/wp-content/uploads/2016/03/Basketball-Wallpaper-2.jpg" id="slideImg">
            </div>
            <div class="overlay">
                <div class="content">
                    <h1>Welcome TO Arena Sports Club</h1>
                    <center><button class="btn"><a href="#video">Watch</a></button></center>
                    <h5>Sports Club was conceived by a group of people headed by Danis; the then Mayor and leading businessman from Ahmedabad. The Sports Club gets its flamboyant and elegant design in the heart of city from the renowned architect Charles Correa who also happens to be the designer of the soulful Gandhi Ashram. With a beautiful design and sprawling space; Sports Club has gradually spread its branches for other sports and has become an epitome of entertainment and leisure in the thriving city of Ahmedabad. Today, Sports Club is one of the most regal clubs of Ahmedabad and renowned for its state of the art amenities and splendid aura.</h5>
                </div>
            </div>
        </div>
        
        <!--About-->
        <section id="about">
            <div class="container">
                <h1>ABOUT US</h1>
                <div class="about-content">
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of GrammarEvery dream needs to be driven by passion to make it come true. Sports Club is one such dream, formed by keeping sheer passion for the gentleman’s game-Cricket. Sports Club was conceived by a group of people headed by Danis; the then Mayor and leading businessman from Ahmedabad.

                        The Sports Club gets its flamboyant and elegant design in the heart of city from the renowned architect Charles Correa who also happens to be the designer of the soulful Gandhi Ashram. With a beautiful design and sprawling space; Sports Club has gradually spread its branches for other sports and has become an epitome of entertainment and leisure in the thriving city of Ahmedabad. Today, Sports Club is one of the most regal clubs of Ahmedabad and renowned for its state of the art amenities and splendid aura..</p>
                </div>
            </div>
        </section>
        <center>
        <section>
            <div class="intro">
                <h1>WATCH</h1>
                <h4>Watch our arena sport club short video...</h4>
            </div>
            <div id="video">
            <iframe width="1100"  height="500" src="https://www.youtube.com/embed/-DwAVMDPUYk" title="YouTube video player" frameborder="2" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </section>
        </center>
        
        <!--Our Team-->
        <section>
            <div class="swiper">
                <h1>TEAM SQUAD</h1>
        
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="https://i.pinimg.com/736x/10/35/81/103581ad3841dd4d45df056695313e9e.jpg" />
                        <h3>M.S DHONI</h3>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://memes.co.in/wallpapers/uploads/1637605839.jpeg" />
                        <h3>VIRAT KOHALI</h3>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://static.india.com/wp-content/gallery/jasprit-bumrah/jasprit-bumrah-with-ball.png" />
                        <h3>BUMRAH</h3>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://bollyhollybaba.com/wp-content/uploads/2019/12/Shikhar-Dhawan-biography-left-handed-batsman.India-team-match-images-2.jpg" />
                        <h3>SHIKHAR DHAVAN</h3>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://w0.peakpx.com/wallpaper/805/873/HD-wallpaper-jadeja-csk-whistle-podu-yellow.jpg" />
                        <h3>RAVINDRA JADEJA</h3>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://i.pinimg.com/564x/5d/97/fe/5d97fe973da58a869741a7d17a6d3ac4.jpg" />
                        <h3>SACHIN TENDULKAR</h3>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://i.pinimg.com/originals/d2/d3/04/d2d304f482fdbf0e813f18829e0042a4.jpg" />
                        <h3>RAHUL</h3>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://i.pinimg.com/originals/50/49/db/5049dbe455cefac341ea3d5dfad22746.jpg" />
                        <h3>ROHIT SHARMA</h3>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://i.pinimg.com/originals/2e/31/a4/2e31a4fce6c52a98d518053d269d7eba.jpg" />
                        <h3>HARDIK PANDYA</h3>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <!-- Demo styles -->
            <style>
                .swiper {
                    position: relative;
                    width: 100%;
                    margin-top: 50px;
                    align-items: center;
                    background: black;
                }

                .swiper h1{
                    text-align: center;
                    color: #fff;
                    padding-bottom: 10px;
                }

                .swiper h1::after{
                    content: '';
                    background: #007bff;
                    display: block;
                    height: 3px;
                    width: 170px;
                    margin: 20px auto 5px;
                }

                .swiper-slide {
                    background-position: center;
                    background-size: cover;
                    width: 300px;
            
                }

                .swiper-slide h3{
                    margin-top: 5px;
                    color: #fff;
                    text-align: center;
                    background: #007bff;
                }

                .swiper-slide img {
                    display: block;
                    width: 100%;
                }

            </style>
            <!-- Initialize Swiper -->
            <script>
                var swiper = new Swiper(".mySwiper", {
                    effect: "coverflow",
                    grabCursor: true,
                    centeredSlides: true,
                    slidesPerView: "auto",
                    coverflowEffect: {
                        rotate: 50,
                        stretch: 0,
                        depth: 100,
                        modifier: 1,
                        slideShadows: true,
                    },
                    pagination: {
                        el: ".swiper-pagination",
                    },
                });
            </script>
        </section>
        <footer>
            <div class="footer">
                <center>
                    <span class="credit">Created By Ajay Maru & Atrey Zala</a> | </span>
                    <span class="far fa-copyright"></span><span> 2022 All rights reserved.</span>
                </center>
            </div>
        </footer>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="js/smooth-scril.js"></script>
        <script>
            var scroll = new SmoothScroll('a[href*="#"]');
        </script>
        
    </body>
</html>
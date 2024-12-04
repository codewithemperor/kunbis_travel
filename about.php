<html>
    <head>
        <?php
            $pageTitle = "Kunbis - About Us";
            include './includes/header.php';
        ?>
        <!-- Swipper -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    </head>
    <body>
        
        <!-- Start Navbar  -->
        <?php include './includes/nav.php'?>
        <!-- End Navbar -->

        <!-- Hero Starts -->
        <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_4.jpg');">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-center">
                    <div class="col-md-9 pt-5 text-center">
                        <p class="breadcrumbs">
                            <span class="me-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> 
                            <span>About us <i class="fa fa-chevron-right"></i></span>
                        </p>
                        <h1 class="mb-0 bread">About Us</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero Ends -->

        <!-- Start About us -->
        <?php include './includes/about-us.php'?>
        <!-- End About us -->

        <!-- Real Estate About Section -->
        <div class="bg-light">
            <?php include './includes/travel-about-section.php'?>
        </div>
        <!-- Real Estate Section -->

        <!-- Our services -->
        <?php include './includes/additional-service.php'?>
        <!-- End our services -->

        <!-- Start FAQ -->
        <div class="bg-light" style="padding: 7em 0;">
            <?php include './includes/faq.php'?>
        </div>
        <!-- Ends FAQ -->

        <!-- Start Our Staff -->        
        <?php include './includes/team.php'?>
        <!-- End Our Staff -->

        <!-- Start Newsletter Section -->
        <?php include './includes/newsletter.php'?>
        <!-- End Newsletter Section -->

        <!-- Start Footer Section -->
        <?php include './includes/footer.php'?>
        <!-- End Footer Section -->         
         
        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script>
             var swiper = new Swiper(".flyers", {
                effect: "cube",
                grabCursor: true,
                loop: true,
                autoplay: {
                    delay: 1500,
                    disableOnInteraction: true,
                  },
                cubeEffect: {
                  shadow: true,
                  slideShadows: true,
                  shadowOffset: 20,
                  shadowScale: 0.94,
                },
                pagination: {
                  el: ".swiper-pagination",
                },
              });


              $(document).ready(function () {
                $(".categorySlider").each(function () {
                    const translationFactor = 0.1,  // Controls the vertical translation effect
                          rotationFactor = 0.01;    // Controls the rotation effect

                    // Initialize Swiper
                    new Swiper(".categorySlider", {
                        slidesPerView: 4,
                        spaceBetween: 60,
                        centeredSlides: true,
                        loop: true,
                        grabCursor: true,
                        // autoplay: {
                        //     delay: 3000,  // Adjust autoplay speed (milliseconds)
                        //     disableOnInteraction: false,  // Keep autoplay active after user interaction
                        // },
                        breakpoints: {
                            300: { slidesPerView: 1, spaceBetween: 30 },
                            600: { slidesPerView: 2, spaceBetween: 30 },
                            768: { slidesPerView: 3, spaceBetween: 30 },
                            1024: { slidesPerView: 4, spaceBetween: 40 },
                            1280: { slidesPerView: 4, spaceBetween: 60 },
                        },
                        pagination: {
                          el: ".swiper-pagination",
                        },
                    });

                    // Animation function to adjust translation and rotation
                    (function animateCards() {
                        requestAnimationFrame(animateCards);  // Recursive call for smooth animation

                        document.querySelectorAll(".single").forEach((element) => {
                            const rect = element.getBoundingClientRect(),
                                  centerOffset = 0.5 * window.innerWidth - (rect.x + 0.5 * rect.width),
                                  verticalShift = Math.max(Math.abs(centerOffset) * translationFactor - rect.width * translationFactor, 0),
                                  originPoint = centerOffset < 0 ? "left top" : "right top";

                            // Apply transform styles for translation and rotation
                            element.style.transform = `translate(0, ${verticalShift}px) rotate(${centerOffset * -rotationFactor}deg)`;
                            element.style.transformOrigin = originPoint;
                        });
                    })();
                });
            });

        </script>
    </body>
</html>
<html>
    <head>
        <?php
            $pageTitle = "Kunbis - Tour & Vacation";
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
        <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-center">
                    <div class="col-md-9 pt-5 text-center">
                        <p class="breadcrumbs">
                            <span class="me-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> 
                            <span class="me-2"><a href="tour.php">Tour <i class="fa fa-chevron-right"></i></a></span> 
                            <span>Tour Details <i class="fa fa-chevron-right"></i></span>
                        </p>
                        <h1 class="mb-0 bread">Tour Details</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero Ends -->

        <!-- Tour Listing -->
        <section class="ftco-section px-3 px-md-5">
            <div class="d-flex gap-3">
                <div class="col-md-8 col-12">
                    <div class="tour-page-single">

                        <div class="slider-area">
                            <div class="swiper slider-1 mb-4" id="tourSlider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img"><img src="images/tour/tour_inner_1.jpg" alt="Image" /></div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img"><img src="images/tour/tour_inner_2.jpg" alt="Image" /></div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img"><img src="images/tour/tour_inner_3.jpg" alt="Image" /></div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img"><img src="images/tour/tour_inner_1.jpg" alt="Image" /></div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img"><img src="images/tour/tour_inner_2.jpg" alt="Image" /></div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img"><img src="images/tour/tour_inner_3.jpg" alt="Image" /></div>
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                            <div thumbsSlider="" class="swiper swiper-2" id="thumbSlider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img"><img src="images/tour/tour_inner_1.jpg" alt="Image" /></div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img"><img src="images/tour/tour_inner_2.jpg" alt="Image" /></div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img"><img src="images/tour/tour_inner_3.jpg" alt="Image" /></div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img"><img src="images/tour/tour_inner_1.jpg" alt="Image" /></div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img"><img src="images/tour/tour_inner_2.jpg" alt="Image" /></div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img"><img src="images/tour/tour_inner_3.jpg" alt="Image" /></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="page-content">
                            <div class="page-meta mb-5">
                                <a class="page-tag" href="tour.html">Featured</a> <span class="ratting"><i class="fa-sharp fa-solid fa-star"></i><span>4.8</span></span>
                            </div>

                            <h2 class="box-title">Explore the Beauty of Maldives and enjoy</h2>
                            <div class="mb-5">
                                <p class="box-text mb-3">
                                    voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Dolorem ipsum quia dolor sit amet,
                                    consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse
                                    quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur
                                </p>
                                <p class="box-text mb-3">
                                    voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Dolorem ipsum quia dolor sit amet,
                                    consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse
                                    quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur
                                </p>

                            </div>
                            
                            <h2 class="box-title">Highlights</h2>
                            <div class="mb-5">
                                <p class="box-text mb-3">
                                    voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Dolorem ipsum quia dolor sit amet,
                                    consectetur, adipisci.
                                </p>
                                <div class="checklist">
                                    <ul>
                                        <li>Visit most popular location of Maldives</li>
                                        <li>Buffet Breakfast for all traveler with good quality.</li>
                                        <li>Expert guide always guide you and give informations.</li>
                                        <li>Best Hotel for all also great food.</li>
                                        <li>Helping all traveler for Money Exchange.</li>
                                        <li>Buffet Breakfast for all traveler with good quality..</li>
                                        <li>Buffet Breakfast for all traveler with good quality.</li>
                                    </ul>
                                </div>
                            </div>

                            <h2 class="box-title">Basic Information</h2>
                            <div class="mb-5">
                                <p class="box-text mb-3">
                                    voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Dolorem ipsum quia dolor sit amet,
                                    consectetur, adipisci.
                                </p>
                                <div class="destination-checklist mb-50">
                                    <div class="checklist style2">
                                        <ul>
                                            <li>Destination</li>
                                            <li>Departure</li>
                                            <li>Language</li>
                                            <li>Reture Date</li>
                                            <li>Departure Date</li>
                                            <li>No. of Guide</li>
                                        </ul>
                                    </div>
                                    <div class="checklist style2">
                                        <ul>
                                            <li>Netherland</li>
                                            <li>Singapore Airport, Singapore</li>
                                            <li>English</li>
                                            <li>August 12, 2024</li>
                                            <li>Netherland</li>
                                            <li>25 Tour Places - 2 Person</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <h2 class="box-title">Included and Excluded</h2>
                            <div class="mb-5">
                                <p class="box-text mb-35">
                                    voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Dolorem ipsum quia dolor sit amet,
                                    consectetur, adipisci.
                                </p>
                                <div class="destination-checklist">
                                    <div class="checklist style2 style4">
                                        <ul>
                                            <li>Hotel Fair</li>
                                            <li>Transportation</li>
                                            <li>Breakfast</li>
                                            <li>Sightseeing</li>
                                            <li>Travel Tax</li>
                                            <li>Seasonal Food</li>
                                        </ul>
                                    </div>
                                    <div class="checklist style5">
                                        <ul>
                                            <li>WIFI</li>
                                            <li>Swimming Pool</li>
                                            <li>GYM</li>
                                            <li>Travel Insurance</li>
                                            <li>Family Expenses</li>
                                            <li>Family Expenses</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <a href="" class="btn btn-accent p-3 w-25">Book Now</a>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-nome d-md-block">
                    <aside>
                        <a href="" class="">
                            <div class="global-img mb-3"><img src="images/flyers/kunbis (1).png" alt="image" /></div>
                        </a>

                        <a href="" class="">
                            <div class="global-img mb-3"><img src="images/flyers/kunbis (8).png" alt="image" /></div>
                        </a>

                        <a href="" class="">
                            <div class="global-img mb-3"><img src="images/flyers/kunbis (2).png" alt="image" /></div>
                        </a>

                        <a href="" class="">
                            <div class="global-img mb-3"><img src="images/flyers/kunbis (4).png" alt="image" /></div>
                        </a>
                    </aside>
                </div>
            </div>

            <div class="px-3 px-md-5 mt-4">
                <div class="text-center heading-section justify-content-center col-md-10 col-lg-7 mx-auto my-5" data-aos="fade-up" data-aos-duration="1000">
                    <h2 class="mb-1">Popular Tour</h2>
                    <!-- <span class="subheading">Enter your details and get a free counselling session with our experts so they can connect you to the right course, country, university - and even scholarships!</span> -->
                </div>

                <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-3">
                    <div class="col">
                        <div class="tour-box th-ani gsap-cursor">
                            <div class="tour-box_img global-img"><img src="images/tour/tour_box_1.jpg" alt="image" /></div>
                            <div class="tour-content">
                                <h3 class="box-title"><a href="tour-details.html">Greece Tour Package</a></h3>
                                <div class="tour-rating">
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span style="width: 100%;">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">4.8</span>(4.8 Rating)</span>
                                    </div>
                                    <a href="tour-details.html" class="woocommerce-review-link">(<span class="count">4.8</span> Rating)</a>
                                </div>
                                <h4 class="tour-box_price"><span class="currency">$980.00</span>/Person</h4>
                                <div class="tour-action">
                                    <span><i class="fa-light fa-clock"></i>7 Days</span> <a href="tour-details.php" class="th-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="tour-box th-ani gsap-cursor">
                            <div class="tour-box_img global-img"><img src="images/tour/tour_box_2.jpg" alt="image" /></div>
                            <div class="tour-content">
                                <h3 class="box-title"><a href="tour-details.html">Italy Tour package</a></h3>
                                <div class="tour-rating">
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span style="width: 100%;">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">4.8</span>(4.8 Rating)</span>
                                    </div>
                                    <a href="tour-details.html" class="woocommerce-review-link">(<span class="count">4.8</span> Rating)</a>
                                </div>
                                <h4 class="tour-box_price"><span class="currency">$980.00</span>/Person</h4>
                                <div class="tour-action">
                                    <span><i class="fa-light fa-clock"></i>7 Days</span> <a href="tour-details.php" class="th-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="tour-box th-ani gsap-cursor">
                            <div class="tour-box_img global-img"><img src="images/tour/tour_box_3.jpg" alt="image" /></div>
                            <div class="tour-content">
                                <h3 class="box-title"><a href="tour-details.html">Dubai Tour Package</a></h3>
                                <div class="tour-rating">
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span style="width: 100%;">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">4.8</span>(4.8 Rating)</span>
                                    </div>
                                    <a href="tour-details.html" class="woocommerce-review-link">(<span class="count">4.8</span> Rating)</a>
                                </div>
                                <h4 class="tour-box_price"><span class="currency">$980.00</span>/Person</h4>
                                <div class="tour-action">
                                    <span><i class="fa-light fa-clock"></i>7 Days</span> <a href="tour-details.php" class="th-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="tour-box th-ani gsap-cursor">
                            <div class="tour-box_img global-img"><img src="images/tour/tour_box_4.jpg" alt="image" /></div>
                            <div class="tour-content">
                                <h3 class="box-title"><a href="tour-details.html">Switzerland</a></h3>
                                <div class="tour-rating">
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span style="width: 100%;">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">4.8</span>(4.8 Rating)</span>
                                    </div>
                                    <a href="tour-details.html" class="woocommerce-review-link">(<span class="count">4.8</span> Rating)</a>
                                </div>
                                <h4 class="tour-box_price"><span class="currency">$980.00</span>/Person</h4>
                                <div class="tour-action">
                                    <span><i class="fa-light fa-clock"></i>7 Days</span> <a href="tour-details.php" class="th-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="tour-box th-ani gsap-cursor">
                            <div class="tour-box_img global-img"><img src="images/tour/tour_box_1.jpg" alt="image" /></div>
                            <div class="tour-content">
                                <h3 class="box-title"><a href="tour-details.html">Greece Tour Package</a></h3>
                                <div class="tour-rating">
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span style="width: 100%;">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">4.8</span>(4.8 Rating)</span>
                                    </div>
                                    <a href="tour-details.html" class="woocommerce-review-link">(<span class="count">4.8</span> Rating)</a>
                                </div>
                                <h4 class="tour-box_price"><span class="currency">$980.00</span>/Person</h4>
                                <div class="tour-action">
                                    <span><i class="fa-light fa-clock"></i>7 Days</span> <a href="tour-details.php" class="th-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="tour-box th-ani gsap-cursor">
                            <div class="tour-box_img global-img"><img src="images/tour/tour_box_2.jpg" alt="image" /></div>
                            <div class="tour-content">
                                <h3 class="box-title"><a href="tour-details.html">Italy Tour package</a></h3>
                                <div class="tour-rating">
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span style="width: 100%;">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">4.8</span>(4.8 Rating)</span>
                                    </div>
                                    <a href="tour-details.html" class="woocommerce-review-link">(<span class="count">4.8</span> Rating)</a>
                                </div>
                                <h4 class="tour-box_price"><span class="currency">$980.00</span>/Person</h4>
                                <div class="tour-action">
                                    <span><i class="fa-light fa-clock"></i>7 Days</span> <a href="tour-details.php" class="th-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <nav aria-label="Page navigation example" class="mt-5">
              <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                  <a class="page-link">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>


        </section>
        <!-- Tour Listing end-->

      

   

        <!-- Start Our Counselling -->  
        <div class="bg-light p-3 p-md-5">
            <?php include './includes/free-counselling-form.php'?>
            <div class="pb-3 pb-md-5"></div>
        </div>      
        <!-- End Free Counselling -->

        <!-- Start Newsletter Section -->
        <?php include './includes/newsletter.php'?>
        <!-- End Newsletter Section -->

        <!-- Start Footer Section -->
        <?php include './includes/footer.php'?>
        <!-- End Footer Section --> 
        
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script>
          var thumbSwiper = new Swiper("#thumbSlider", {
            loop: true,
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
            autoplay: {
                delay: 1500,
                disableOnInteraction: true,
              },
          });

          var mainSwiper = new Swiper("#tourSlider", {
            loop: true,
            spaceBetween: 10,
            slidesPerView: 1,
            centeredSlides: true,
            autoplay: {
                delay: 1500,
                disableOnInteraction: true,
            },
            navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
            },
            thumbs: {
              swiper: thumbSwiper,
            },
          });
        </script>


    </body>
</html>
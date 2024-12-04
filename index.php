<!DOCTYPE html>
<html lang="en">

<head>
    <?php require './includes/header.php' ?>
</head>
<body>


    <!-- Start Navbar  -->
    <?php require './includes/nav.php' ?>
    <!-- End Navbar -->

    <section class="slider-hero">
        <div class="overlay"></div>
        <div class="hero-slider">

             <div class="item">
                <div class="work">
                    <div class="img d-flex align-items-center js-fullheight" style="background-image: url(images/bg_3.jpg);">
                        <div class="container-xl">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-xl-6">
                                    <div class="text text-center" data-aos="fade-up" data-aos-duration="1000">
                                        <h2>Tailored Tours & Vacations</h2>
                                        <p class="mb-5">Plan the vacation of your dreams. From exotic getaways to cultural tours, we craft unforgettable experiences for every traveler.</p>
                                        <p><a href="tour.php" class="btn btn-accent px-5 py-3">Plan Your Trip <span class="ion ion-ios-arrow-round-forward"></span></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="work">
                    <div class="img d-flex align-items-center js-fullheight" style="background-image: url(images/bg_1.jpg);">
                        <div class="container-xl">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-xl-6">
                                    <div class="text text-center" data-aos="fade-up" data-aos-duration="1000">
                                        <h2>Study Abroad Made Simple</h2>
                                        <p class="mb-5">Unlock your academic dreams with our tailored study abroad services. From university applications to visa guidance, we simplify the process for you.</p>
                                        <p><a href="index.php#studyAbroad" class="btn btn-accent px-5 py-3">Learn More <span class="ion ion-ios-arrow-round-forward"></span></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="work">
                    <div class="img d-flex align-items-center js-fullheight" style="background-image: url(images/bg_2.jpg);">
                        <div class="container-xl">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-xl-6">
                                    <div class="text text-center" data-aos="fade-up" data-aos-duration="1000">
                                        <h2>Visa Services You Can Trust</h2>
                                        <p class="mb-5">We specialize in hassle-free visa applications. Whether for studies, work, or tourism, our experts ensure your documents are complete and submission-ready.</p>
                                        <p><a href="visa.php" class="btn btn-accent px-5 py-3">Apply Now <span class="ion ion-ios-arrow-round-forward"></span></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="work">
                    <div class="img d-flex align-items-center js-fullheight" style="background-image: url(images/bg_4.jpg);">
                        <div class="container-xl">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-xl-6">
                                    <div class="text text-center" data-aos="fade-up" data-aos-duration="1000">
                                        <h2>Flight Itinerary & Reservations</h2>
                                        <p class="mb-5">Secure your travel plans with ease. From flight reservations to itineraries, we ensure your journeys are smooth and stress-free.</p>
                                        <p><a href="flight-itinerary.php" class="btn btn-accent px-5 py-3">Book Now <span class="ion ion-ios-arrow-round-forward"></span></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- Popular Destination -->
    <section class="ftco-section">
        <div class="px-3 px-md-5">
            <div class="text-center heading-section justify-content-center col-md-8 col-lg-7 mx-auto mb-5" data-aos="fade-up" data-aos-duration="1000">
                <h2 class="mb-1">Popular Tour Destination</h2>
                <span class="subheading">Explore top destinations that attract students worldwide for quality education and global opportunities.</span>
            </div>

            <div class="slider-area tour-slider">
                <div class="swiper th-slider  slider-drag-wrap"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1300":{"slidesPerView":"4"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="tour-box th-ani gsap-cursor">
                                <div class="tour-box_img global-img"><img src="images/tour/tour_box_1.jpg" alt="image" /></div>
                                <div class="tour-content">
                                    <h3 class="box-title"><a href="tour-details.php">Greece Tour Package</a></h3>
                                    <div class="tour-rating">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                            <span style="width: 100%;">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">4.8</span>(4.8 Rating)</span>
                                        </div>
                                        <a href="tour-details.php" class="woocommerce-review-link">(<span class="count">4.8</span> Rating)</a>
                                    </div>
                                    <h4 class="tour-box_price"><span class="currency">$980.00</span>/Person</h4>
                                    <div class="tour-action">
                                        <span><i class="fa-light fa-clock"></i>7 Days</span> <a href="tour-details.php" class="th-btn">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tour-box th-ani gsap-cursor">
                                <div class="tour-box_img global-img"><img src="images/tour/tour_box_2.jpg" alt="image" /></div>
                                <div class="tour-content">
                                    <h3 class="box-title"><a href="tour-details.php">Italy Tour package</a></h3>
                                    <div class="tour-rating">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                            <span style="width: 100%;">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">4.8</span>(4.8 Rating)</span>
                                        </div>
                                        <a href="tour-details.php" class="woocommerce-review-link">(<span class="count">4.8</span> Rating)</a>
                                    </div>
                                    <h4 class="tour-box_price"><span class="currency">$980.00</span>/Person</h4>
                                    <div class="tour-action">
                                        <span><i class="fa-light fa-clock"></i>7 Days</span> <a href="tour-details.php" class="th-btn">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tour-box th-ani gsap-cursor">
                                <div class="tour-box_img global-img"><img src="images/tour/tour_box_3.jpg" alt="image" /></div>
                                <div class="tour-content">
                                    <h3 class="box-title"><a href="tour-details.php">Dubai Tour Package</a></h3>
                                    <div class="tour-rating">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                            <span style="width: 100%;">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">4.8</span>(4.8 Rating)</span>
                                        </div>
                                        <a href="tour-details.php" class="woocommerce-review-link">(<span class="count">4.8</span> Rating)</a>
                                    </div>
                                    <h4 class="tour-box_price"><span class="currency">$980.00</span>/Person</h4>
                                    <div class="tour-action">
                                        <span><i class="fa-light fa-clock"></i>7 Days</span> <a href="tour-details.php" class="th-btn">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tour-box th-ani gsap-cursor">
                                <div class="tour-box_img global-img"><img src="images/tour/tour_box_4.jpg" alt="image" /></div>
                                <div class="tour-content">
                                    <h3 class="box-title"><a href="tour-details.php">Switzerland</a></h3>
                                    <div class="tour-rating">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                            <span style="width: 100%;">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">4.8</span>(4.8 Rating)</span>
                                        </div>
                                        <a href="tour-details.php" class="woocommerce-review-link">(<span class="count">4.8</span> Rating)</a>
                                    </div>
                                    <h4 class="tour-box_price"><span class="currency">$980.00</span>/Person</h4>
                                    <div class="tour-action">
                                        <span><i class="fa-light fa-clock"></i>7 Days</span> <a href="tour-details.php" class="th-btn">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tour-box th-ani gsap-cursor">
                                <div class="tour-box_img global-img"><img src="images/tour/tour_box_1.jpg" alt="image" /></div>
                                <div class="tour-content">
                                    <h3 class="box-title"><a href="tour-details.php">Greece Tour Package</a></h3>
                                    <div class="tour-rating">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                            <span style="width: 100%;">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">4.8</span>(4.8 Rating)</span>
                                        </div>
                                        <a href="tour-details.php" class="woocommerce-review-link">(<span class="count">4.8</span> Rating)</a>
                                    </div>
                                    <h4 class="tour-box_price"><span class="currency">$980.00</span>/Person</h4>
                                    <div class="tour-action">
                                        <span><i class="fa-light fa-clock"></i>7 Days</span> <a href="tour-details.php" class="th-btn">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tour-box th-ani gsap-cursor">
                                <div class="tour-box_img global-img"><img src="images/tour/tour_box_2.jpg" alt="image" /></div>
                                <div class="tour-content">
                                    <h3 class="box-title"><a href="tour-details.php">Italy Tour package</a></h3>
                                    <div class="tour-rating">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                            <span style="width: 100%;">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">4.8</span>(4.8 Rating)</span>
                                        </div>
                                        <a href="tour-details.php" class="woocommerce-review-link">(<span class="count">4.8</span> Rating)</a>
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
            </div>
            <div class="slider-pagination swiper-pagination mt-4 mx-auto"></div>

    </section>
    <!-- End Popular Destination -->

    <!-- Six Destination -->
    <section class="six-destination background2 p-3 p-md-5 bg-light" id="studyAbroad">
        <div class="text-center heading-section justify-content-center col-md-10 col-lg-7 mx-auto my-5" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="mb-1">Six Popular Study Destination</h2>
            <span class="subheading">Explore top destinations that attract students worldwide for quality education and global opportunities.</span>
        </div>
        
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 my-5 g-4">
            <div class="col position-relative" data-aos="fade-up" data-aos-duration="500" >
                <div class="card h-100 card-0">
                    <div class="card-body text-center p-0">
                        <img src="images/destination/canada.jpg" class="card-img-top" alt="...">
                        <h3 class="position-absolute top-50 start-50 translate-middle text-white">CANADA</h3>
                    </div>
                </div>
                <div class="card card-1 h-100 position-absolute top-0 start-0">
                    <div class="card-body p-4 d-flex flex-column justify-content-center">
                        <h5 class="card-title">Study in Canada</h5>
                        <p class="card-text">Canada is renowned for its high-quality education and welcoming
                            multicultural society. With a reputation for safety, innovation, and stunning scenery, it's
                            a top choice for those seeking a well-rounded study abroad experience.</p>
                        <a href="study-in-canada.php" class="btn btn-accent w-100 mt-lg-3">Discover more</a>
                    </div>
                </div>
            </div>

            <div class="col position-relative" data-aos="fade-up" data-aos-duration="500" >
                <div class="card h-100 card-0">
                    <div class="card-body text-center p-0">
                        <img src="images/destination/london.jpg" class="card-img-top" alt="...">
                        <h3 class="position-absolute top-50 start-50 translate-middle text-white">UNITED KINGDOM</h3>
                    </div>
                </div>
                <div class="card card-1 h-100 position-absolute top-0 start-0">
                    <div class="card-body p-4 d-flex flex-column justify-content-center">
                        <h5 class="card-title">Study in United Kingdom</h5>
                        <p class="card-text">The United Kingdom is home to some of the world's finest and oldest
                            universities and colleges. Experience a tradition of academic excellence and research
                            innovation, with access to top-quality education that shapes future leaders across diverse
                            fields.</p>
                        <a href="study-in-uk.php" class="btn btn-accent w-100 mt-lg-3">Discover more</a>
                    </div>
                </div>
            </div>

            <div class="col position-relative" data-aos="fade-up" data-aos-duration="500" >
                <div class="card h-100 card-0">
                    <div class="card-body text-center p-0">
                        <img src="images/destination/united-states.jpg" class="card-img-top" alt="...">
                        <h3 class="position-absolute top-50 start-50 translate-middle text-white">UNITED STATES</h3>
                    </div>
                </div>
                <div class="card card-1 h-100 position-absolute top-0 start-0">
                    <div class="card-body p-4 d-flex flex-column justify-content-center">
                        <h5 class="card-title">Study in United States</h5>
                        <p class="card-text">Boasting 33 of the world’s top 100 universities, as well as being home to
                            the financial, technology, aerospace, healthcare, and entertainment hubs of the world, the
                            United States is a land of educational and career opportunities for international students.
                        </p>
                        <a href="study-in-usa.php" class="btn btn-accent w-100 mt-lg-3">Discover more</a>
                    </div>
                </div>
            </div>

            <div class="col position-relative" data-aos="fade-up" data-aos-duration="500" >
                <div class="card h-100 card-0">
                    <div class="card-body text-center p-0">
                        <img src="images/destination/australia.jpg" class="card-img-top" alt="...">
                        <h3 class="position-absolute top-50 start-50 translate-middle text-white">AUSTRALIA</h3>
                    </div>
                </div>
                <div class="card card-1 h-100 position-absolute top-0 start-0">
                    <div class="card-body p-4 d-flex flex-column justify-content-center">
                        <h5 class="card-title">Study in Australia</h5>
                        <p class="card-text">Uncover a world of opportunities in the land down under! With over 1,100
                            institutions and 22,000 courses to choose from, Australia offers a world-class education and
                            an outstanding quality of life.</p>
                        <a href="study-in-australia.php" class="btn btn-accent w-100 mt-lg-3">Discover more</a>
                    </div>
                </div>
            </div>

            <div class="col position-relative" data-aos="fade-up" data-aos-duration="500" >
                <div class="card h-100 card-0">
                    <div class="card-body text-center p-0">
                        <img src="images/destination/new-zealand.jpg" class="card-img-top" alt="...">
                        <h3 class="position-absolute top-50 start-50 translate-middle text-white">NEW ZEALAND</h3>
                    </div>
                </div>
                <div class="card card-1 h-100 position-absolute top-0 start-0">
                    <div class="card-body p-4 d-flex flex-column justify-content-center">
                        <h5 class="card-title">Study in New Zealand</h5>
                        <p class="card-text">Renowned as one of the world's safest nations, New Zealand is a popular
                            choice among international students. It offers a world-class education system, abundant
                            research opportunities, breathtaking natural beauty, and unparalleled outdoor experiences.
                        </p>
                        <a href="study-in-newZealand.php" class="btn btn-accent w-100 mt-lg-3">Discover more</a>
                    </div>
                </div>
            </div>

            <div class="col position-relative" data-aos="fade-up" data-aos-duration="500" >
                <div class="card h-100 card-0">
                    <div class="card-body text-center p-0">
                        <img src="images/destination/ireland.jpg" class="card-img-top" alt="...">
                        <h3 class="position-absolute top-50 start-50 translate-middle text-white">EUROPE</h3>
                    </div>
                </div>
                <div class="card card-1 h-100 position-absolute top-0 start-0">
                    <div class="card-body p-4 d-flex flex-column justify-content-center">
                        <h5 class="card-title">Study in Europe</h5>
                        <p class="card-text">Europe is home to some of the world’s oldest and most prestigious
                            universities, offering students a wide range of academic opportunities in diverse cultural
                            settings. Whether you’re interested in history, science, business, or the arts, studying in
                            Europe provides a rich educational experience alongside vibrant cultures and languages.</p>
                        <a href="study-in-europe.php" class="btn btn-accent w-100 mt-lg-3">Discover more</a>

                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Six Destination ends -->

    <!-- Start About us -->
    <?php include './includes/about-us.php'?>
    <!-- End About us -->

    <!-- Start FAQ -->
    <div class="bg-light" style="padding: 7em 0;">
        <?php include './includes/faq.php'?>
    </div>
    <!-- Ends FAQ -->

    <!-- Start Our Staff -->       
    <?php include './includes/team.php'?>
    <!-- End Our Staff -->

    <!-- Start Student Counselling -->
    <section class="p-3 py-5 p-md-5 ftco-section bg-light">
        <?php include './includes/free-counselling-form.php'; ?>
        <div class="mb-5"></div>
    </section>
    <!-- End Student Counselling -->

    <!-- Start Newsletter Section -->
    <?php include './includes/newsletter.php'?>
    <!-- End Newsletter Section -->

    <!-- Start Footer -->
    <?php require './includes/footer.php' ?>
    <!-- End Footer -->
    



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

          
    </script>
    <script>
        window.onscroll = function () {
            const element = document.querySelector('.navbar');
            const scrollPosition = window.scrollY; // Get the scroll position on the Y-axis

            if (scrollPosition > 100) { // Adjust 100px to the point where you want to trigger the class
                element.classList.remove('position-absolute');
                element.classList.add('fixed-top');

            } else {
                element.classList.add('position-absolute');
                element.classList.remove('fixed-top');
            }
        };
        $(".th-slider").each(function () {
          var $slider = $(this),
              $prevBtn = $slider.find(".slider-prev"),
              $nextBtn = $slider.find(".slider-next"),
              $paginationEl = $(".slider-pagination");

          var sliderSettings = {
            slidesPerView: 1,
            spaceBetween: 24,
            loop: true,
            speed: 1000,
            autoplay: {
              delay: 3000,
              disableOnInteraction: false
            },
            navigation: {
              nextEl: $nextBtn.get(0),
              prevEl: $prevBtn.get(0)
            },
            pagination: {
              el: $paginationEl.get(0),
              type: 'fraction', // Can also be 'fraction' or 'progressbar' depending on preference
              clickable: true, // Ensures the bullets are clickable
              renderBullet: function (index, className) {
                return `<span class="${className}">${index + 1}</span>`;
              }
            },
            breakpoints: {
              0: { slidesPerView: 1 },
              576: { slidesPerView: 1 },
              768: { slidesPerView: 2 },
              992: { slidesPerView: 2 },
              1200: { slidesPerView: 3 },
              1300: { slidesPerView: 4 }
            }
          };

          new Swiper($slider[0], sliderSettings);
        });


    </script>
</body>

</html>
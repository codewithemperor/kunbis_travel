<!DOCTYPE html>
<html lang="en">
    
    <head>
        <?php 
            $pageTitle = "Kunbis - Tour & Vacation";
            require './includes/header.php' 
        ?>
    </head>
    
    <body>
        
        <!-- Start Navbar  -->
        <?php require './includes/nav.php' ?>
        <!-- End Navbar -->

        <!-- Banner -->
        <div class="hero-wrap two bg-dark d-flex align-items-center" style="background-image: url('images/bg_4.jpg');">
            <div class="overlay"></div>
            <div class="container py-5">
                <p class="h1 text-light display-4 fw-bold">Plan Your Perfect Vacation Today</p>
                <p class="text-white mb-0">
                    Explore amazing destinations worldwide with our hassle-free tour packages. 
                    Book your trip now and enjoy personalized itineraries, affordable travel plans, and unforgettable experiences. 
                </p>
            </div>
        </div>
        <!-- Banner ends -->

        <!-- Tour & Vacation Form -->
        <section class="tour-vacation-service bg-white py-3 py-md-5 bg-primary"> 
            <form action="" class="contact-form-area">
                <div class="container my-3 px-4 px-lg-0">

                    <!-- Traveler Details -->
                    <div class="p-4 align-items-center rounded-3 border shadow-lg" id="travelerDetails">
                        <div class="col p-1 pb-4 p-lg-5 py-lg-4">
                            <h1 class="title1 display-5">Traveler Details</h1>
                            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 gy-4 mt-3">

                                <div class="col-lg-6">
                                    <label for="tFirstName" class="form-label fw-bold fs-6">First Name*</label>
                                    <input type="text" class="form-control py-3" name="tFirstName" placeholder="First Name" required>
                                </div>

                                <div class="col-lg-6">
                                    <label for="tLastName" class="form-label fw-bold fs-6">Last Name*</label>
                                    <input type="text" class="form-control py-3" name="tLastName" placeholder="Last Name" required>
                                </div>
                                
                                <div class="col">
                                    <label for="deliveryEmail" class="form-label fw-bold fs-6">Email*</label>
                                    <input type="email" class="form-control py-3" name="deliveryEmail" placeholder="example@mail.com" required>
                                </div>

                                <div class="col">
                                    <label for="phoneNumber" class="form-label fw-bold fs-6">Phone Number*</label>
                                    <input type="number" class="form-control py-3" name="phoneNumber" placeholder="country code + Phone Number" required>
                                </div>                      

                                <div class="col">
                                    <label for="departureDate" class="form-label fw-bold fs-6">Departure Date*</label>
                                    <input type="date" class="form-control py-3" name="departureDate" required>
                                </div>

                                <div class="col">
                                    <label for="destination" class="form-label fw-bold fs-6">Destination*</label>
                                    <select name="destination" class="form-select py-3" required>
                                        <optgroup label="Popular Destinations">
                                            <option value="Paris">Paris</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Dubai">Dubai</option>
                                            <option value="New York">New York</option>
                                            <option value="Tokyo">Tokyo</option>
                                        </optgroup>
                                    </select>
                                </div>

                                <div class="col">
                                    <label for="groupSize" class="form-label fw-bold fs-6">Group Size*</label>
                                    <input type="number" class="form-control py-3" name="groupSize" placeholder="Number of travelers" required>
                                </div>

                                <div class="col">
                                    <label for="packageType" class="form-label fw-bold fs-6">Tour Package Type*</label>
                                    <select name="packageType" id="packageType" class="form-select py-3" required>
                                        <option value="" disabled selected>Select package...</option>
                                        <option value="Luxury">Luxury</option>
                                        <option value="Budget">Budget</option>
                                        <option value="Adventure">Adventure</option>
                                        <option value="Family">Family</option>
                                        <option value="Honeymoon">Honeymoon</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Traveler Details ends-->

                    <!-- Payment Summary -->
                    <div class="my-5 bg-black text-light p-4 py-5 p-md-5 d-flex flex-column justify-content-center align-items-center text-center order-summary">
                        <p class="display-3 title">Order Summary:</p>
                        <!-- Tour Package Price -->
                        <div class="price d-flex align-items-center justify-content-between col-12 col-md-11 p-2 py-3" data-label="Tour Package">
                            <p class="fs-5">Tour Package</p>
                            <p class="s-color fs-4">₦150,000.00</p>
                        </div>
                        <!-- Total Payment -->
                        <div class="price total-price d-flex align-items-center justify-content-between col-12 col-md-11 p-2 py-3 mt-3">
                            <p class="fs-4">Total Payment</p>
                            <p class="s-color fs-3 fw-semibold">₦150,000.00</p>
                        </div>
                        <input type="submit" value="Pay Now!" class="btn btn-primary mt-5 px-5 py-3 col-lg-5 col-7 col-md-6">
                    </div>

                </div>
            </form>
        </section>
        <!-- Tour & Vacation Form end-->

        <!-- Start Newsletter Section -->
        <?php include './includes/newsletter.php'?>
        <!-- End Newsletter Section -->

        <!-- Start Footer Section -->
        <?php include './includes/footer.php'?>
        <!-- End Footer Section -->     

    </body>
    
</html>

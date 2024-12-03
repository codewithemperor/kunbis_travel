<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
            $pageTitle = "Kunbis - Hotel Reservation";
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
                <p class="h1 text-light display-4 fw-bold">Fill details - Pay - Get Itinerary Via Email</p>
                <p class="text-white mb-0">Embassy recommends not to purchase tickets until visa is approved. So don't risk your money, time and effort by buying actual tickets. We provide you confirmed flight reservation for visa, Hotel Reservation and travel medical insurance that are perfect for visa application. Once you get your visa, make your own travel plans!</p>
            </div>
        </div>
        <!-- Banner ends -->


       
        <!-- Consultation service  -->
        <section class="consultation-service bg-white py-3 py-md-5 bg-primary"> 
            <form action="" class="contact-form-area">
                <div class="container my-3 px-4 px-lg-0">

                    <!-- Traveller Details -->
                    <div class="p-4 align-items-center rounded-3 border shadow-lg" id="travellerDetails">
                    <div class="col p-1 pb-4 p-lg-5 py-lg-4">
                        <h1 class="title1 display-5">Traveller Details</h1>
                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 gy-4 mt-3">

                            <div class="col-lg-6">
                                <label for="tFirstName" class="form-label fw-bold fs-6">Traveler 1 First Name (Should match passport)*</label>
                                <input type="text" class="form-control py-3" name="tFirstName" placeholder="First Name" required>
                            </div>

                            <div class="col-lg-6">
                                <label for="tLastName" class="form-label fw-bold fs-6">Tourist 1 Last Name (Match with passport)*</label>
                                <input type="text" class="form-control py-3" name="tLastName" placeholder="Last Name" required>
                            </div>
                            
                            <div class="col">
                                <label for="deliveryEmail" class="form-label fw-bold fs-6">Delivery Email*</label>
                                <input type="email" class="form-control py-3" name="deliveryEmail" placeholder="example@mail.com" required>
                            </div>

                            <div class="col">
                                <label for="phoneNumber" class="form-label fw-bold fs-6">Phone Number*</label>
                                <input type="number" class="form-control py-3" name="phoneNumber" placeholder="country code + Phone Number" required>
                            </div>                      

                            <div class="col">
                                <label for="interviewDate" class="form-label fw-bold fs-6">Visa Interview Date*</label>
                                <input type="date" class="form-control py-3" name="interviewDate" required>
                            </div>

                            <div class="col">
                                <label for="destination" class="form-label fw-bold fs-6">Applying At which Embassy?*</label>
                                <select name="country-applying-to" class="form-select py-3 destination" required>
                                    <optgroup label="All Countries" class="all-countries">
                                        <!-- Countries will be populated here by JavaScript -->
                                    </optgroup>
                                </select>
                            </div>

                            <div class="col">
                                <label for="referral" class="form-label fw-bold fs-6">How Did You Hear About Us?*</label>
                                <select name="referral" id="" class="form-select py-3" required>
                                    <option value="" disabled selected>select option...</option>
                                    <option value="Search Engine">Search Engine</option>
                                    <option value="Blog Article">Blog Article</option>
                                    <option value="Social Media">Social Media</option>
                                    <option value="Ads">Ads</option>
                                    <option value="Friends">Friends</option>
                                    <option value="I'm not sure">I'm not sure</option>      
                                </select>
                            </div>
                        </div>
                    
                    </div>
                    </div>
                    <!-- Traveller Details ends-->

                    <div class="py-3"></div>
                    
                    <!-- Traveller Hotel Details -->
                    <div class="p-4 align-items-center rounded-3 border shadow-lg my-5" id="travellerHotel">
                        <div class="col p-1 pb-4 p-lg-5 py-lg-4">
                            <h1 class="title1 display-5">Tourist's Hotel Details</h1>
                            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 gy-4 mt-3">
                            
    
                                <div class="col">
                                    <label for="hotelNumber" class="form-label fw-bold fs-6">No. Of Hotels*</label>
                                    <select name="hotelNumber" id="" class="form-select py-3" required>
                                        <option value="" class="placeholder" disabled selected>select option...</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                    </select>
                                    <span class="text-danger ps-1 text-center" style="font-size: .7rem; line-height: 9px;">(Upto 3 hotels only. Additional hotels @ $10/hotel. Max stay upto 3 weeks/hotel)</span>
                                </div>

                                <div class="col">
                                    <label for="hotelCityLocation" class="form-label fw-bold fs-6">City/Location*</label>
                                    <input type="text" class="form-control py-3" name="hotelCityLocation" required>
                                </div>

                                <div class="col">
                                    <label for="hotel-check-in-date" class="form-label fw-bold fs-6">Check-in Date*</label>
                                    <input type="date" class="form-control py-3" name="hotel-check-in-date" required>
                                </div>

                                <div class="col">
                                    <label for="hotel-check-out-date" class="form-label fw-bold fs-6">Check-out Date*</label>
                                    <input type="date" class="form-control py-3" name="hotel-check-out-date" required>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Traveller Hotel Details ends-->
                </div>

                <div class="py-3"></div>
                <div class="my-5 bg-black text-light p-4 py-5 p-md-5 d-flex flex-column justify-content-center align-items-center text-center order-summary">
                    <p class="display-3 title">Order Summary:</p>
                    <!-- Flight Price -->
                    <div class="price d-flex align-items-center justify-content-between col-12 col-md-11 p-2 py-3" data-label="Hotel Reservation">
                        <p class="fs-5">Hotel Reservation</p>
                        <p class="s-color fs-4">₦20,000.00</p>
                    </div>
                    <!-- Total Payment -->
                    <div class="price total-price d-flex align-items-center justify-content-between col-12 col-md-11 p-2 py-3 mt-3">
                        <p class="fs-4">Total Payment</p>
                        <p class="s-color fs-3 fw-semibold">₦20,000.00</p>
                    </div>
                    <input type="submit" value="Pay Now!" class="btn btn-accent mt-5 px-5 py-3 col-lg-5 col-7 col-md-6">
                </div>
                

            </form>
        </section>
       
        <!-- Consultation service end-->

        

        <!-- Start Newsletter Section -->
        <?php include './includes/newsletter.php'?>
        <!-- End Newsletter Section -->

        <!-- Start Footer Section -->
        <?php include './includes/footer.php'?>
        <!-- End Footer Section -->     
    
    </body>
    
</html>

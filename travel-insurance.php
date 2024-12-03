<!DOCTYPE html>
<html lang="en">
    
    <head>
        <?php 
            $pageTitle = "Kunbis - Travel Insurance";
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

                    <!-- Traveller Insurance Details -->
                    <div class="p-4 align-items-center rounded-3 border shadow-lg my-5" id="travellerInsurance">
                        <div class="col p-1 pb-4 p-lg-5 py-lg-4">
                        <h1 class="title1 display-5">Tourist's Insurance Details</h1>
                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 gy-4 mt-3">

                            <div class="col">
                                <label for="country-travelling-from" class="form-label fw-bold fs-6">Country Traveling From *</label>
                                <select name="country-travelling-from" id="" class="form-select py-3 destination" required>
                                    <optgroup label="All Countries" class="all-countries">
                                        <!-- Countries will be populated here by JavaScript -->
                                    </optgroup>
                                </select>
                            </div>

                            <div class="col">
                                <label for="trip-date-start" class="form-label fw-bold fs-6">Date Your Trip Begins*</label>
                                <input type="date" class="form-control py-3" name="trip-date-start" required>
                            </div>

                            <div class="col">
                                <label for="trip-date-end" class="form-label fw-bold fs-6">Date Your Trip Ends*</label>
                                <input type="date" class="form-control py-3" name="trip-date-end" required>
                            </div>

                            <div class="col">
                                <label for="passportNumber" class="form-label fw-bold fs-6">Passport Number*</label>
                                <input type="number" class="form-control py-3" name="passportNumber" placeholder="International Passport Number" required>
                            </div>

                            <div class="col">
                                <label for="travelAge" class="form-label fw-bold fs-6">Traveler Age*</label>
                                <input type="number" class="form-control py-3" name="travelAge" placeholder="Traveler Age" required>
                            </div>

                            <div class="col">
                                <label for="gender" class="form-label fw-bold fs-6">Gender*</label>
                                <select name="gender" id="" class="form-select py-3" required>
                                    <option value="" class="placeholder" disabled selected>select option...</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>

                            <div class="col">
                                <label for="dob" class="form-label fw-bold fs-6">Date Of Birth <span class="fw-light" style="font-size: 90%;">(Should match passport)</span>*</label>
                                <input type="date" class="form-control py-3" name="dob" required>
                            </div>

                            <div class="col">
                                <label for="citizenshipCountry" class="form-label fw-bold fs-6">Country of Citizenship*</label>
                                <select name="citizenshipCountry" id="" class="form-select py-3 destination" required>
                                    <optgroup label="All Countries" class="all-countries">
                                        <!-- Countries will be populated here by JavaScript -->
                                    </optgroup>
                                </select>
                            </div>

                            <div class="col">
                                <label for="cityResidence" class="form-label fw-bold fs-6">City Of Residence*</label>
                                <input type="text" class="form-control py-3" name="cityResidence" required>
                            </div>

                            <div class="col-lg-8">
                                <label for="residenceAddress" class="form-label fw-bold fs-6">Residence Address*</label>
                                <input type="text" class="form-control py-3" name="residenceAddress" placeholder="Residence Address" required>
                            </div>

                            <div class="col">
                                <label for="postalCode" class="form-label fw-bold fs-6">Postal Code*</label>
                                <input type="number" class="form-control py-3" name="postalCode" placeholder="327921" required>
                            </div>

                            <div class="col">
                                <label for="BeneficiaryName" class="form-label fw-bold fs-6">Beneficiary Name (Cannot be self)*</label>
                                <input type="text" class="form-control py-3" name="BeneficiaryName" placeholder="Beneficiary Name (Cannot be self)" required>
                            </div>

                            <div class="col">
                                <label for="beneficiaryRelationship" class="form-label fw-bold fs-6">Beneficiary Relationship*</label>
                                <select name="beneficiaryRelationship" id="" class="form-select py-3" required>
                                    <option value="" class="placeholder" disabled selected>select option...</option>
                                    <option value="Spouse">Spouse</option>
                                    <option value="Child">Child</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>

                        </div>
                        
                        </div>
                    </div>
                    <!-- Traveller Insurance Details ends-->
                    
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

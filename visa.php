<!DOCTYPE html>
<html lang="en">
    
    <head>
        <?php 
            $pageTitle = "Kunbis - Visa Service";
            require './includes/header.php' 
        ?>
    </head>
    
    <body>
        
        <!-- Start Navbar  -->
        <?php require './includes/nav.php' ?>
        <!-- End Navbar -->

        <!-- Banner -->
        <div class="hero-wrap two bg-dark d-flex align-items-center" style="background-image: url('images/bg_2.jpg');">
        <div class="overlay"></div>
            <div class="container py-5">
                <p class="h1 text-light display-4 fw-bold">Start Your Visa Application Today</p>
                <p class="text-white mb-0">Begin your journey with ease by applying for your visa with us. Simply fill out the form. We make the process smooth and stress-free, so you can focus on planning your perfect trip once your visa is approved.</p>
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
                                    <label for="tFirstName" class="form-label fw-bold fs-6">Traveler First Name (Must match passport)*</label>
                                    <input type="text" class="form-control py-3" name="tFirstName" placeholder="First Name" required>
                                </div>

                                <div class="col-lg-6">
                                    <label for="tLastName" class="form-label fw-bold fs-6">Traveler Last Name (Must match passport)*</label>
                                    <input type="text" class="form-control py-3" name="tLastName" placeholder="Last Name" required>
                                </div>

                                <div class="col">
                                    <label for="deliveryEmail" class="form-label fw-bold fs-6">Delivery Email*</label>
                                    <input type="email" class="form-control py-3" name="deliveryEmail" placeholder="example@mail.com" required>
                                </div>

                                <div class="col">
                                    <label for="phoneNumber" class="form-label fw-bold fs-6">Phone Number*</label>
                                    <input type="number" class="form-control py-3" name="phoneNumber" placeholder="Country code + Phone Number" required>
                                </div>

                                <div class="col">
                                    <label for="dob" class="form-label fw-bold fs-6">Date of Birth (Must match passport)*</label>
                                    <input type="date" class="form-control py-3" name="dob" required>
                                </div>

                                <div class="col">
                                    <label for="gender" class="form-label fw-bold fs-6">Gender*</label>
                                    <select name="gender" id="" class="form-select py-3" required>
                                        <option value="" disabled selected>select option...</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>

                                <div class="col">
                                    <label for="citizenshipCountry" class="form-label fw-bold fs-6">Country of Citizenship*</label>
                                    <select name="citizenshipCountry" id="" class="form-select py-3" required>
                                        <optgroup label="All Countries" >
                                            <option value="" disabled  selected></option>
                                            <!-- Countries will be populated here by JavaScript -->
                                        </optgroup>
                                    </select>
                                </div>

                                <div class="col">
                                    <label for="residenceAddress" class="form-label fw-bold fs-6">Residence Address*</label>
                                    <input type="text" class="form-control py-3" name="residenceAddress" placeholder="Residence Address" required>
                                </div>

            
                            </div>
                        </div>
                    </div>
                    <!-- Traveller Details ends-->

                    <div class="py-3"></div>

                    <!-- Visa Application Details -->
                    <div class="p-4 align-items-center rounded-3 border shadow-lg my-5" id="visaDetails">
                        <div class="col p-1 pb-4 p-lg-5 py-lg-4">
                            <h1 class="title1 display-5">Visa Application Details</h1>
                            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 gy-4 mt-3">

                                <div class="col">
                                    <label for="visaType" class="form-label fw-bold fs-6">Visa Type*</label>
                                    <select name="visaType" id="visaType" class="form-select py-3" required>
                                        <option value="" disabled selected>Select Visa Type</option>
                                        <option value="Tourist">Tourist Visa</option>
                                        <option value="Business">Business Visa</option>
                                        <option value="Student">Student Visa</option>
                                        <option value="Work">Work Visa</option>
                                        <option value="Transit">Transit Visa</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>

                                <div class="col">
                                    <label for="destination" class="form-label fw-bold fs-6">Embassy/Consulate*</label>
                                    <select class="all-countries" name="embassy" class="form-select py-3" required>
                                        <optgroup label="All Countries" >
                                            <option value="" disabled  selected></option>
                                            <!-- Countries will be populated here by JavaScript -->
                                        </optgroup>
                                    </select>
                                </div>


                                <div class="col">
                                    <label for="visaDuration" class="form-label fw-bold fs-6">Visa Duration (Months)*</label>
                                    <input type="number" class="form-control py-3" name="visaDuration" placeholder="Visa Duration in months" required>
                                </div>

                                <div class="col">
                                    <label for="tripStart" class="form-label fw-bold fs-6">Expected Date of Arrival*</label>
                                    <input type="date" class="form-control py-3" name="tripStart" required>
                                </div>

                                <div class="col">
                                    <label for="tripEnd" class="form-label fw-bold fs-6">Expected Date of Departure*</label>
                                    <input type="date" class="form-control py-3" name="tripEnd" required>
                                </div>

                                <div class="col">
                                    <label for="referral" class="form-label fw-bold fs-6">How Did You Hear About Us?*</label>
                                    <select name="referral" class="form-select py-3" required>
                                        <option value="" disabled selected>Select option...</option>
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
                    <!-- Visa Application Details ends-->

                    
                </div>

                <div class="col-12 text-center">
                    <input type="submit" value="Submit!" class="btn btn-accent my-5 px-5 py-3 col-lg-5 col-7 col-md-6 mx-auto">

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

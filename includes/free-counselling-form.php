<div class="row align-items-center">

    <div class="text-center heading-section justify-content-center col-md-10 col-lg-7 mx-auto my-5" data-aos="fade-up" data-aos-duration="1000">
        <h2 class="mb-1">Kunbis Travel can help you</h2>
        <span class="subheading">Enter your details and get a free counselling session with our experts so they can connect you to the right course, country, university - and even scholarships!</span>
    </div>

    <!-- Content Section -->
    <div class="col-lg-8">
        <div class="content" data-aos="fade-right" >
        <form action="" method="POST" class="row contact-form-area g-3 mt-3" id="free-counseling-form"  data-aos="zoom-out-down" data-aos-duration="900">
                <div class="col-md-6"   >
                    <label for="firstName" class="form-label fw-bold fs-6">First Name*</label>
                    <input type="text" class="form-control py-3" name="firstName" required>
                </div>
                <div class="col-md-6"   >
                    <label for="surname" class="form-label fw-bold fs-6">Surname*</label>
                    <input type="text" class="form-control py-3" name="surname" required>
                </div>
                <div class="col-md-6"   >
                    <label for="number" class="form-label fw-bold fs-6">Phone Number*</label>
                    <input type="number" class="form-control py-3" name="number" required>
                </div>
                <div class="col-md-6"   >
                    <label for="email" class="form-label fw-bold fs-6">Email*</label>
                    <input type="email" class="form-control py-3" name="email" required>
                </div>
                <div class="col-md-6"   >
                    <label for="destination" class="form-label fw-bold fs-6">Preferred Destination*</label>
                    <select name="destination" id="destination" class="form-select py-3" required>
                        <optgroup label="Preferred">
                            <option value="" selected disabled></option>
                            <option value="Canada">Canada</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="United States">United States</option>
                            <option value="Australia">Australia</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Ireland">Ireland</option>
                        </optgroup>
                        <optgroup label="All Countries" class="all-countries">
                            <!-- Countries will be populated here by JavaScript -->
                        </optgroup>
                    </select>
                </div>
                <div class="col-md-6"   >
                    <label for="studyLevel" class="form-label fw-bold fs-6">Preferred Study Level*</label>
                    <select name="studyLevel" class="form-select py-3" required>
                        <option value="" disabled selected>select option...</option>
                        <option value="Undergraduate">Undergraduate</option>
                        <option value="Postgraduate">Postgraduate</option>
                        <option value="Master Degree">Master Degree</option>
                        <option value="Diploma">Diploma</option>
                        <option value="Doctorate">Doctorate</option>
                        <option value="Vocational">Vocational</option>
                    </select>
                </div>
                <div class="col-md-6"   >
                    <label for="select-destination" class="form-label fw-bold fs-6">When do you plan to study?*</label>
                    <select name="select-destination" id="select-destination" class="form-select py-3" required>
                        <option value="" disabled selected>select option...</option>
                        <!-- Populate options here -->
                    </select>
                </div>
                <div class="col-md-6"   >
                    <label for="funding" class="form-label fw-bold fs-6">How would you fund your education?*</label>
                    <select name="funding" class="form-select py-3" required>
                        <option value="" disabled selected>select option...</option>
                        <option value="Self-Funded">Self-Funded</option>
                        <option value="Parents">Parents</option>
                        <option value="Bank loan">Bank Loan</option>
                        <option value="Seeking scholarship">Seeking Scholarship</option>
                        <option value="Employer scholarship">Employer Scholarship</option>
                        <option value="Seeking Government scholarship">Seeking Government Scholarship</option>
                        <option value="Have Government scholarship">Have Government Scholarship</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="col" data-aos="fade-down-left">
                    <input type="submit" value="Make Enquiry Now!" class="btn btn-accent px-5 py-3 mt-2">
                </div>
        </div>
    </div>

    <!-- Image Section -->
    <div class="d-none d-lg-block col-lg-4" data-aos="fade-down-left" data-aos-duration="800" >
        <div class="img d-flex position-relative">
            <div class="imgone" data-aos="fade-down"  style="width: 100%;">
                <div class="simpleParallax global-img" style="overflow: hidden;">
                    <img class="thumparallax-down" src="images/about/about-img (<?php echo rand(1, 10); ?>).jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>


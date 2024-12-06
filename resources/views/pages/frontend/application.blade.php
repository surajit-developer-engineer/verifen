<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <title>Verifen</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ 'assets/images/favicon.png' }}">
    <!-- Bootstrap Css -->
    <link type="text/css" href="{{ 'assets/css/bootstrap.min.css' }}" rel="stylesheet">
    <!-- Fontawesome Css -->
    <link type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        rel="stylesheet">
    <link type="text/css" href="https://cdn.jsdelivr.net/npm/ti-icons@0.1.2/css/themify-icons.min.css" rel="stylesheet">
    <!-- Owl Carousel Css -->
    <link type="text/css" href="{{ 'assets/css/owl.carousel.min.css' }}" rel="stylesheet">
    <link type="text/css" href="{{ 'assets/css/owl.theme.default.min.css' }}" rel="stylesheet">
    <!-- Animate Css -->
    <link type="text/css" href="{{ 'assets/css/animate.css' }}" rel="stylesheet">
    <!-- Menu Css -->
    <link type="text/css" href="{{ 'assets/css/slimmenu.css' }}" rel="stylesheet">
    <!-- Custom Css -->
    <link type="text/css" href="{{ 'assets/css/style.css' }}" rel="stylesheet">
    <!-- Font Link -->
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body>

    <!-- ================ Header Section ================ -->
    @include('includes.frontend.header')


    <div class="applicationBodyOuter">
        <div class="container">
        <div class="applicationBody">
            <div class="outerHeader">                
                <h2>Business Funding Application</h2>
                <h4>Please complete our secured 1-page application.</h4>
                <p>Please complete the application below, and upload your last four months of bank statements.
                    We can have an answer for you within one hour.</p>
            </div>

            <form id="msform">
                <!-- progressbar -->
                <ul id="progressbar">
                    <li class="active" id="account"><strong>Business Information</strong></li>
                    <li id="personal"><strong>Owner Information</strong></li>
                    <li id="payment"><strong>Loan Details</strong></li>
                    <li id="confirm"><strong>Document Upload</strong></li>
                    <li id="signature"><strong>Signature</strong></li>                    
                </ul>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                </div> <br> <!-- fieldsets -->

                <fieldset>
                <div class="cat-1">
                    <input id="tab-1" type="radio" name="tabs" tabindex="1">
                    <label for="tab-1">Business Information</label>

                    <div class="question-wrap">
                        <p>Let's start by getting to know your business.</p>
                        <div class="formFlex">
                            <div class="formCol">
                                <span>Company Name</span>
                                <input type="text" placeholder="">
                            </div>
                            <div class="formCol">
                                <span>Doing Business As (DBA)</span>
                                <input type="text" placeholder="">
                            </div>
                        </div>

                        <div class="formFlex">
                            <div class="formCol">
                                <span>Date of Formation (MM/DD/YYYY)</span>
                                <input type="text" placeholder="">
                            </div>
                            <div class="formCol">
                                <span>Entity Type</span>
                                <input type="text" placeholder="">
                            </div>
                        </div>

                        <div class="formFlex">
                            <div class="formCol">
                                <span>EIN (Employer Identification Number)</span>
                                <input type="text" placeholder="">
                            </div>
                            <div class="formCol">
                                <span>Business Location</span>
                                <div class="selectDropdownSec">
                                    <select class="selectDropdown">
                                        <option selected>Corpration</option>
                                        <option>Partnership</option>
                                        <option>LLC</option>
                                    </select>
                                </div>
                                <!-- <input type="text" placeholder=""> -->
                            </div>
                        </div>

                        <div class="formFlex">
                            <div class="formCol">
                                <span>Website (Enter url) </span>
                                <input type="text" placeholder="">
                            </div>
                            <div class="formCol">
                                <span>Business Phone Number</span>
                                <input type="text" placeholder="">
                            </div>
                        </div>

                        <div class="formFlex">
                            <div class="formCol">
                                <span>Business Email Address</span>
                                <input type="text" placeholder="">
                            </div>
                            <div class="formCol">
                                <span>Company Legal Address</span>
                                <input type="text" placeholder="">
                            </div>
                        </div>

                        <div class="formFlex">
                            <div class="formCol">
                                <span>Street Address</span>
                                <input type="text" placeholder="">
                            </div>
                            <div class="formCol">
                                <span>Unit/Suite</span>
                                <input type="text" placeholder="">
                            </div>
                        </div>

                        <div class="formFlex">
                            <div class="formCol">
                                <span>City</span>
                                <input type="text" placeholder="">
                            </div>
                            <div class="formCol">
                                <span>State</span>
                                <input type="text" placeholder="">
                            </div>
                        </div>

                        <div class="formFlex">
                            <div class="formCol">
                                <span>Zip Code</span>
                                <input type="text" placeholder="">
                            </div>
                            <div class="formCol">
                                <span>Years in Business</span>
                                <input type="text" placeholder="">
                            </div>
                        </div>

                        <div class="formFlex">
                            <div class="formCol">
                                <span>Annual Gross Revenue</span>
                                <input type="text" placeholder="">
                            </div>
                            <div class="formCol">
                                <span>Annual Net Revenue</span>
                                <input type="text" placeholder="">
                            </div>
                        </div>

                        <div class="formFlex">
                            <div class="formCol">
                                <span>Average Daily Bank Balances</span>
                                <input type="text" placeholder="">
                            </div>
                            <div class="formCol">
                                <span>Industry (e.g., Retail, Technology, Manufacturing, etc.)</span>
                                <input type="text" placeholder="">
                            </div>
                        </div>
                    </div>
                </div>                    
                    <input type="button" name="next" class="next action-button" value="Continue" />                    
                </fieldset>

                <fieldset>
                <div class="cat-2">
                    <input id="tab-2" type="radio" name="tabs" tabindex="7">
                    <label for="tab-2">Owner Information</label>

                    <div class="question-wrap">
                        <p>Tell us about the business owner.</p>

                        <div class="formFlex">
                            <div class="formCol">
                                <span>% of Ownership (Enter Amount Number)</span>
                                <input type="text" placeholder="">
                            </div>
                            <div class="formCol">
                                <span>Full Name (First Name, Last Name)</span>
                                <input type="text" placeholder="">
                            </div>
                        </div>

                        <div class="formFlex">
                            <div class="formCol">
                                <span>Email Addresss </span>
                                <input type="text" placeholder="">
                            </div>
                            <div class="formCol">
                                <span>Mobile Number</span>
                                <input type="text" placeholder="">
                            </div>
                        </div>

                        <div class="formFlex">
                            <div class="formCol">
                                <span>Phone Number</span>
                                <input type="text" placeholder="">
                            </div>
                            <div class="formCol">
                                <span>Social Security</span>
                                <input type="text" placeholder="">
                            </div>
                        </div>

                        <div class="formFlex">
                            <div class="formCol">
                                <span>Date of Birth</span>
                                <input type="text" placeholder="">
                            </div>
                            <div class="formCol">
                                <span>Owner’s Home Address</span>
                                <input type="text" placeholder="">
                            </div>
                        </div>

                        <div class="formFlex">
                            <div class="formCol">
                                <span>Street Address</span>
                                <input type="text" placeholder="">
                            </div>
                            <div class="formCol">
                                <span>Unit/Suite</span>
                                <input type="text" placeholder="">
                            </div>
                        </div>

                        <div class="formFlex">
                            <div class="formCol">
                                <span>City</span>
                                <input type="text" placeholder="">
                            </div>
                            <div class="formCol">
                                <span>State</span>
                                <input type="text" placeholder="">
                            </div>
                        </div>

                        <div class="formFlex">
                            <div class="formCol">
                                <span>Zip Code</span>
                                <input type="text" placeholder="">
                            </div>
                            <div class="formCol">
                                <span>Annual Personal Income</span>
                                <input type="text" placeholder="">
                            </div>
                        </div>

                        <div class="formFlex">
                            <div class="formCol">
                                <span>Cash on Hand (Amount available in personal accounts)</span>
                                <input type="text" placeholder="">
                            </div>
                            <div class="formCol">
                                <span>Do you Own or Rent your Home?</span>
                                <input type="text" placeholder="">
                            </div>
                        </div>

                        <div class="formFlex">
                            <div class="formCol">
                                <span>Monthly Mortgage or Rent Payment</span>
                                <input type="text" placeholder="">
                            </div>
                            <div class="formCol">
                                <span>Credit Score</span>
                                <input type="text" placeholder="">
                            </div>
                        </div>

                        <div class="formFlex">
                            <div class="formCol">
                                <span>Have you ever filed for Bankruptcy?</span>
                                <div style="display: flex; margin-top: 10px;">
                                    <div class="radio">
                                        <input type="radio" id="test1" name="radio-group" checked>
                                        <label for="test1">Yes</label>
                                    </div>
                                    <div class="radio">
                                        <input type="radio" id="test2" name="radio-group">
                                        <label for="test2">No</label>
                                    </div>
                                </div>
                            </div>
                            <div class="formCol">
                                <span>State Issued</span>
                                <div class="selectDropdownSec">
                                    <select class="selectDropdown">
                                        <option selected>Selects State</option>
                                    </select>
                                </div>
                                <!-- <input type="text" placeholder=""> -->
                            </div>
                        </div>

                        <div class="formFlex">
                            <div class="formCol">
                                <span>Driver License Number</span>
                                <input type="text" placeholder="">
                            </div>
                            <div class="formCol">
                                <span>Driver License Expiration Date:</span>
                                <input type="text" placeholder="">
                            </div>
                        </div>

                        <div class="formFlex">
                            <div class="formCol fullWidth">
                                <span>Upload Driver License (2 files upload front and back.)</span>
                                <div>
                                    <input type="file" name="file1[]" data-multiple-caption="{count} files selected"
                                        class="file-control" multiple id="file1">
                                    <label for="file1" class="label-file"><span>Choose file</span></label>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                    <input type="button" name="next" class="next action-button" value="Continue" /> 
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                </fieldset>

                <fieldset>
                <div class="cat-3">
                    <input id="tab-3" type="radio" name="tabs" tabindex="16">
                    <label for="tab-3">Loan Details</label>

                    <div class="question-wrap">
                        <p>How much capital are you seeking?</p>

                        <div class="formFlex">
                            <div class="formCol">
                                <span>Please enter an amount</span>
                                <input type="text" placeholder="">
                            </div>
                            <div class="formCol">
                                <span>Preferred Loan Term</span>
                                <div class="selectDropdownSec">
                                    <select class="selectDropdown">
                                        <option selected>30 Days</option>
                                        <option>60 Days</option>
                                        <option>90 Days</option>
                                        <option>120 Days</option>
                                        <option>150 Days</option>
                                        <option>180 Days</option>
                                        <option>More than 180 Days</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="formFlex">
                            <div class="formCol">
                                <span>How do you plan to use the funds?</span>
                                <div class="selectDropdownSec">
                                    <select class="selectDropdown">
                                        <option selected>How soon do you need funding?</option>
                                        <option>ASAP</option>
                                        <option>Within the next 1-2 weeks</option>
                                        <option>Within the next month</option>
                                    </select>
                                </div>
                            </div>
                        </div>                       
                    </div>
                </div>
                    <input type="button" name="next" class="next action-button" value="Continue" /> 
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                </fieldset>

                <fieldset>
                <div class="cat-4">
                    <input id="tab-4" type="radio" name="tabs" tabindex="25">
                    <label for="tab-4">Document Upload</label>

                    <div class="question-wrap">
                        <p>Please upload the following documents to complete your application:</p>

                        <div class="formFlex">
                            <div class="formCol">
                                <span>6 months of Business Bank Statements</span>
                                <div>
                                    <input type="file" name="file1[]" data-multiple-caption="{count} files selected"
                                        class="file-control" multiple id="file1">
                                    <label for="file1" class="label-file"><span>Choose file</span></label>
                                </div>
                            </div>
                            <div class="formCol">
                                <span>6 months of Personal Bank Statements</span>
                                <div>
                                    <input type="file" name="file1[]" data-multiple-caption="{count} files selected"
                                        class="file-control" multiple id="file1">
                                    <label for="file1" class="label-file"><span>Choose file</span></label>
                                </div>
                            </div>
                        </div>

                        <div class="formFlex">
                            <div class="formCol">
                                <span>Personal Credit Report</span>
                                <div>
                                    <input type="file" name="file1[]" data-multiple-caption="{count} files selected"
                                        class="file-control" multiple id="file1">
                                    <label for="file1" class="label-file"><span>Choose file</span></label>
                                </div>
                            </div>

                            <div class="formCol">
                                <span>Most Recent Business Tax Return</span>
                                <div>
                                    <input type="file" name="file1[]" data-multiple-caption="{count} files selected"
                                        class="file-control" multiple id="file1">
                                    <label for="file1" class="label-file"><span>Choose file</span></label>
                                </div>
                            </div>
                        </div>

                        <div class="formFlex">
                            <div class="formCol">
                                <span>Most Recent Personal Tax Return</span>
                                <div>
                                    <input type="file" name="file1[]" data-multiple-caption="{count} files selected"
                                        class="file-control" multiple id="file1">
                                    <label for="file1" class="label-file"><span>Choose file</span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
                    <input type="button" name="next" class="next action-button" value="Continue" /> 
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />                
                </fieldset>

                <fieldset>
                <div class="cat-5">
                    <input id="tab-5" type="radio" name="tabs" tabindex="25">
                    <label for="tab-5">Signature</label>

                    <div class="question-wrap">
                        <p>Please type or draw your signature here:</p>
                        <div class="formFlex">
                            <div class="formCol fullWidth">
                                <span>Full Name</span>
                                <input type="text" placeholder="">
                            </div>
                        </div>

                        <div class="formFlex">
                            <div class="formCol fullWidth">
                                <div>
                                    <canvas id="sig-canvas" width="620">
                                        Get a better browser, bro.
                                    </canvas>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="formFlex">
                            <input type="button" value="Review & Submit">
                        </div> -->

                    </div>
                </div>               
                
                    <input type="button" name="next" class="next action-button" value="Review & Submit" /> 
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                
                </fieldset>
                
            </form>

        </div>
        </div>
    </div>

     <!-- ================ Footer Section ================ -->
     @include('includes.frontend.footer')

    <!-- JS Start here -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Wow JS -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="{{ 'assets/js/bootstrap.min.js' }}"></script>
    <!-- Menu JS -->
    <script src="{{ 'assets/js/easing.min.js' }}"></script>
    <script src="{{ 'assets/js/slimmenu.min.js' }}"></script>
    <!-- Owl Carousel js -->
    <script src="{{ 'assets/js/owl.carousel.min.js' }}"></script>
    <!-- Custom js -->
    <script src="{{ 'assets/js/custom.js' }}"></script>

</body>

</html>

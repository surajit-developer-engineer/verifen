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
    @include('includes.frontend.inner-header')


    <div class="applicationBodyOuter">
        <div class="container">
        <div class="applicationBody">
            <div class="outerHeader">                
                <h2>Partner Sign up:</h2>                
                <p>Please complete the partner Sign up. You will be required to upload both business and personal tax returns, six months of bank statements, and a copy of a government-issued ID.</p>
            </div>

            <form id="msform">
                <!-- progressbar -->
                <ul id="progressbar">
                    <li class="active" id="account"><strong>Company Information</strong></li>
                    <li id="personal"><strong>Contact Information</strong></li>                                      
                </ul>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                </div> <br> <!-- fieldsets -->

                <fieldset>
                    <div class="cat-1">
                        <input id="tab-1" type="radio" name="tabs" tabindex="1">
                        <label for="tab-1">Company Information</label>

                        <div class="question-wrap">                        
                            <div class="formFlex">
                                <div class="formCol">
                                    <span>Company name</span>
                                    <input type="text" placeholder="">
                                </div>
                                <div class="formCol">
                                    <span>Company Address</span>
                                    <input type="text" placeholder="">
                                </div>
                            </div>

                            <div class="formFlex">
                                <div class="formCol">
                                    <span>Email Address</span>
                                    <input type="text" placeholder="">
                                </div>
                                <div class="formCol">
                                    <span>Phone Number</span>
                                    <input type="text" placeholder="">
                                </div>
                            </div>

                            <div class="formFlex">
                                <div class="formCol fullWidth">
                                    <span>Available Funding</span>
                                    <div class="selectDropdownSec">
                                        <select class="selectDropdown">
                                            <option selected>up to $50k</option>
                                            <option>$50k - $100k</option>
                                            <option>$100k - $250k</option>
                                            <option>$250k - $500k</option>
                                            <option>$500k+</option>
                                        </select>
                                    </div>
                                </div>                            
                            </div>

                                                    
                        </div>
                    </div>              
                    <input type="button" name="next" class="next action-button" value="Continue" />                    
                </fieldset>

                <fieldset>
                    <div class="cat-2">
                        <input id="tab-2" type="radio" name="tabs" tabindex="7">
                        <label for="tab-2">Contact Information</label>

                        <div class="question-wrap">                        

                            <div class="formFlex">
                                <div class="formCol">
                                    <span>Personal Name</span>
                                    <input type="text" placeholder="">
                                </div>
                                <div class="formCol">
                                    <span>Email Address</span>
                                    <input type="text" placeholder="">
                                </div>
                            </div>

                            <div class="formFlex">
                                <div class="formCol fullWidth">
                                    <span>Phone Number</span>
                                    <input type="text" placeholder="">
                                </div>                           
                            </div>                      
                            
                        </div>

                       
                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> 
                    <input type="button" name="next" class="next action-button" value="Review & Submit" /> 
                </fieldset>

              
            </form>

        </div>
        </div>
    </div>

     <!-- ================ Footer Section ================ -->
     @include('includes.frontend.inner-footer')

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

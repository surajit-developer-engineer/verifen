<!DOCTYPE html>
<html lang="en-US">

<head>

    @include('includes.frontend.meta-data')
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

    <section class="innerConBodyOuter">
        <div class="container">
            <div class="contFlex">
                <div class="contFlexLeft">
                    <h3>Ready to Grow? <span>Contact Us Today.</span></h3>
                    <p>Our business advisors are ready to help your business grow.</p>
                    <div class="contFlex">
                        <div class="conInfoBox">
                            <div class="conInfoBoxIcon"><i class="fa fa-envelope-o"></i></div>
                            <h3>Email Address</h3>
                            <p><a href="mailto:contact@Verifen.com  target="_blank">contact@Verifen.com </a></p>
                        </div>
                        <div class="conInfoBox">
                            <div class="conInfoBoxIcon"><img src="assets/images/phone-call.png"></div>
                            <h3>Phone Number</h3>
                            <p><a href="tel:8887886160" target="_blank">(888) 788-6160</a></p>
                        </div>
                        <div class="conInfoBox">
                            <div class="conInfoBoxIcon"><i class="fa fa-map-marker"></i></div>
                            <h3>Address</h3>
                            <p>3044 Coney Island Avenue. Brooklyn, New York 11235</p>
                        </div>
                        <div class="conInfoBox">
                            <div class="conInfoBoxIcon"><i class="fa fa-clock-o"></i></div>
                            <h3>Our Hours</h3>
                            <p> (Monday - Friday)</br> 9:00 AM - 8:00 PM</p>
                        </div>
                    </div>
                </div>
                <div class="contFlexRight">
                    <form action="">
                        <div class="formFlex">
                            <div class="formCol">
                                <label for="fname">First Name:</label>
                                <input type="text" placeholder="First Name">
                            </div>
                            <div class="formCol">
                                <label for="fname">Last Name:</label>
                                <input type="text" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="formFlex">
                            <div class="formCol fullWith">
                                <label for="fname">Company Name:</label>
                                <input type="text" placeholder="Company Name">
                            </div>
                        </div>
                        <div class="formFlex">
                            <div class="formCol">
                                <label for="fname">Phone Number:</label>
                                <input type="text" placeholder="Phone Number">
                            </div>
                            <div class="formCol">
                                <label for="fname">Email Address:</label>
                                <input type="text" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="formFlex">
                            <div class="formCol fullWith">
                                <label for="fname">What can we help you with?:</label>
                                    <div class="section">
                                        <div class="basic-container checkbox-container">
                                            <div class="checkbox-containerCol">
                                                <input type="checkbox" id="basic1" checked>
                                                <label for="basic1">Business Insurance</label>
                                            </div>
                                            <div class="checkbox-containerCol">
                                                <input type="checkbox" id="basic2">
                                                <label for="basic2">Business Loans</label>
                                            </div>
                                            <div class="checkbox-containerCol">
                                                <input type="checkbox" id="basic3">
                                                <label for="basic3">Business Regulations</label>
                                            </div>
                                            <div class="checkbox-containerCol">
                                                <input type="checkbox" id="basic4">
                                                <label for="basic4">Credit Repair</label>
                                            </div>
                                            <div class="checkbox-containerCol">
                                                <input type="checkbox" id="basic5">
                                                <label for="basic5">Credit Monitoring</label>
                                            </div>
                                            <div class="checkbox-containerCol">
                                                <input type="checkbox" id="basic6">
                                                <label for="basic6">Optimization and Strategy</label>
                                            </div>
                                            <div class="checkbox-containerCol">
                                                <input type="checkbox" id="basic7">
                                                <label for="basic7">Payment Processing</label>
                                            </div>
                                            <div class="checkbox-containerCol">
                                                <input type="checkbox" id="basic8">
                                                <label for="basic8">Private Travel</label>
                                            </div>
                                            <div class="checkbox-containerCol">
                                                <input type="checkbox" id="basic9">
                                                <label for="basic9">Other</label>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="formFlex mt-4">
                            <div class="formCol fullWith">
                                <label for="fname">How can we assist you?</label>
                                <textarea placeholder="Comment Here"></textarea>
                            </div>
                        </div>

                        <div class="formFlex mt-0">
                            <div class="formCol fullWith">
                                    <div class="section">
                                        <div class="basic-container checkbox-container mt-0">
                                            <div style="margin-right:0;" class="checkbox-containerCol fullWidth">
                                                <input type="checkbox" id="basic1">
                                                <label class="w90" for="basic1"> By submitting this form, you consent to calls and texts from Verifen regarding your inquiry. Message and data rates may apply.</label>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>

                        <input class="action-button" type="button" value="Contact Us">
                    </form>
                </div>
            </div>
        </div>
    </section>

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
    <!-- Custome js -->
    <script src="{{ 'assets/js/custom.js' }}"></script>

</body>

</html>

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
    @include('includes.frontend.partner-header')

    <section class="home-banner-sec">
        <div id="carouselExampleControls" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item itembg1 active">
                    <div class="featured_img_overlay">
                        <div class="bnr-caption">
                            <div class="container">
                                <div class="bdFlex">
                                    <aside class="slider_left">
                                        <h3>Fund Smarter, Earn More, No Gimmicks.</h3>
                                        <h2>Welcome to the Verifen Partner Program</h2>
                                        <p>your gateway to connecting with verified, high-quality business loans applications 
                                            from qualified bussiness. With transparency, lower risk, and powerful tools for funders, 
                                            Verifen is revolutionizing the funding process to make it simple, secure, and profitable.
                                        </p>
                                        <!-- <a class="applyButton" href="{{ route('application') }}"
                                            target="_blank"><span>Apply Now</span></a> -->
                                    </aside>
                                    <aside class="slider_right">
                                        <img src="{{ 'assets/images/partner-banner-img.png' }}" alt="">
                                    </aside>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ================ How It Works Section ================ -->

    <div id="howitworks" class="partnerHitw">
        <div class="container">
            <h2>How It Works</h2>

            <div class="partflexRow">
                <div class="partboxCol">
                    <div class="certified-partner_how-icon">
                        <img src="{{ 'assets/images/sign-up-icon.png' }}" alt="">
                    </div>
                    <h3 class="heading-small">Sign Up and Explore</h3>
                    <p>Access our database of funding requests from pre-qualified businesses in real-time.</p>
                </div>
                <div class="partboxCol">
                    <div class="certified-partner_how-icon">
                        <img src="{{ 'assets/images/deal-icon.png' }}" alt="">
                    </div>
                    <h3 class="heading-small">Choose Your Deal</h3>
                    <p>Explore funding opportunities and choose to fund them fully or partially with the 
                        help of our streamlined tools and platforms.</p>
                </div>
                <div class="partboxCol">
                    <div class="certified-partner_how-icon">
                        <img src="{{ 'assets/images/grow-icon.png' }}" alt="">
                    </div>
                    <h3 class="heading-small">Monitor, Manage, and Grow</h3>
                    <p>Track deals, monitor payments, and view your earnings through our easy-to-use dashboard.</p>
                </div>
            </div>

            <div class="text-center mt-5"><a class="applyButton" href="/partners-application/step-1" target="_blank"><span>Become a
                        Partner</span></a></div>
        </div>
    </div>

    <!-- ================ Why Choose Verifen Section ================ -->


    <div id="wcVerifen" class="partWcVerifen">
        <div class="container">
            <h2>Why Choose Verifen?</h2>

            <div class="partWcVerifenFlx">
                <div class="partWcVerifenFlxLCol">
                    <h3 class="heading-small">Fund Safely with Verifen</h3>
                    <p>Fund with confidence, Verifen rigorously evaluates each business’s performance, model, 
                        and risk profile to ensure only qualified, low-risk businesses are approved for funding.</p>
                </div>
                <div class="partWcVerifenFlxRCol">
                    <img src="{{ 'assets/images/partner-img2.png' }}" alt="">
                </div>
            </div>


            <div class="partWcVerifenFlx">
                <div class="partWcVerifenFlxRCol">
                    <img src="{{ 'assets/images/partner-img1.png' }}" alt="">
                </div>
                <div class="partWcVerifenFlxLCol">
                    <h3 class="heading-small">Lowest Industry Rates</h3>
                    <p>Offer merchants competitive, transparent pricing with no hidden fees or surprises,
                        helping you foster long-term, trusted relationships.</p>
                </div>
            </div>


            <div class="partWcVerifenFlx">
                <div class="partWcVerifenFlxLCol">
                    <h3 class="heading-small">Transparent, Streamlined Process</h3>
                    <p>Our honesty-first approach ensures clarity and simplicity at every step. A fast,
                        digital-first platform means less hassle and quicker funding.</p>
                </div>
                <div class="partWcVerifenFlxRCol">
                    <img src="{{ 'assets/images/partner-img3.png' }}" alt="">
                </div>
            </div>


            <div class="partWcVerifenFlx">
                <div class="partWcVerifenFlxRCol">
                    <img src="{{ 'assets/images/partner-img4.png' }}" alt="">
                </div>
                <div class="partWcVerifenFlxLCol">
                    <h3 class="heading-small">Monitor and Manage All Deals in One Place</h3>
                    <p>Gain full control and visibility over your funding portfolio:</p>
                    <ul class="ulList-check-icon">
                        <li><strong>Track Every Deal:*</strong> Monitor all funded deals in real-time using our intuitive portal.</li>
                        <li><strong>Funding History at Your Fingertips:*</strong> Review your funding history with ease,
                            ensuring you stay informed about your portfolio's growth.</li>
                        <li><strong>Payment and Earnings Tracking:*</strong> Stay up-to-date on payments and view your earnings,
                            all from your funder account dashboard.</li>
                        <li>With Verifen’s powerful tools, managing your investments has never been simpler or more
                            transparent.</li>
                    </ul>

                </div>
            </div>


            <div class="partWcVerifenFlx">
                <div class="partWcVerifenFlxLCol">
                    <h3 class="heading-small">Built on Relationships, Powered by Trust</h3>
                    <p>At Verifen, we focus on long-term relationships, not just transactions. As you build your 
                        funding history with us, you'll gain access to higher-earning opportunities, lower risk profiles, 
                        and exclusive loan deals reserved for our most qualified partners.</p>
                    <ul class="ulList-check-icon">
                        <li><strong>Silver Funder:*</strong> Fund up to $50K.</li>
                        <li><strong>Gold Funder:*</strong> Fund up to $100K.</li>
                        <li><strong>Platinum Funder:*</strong> Fund up to $250K.</li>
                        <li><strong>Black Funder:*</strong> Fund up to $500K.</li>
                        <li><strong>Diamond Funder:*</strong> Fund up to $1M.</li>
                        <li><strong>Diamond Preferred Funder:*</strong> Fund over $1M.</li>
                    </ul>
                </div>
                <div class="partWcVerifenFlxRCol">
                    <img src="{{ 'assets/images/partner-im5.png' }}" alt="">
                </div>
            </div>      


            <div class="partWcVerifenFlx">
                <div class="partWcVerifenFlxRCol">
                    <img src="{{ 'assets/images/partner-img5.png' }}" alt="">
                </div>
                <div class="partWcVerifenFlxLCol">
                    <h3 class="heading-small">Customized Merchant Solutions</h3>
                    <p>We tailor funding to meet merchant needs, ensuring sustainable growth for
                        businesses and high-quality opportunities for funders.</p>
                </div>
            </div>

            <div class="text-center"><a class="applyButton" href="/partners-application/step-1" target="_blank"><span>Become a
                        Partner</span></a></div>

        </div>
    </div>



    <!-- ================ Ready to proceed Section ================ -->

    <div class="readytoproSec">
        <div class="container">
            <h2>Earn with Verifen</h2>
            <p>Ready to become an authorized Verifen Partner? Submit the quick form below to 
                get started and unlock new funding opportunities.</p>
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

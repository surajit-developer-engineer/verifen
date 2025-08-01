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
   <div class="bg-blue-primary"></div>

<header class="top-main-hdr">
    <div class="container">
        <div class="hdr-row">
            <div class="container">
                <div class="logo-flxRow">
           <div class="hdr-row2">
            <a href="{{ route('index') }}">
                <img src="{{ 'assets/images/logo.svg' }}" alt="Verifen">
            </a>

           <div class="hdrToprow brdNone">
            <ul>
                <li class="pgap-0">
                    <img src="{{ 'assets/images/phone-call.png' }}">
                    <a href="tel:8887886160" target="_blank">(888) 788-6160</a>
                </li>
            </ul>
           </div>
           </div>

           </div>
        </div>
    </div>
</header>


    <section class="landingConBody staticPages">

        <div class="landingbannerSec">
            <div class="container">
                <div class="lanbannerBg">
                    <div class="lanban-con-holder">
                        <h2>The Smarter Way to Fund and Grow Your Business</h2>
                        <p>Apply in minutes. Get approved fast. Access capital and growth support tailored to your goals.
                            Verifen delivers fast capital with zero fluff, and the expert support to turn every dollar into
                            lasting impact, </p>
                        <a class="applyButton mt-4" href="#">Check Your Eligibility</a>
                    </div>
                    <div class="lanban-img-holder">
                        <img src="{{ 'assets/images/landing-banner2.png' }}">
                    </div>
                </div>
            </div>
        </div>


    <div class="logoSec landing-logoSec">
        <div class="container">
            <ul class="logoFlex">                
                <li><a href="#" target="_blank">
                        <img class="maxWidth130" alt="nbc" src="{{ 'assets/images/nbc-logo.png' }}"></a>
                </li>
                <li><a href="#" target="_blank">
                        <img class="maxWidth130" alt="abc" src="{{ 'assets/images/abc-logo.png' }}"></a>
                </li>
                <li><a href="#" target="_blank">
                        <img class="maxWidth130" alt="boston herald"
                            src="{{ 'assets/images/boston-herald-logo.png' }}"></a>
                </li>
                <li><a href="#" target="_blank">
                        <img class="maxWidth130" alt="startribune"
                            src="{{ 'assets/images/msn-logo.png' }}"></a>
                </li>
                <li><a href="#" target="_blank">
                        <img class="maxWidth130" alt="fox" src="{{ 'assets/images/yahoo-logo.png' }}"></a>
                </li>
            </ul>
        </div>
    </div>


  


  <div class="landing-growSae">
    <div class="container">
        <h2>More Than Just Money. We Help You Grow.</h2>
        <p>At Verifen, we go beyond funding. Our mission is to be your partner in long-term growth. 
            That’s why every funding </br>package includes expert-led business support in:</p>
        <ul>
            <li>
                <div class="featured-icon-holder">						
                    <img class="maxWidth130" alt="Business Strategy" src="assets/images/icon-111.png">												
                </div>
                <h3>Business Strategy</h3>
                <p>We help you clarify goals, identify bottlenecks, and create a roadmap to scale.</p>
            </li>
            <li>
                <div class="featured-icon-holder">						
                    <img class="maxWidth130" alt="Business Strategy" src="assets/images/icon-222.png">												
                </div>
                <h3>Marketing and Optimization</h3>
                <p>Get access to proven tools and advice to attract more customers and increase conversions.</p>
            </li>
            <li>
                <div class="featured-icon-holder">						
                    <img class="maxWidth130" alt="Business Strategy" src="assets/images/icon-333.png">												
                </div>
                <h3>Sales and Revenue Growth</h3>
                <p>From improving pitch scripts to pricing strategies, we help you close more deals.</p>
            </li>
            <li>
                <div class="featured-icon-holder">						
                    <img class="maxWidth130" alt="Business Strategy" src="assets/images/icon-444.png">												
                </div>
                <h3>Business Model Analysis</h3>
                <p>Our advisors identify profit leaks, inefficiencies, and growth opportunities.</p>
            </li>
            <li>
                <div class="featured-icon-holder">						
                    <img class="maxWidth130" alt="Business Strategy" src="assets/images/icon-555.png">												
                </div>
                <h3>Smart Technology Setup</h3>
                <p>We recommend tools and automations to make your business run smoother and smarter.</p>
            </li>
            <li>
                <div class="featured-icon-holder">						
                    <img class="maxWidth130" alt="Business Strategy" src="assets/images/icon-666.png">												
                </div>
                <h3>Branding and Positioning</h3>
                <p>Stand out from the competition with a clear, confident brand that drives loyalty.</p>
            </li>
        </ul>
        <div class="text-center">
            <a class="applyButton" href="/business-loans-application">Get Funded Now</a>
        </div>
    </div>
  </div>


<div class="landing-commonSec">
    <div class="container">
        <div class="lanimagebgsec">
            <img alt="Image" src="{{ 'assets/images/office-indoor.jpg' }}">	
            <div class="bgopacity">
                <div class="landingProFlex2">
                    <div class="landingProleftCol2">
                        <h2>See What Makes Verifen Different</h2>
                        <ul>
                            <li>Traditional Lenders	Verifen</li>
                            <li>Long waits & red tape</li>
                            <li>Fast approvals</li>
                            <li>Confusing terms</li>
                            <li>Transparent pricing</li>
                            <li>No support after funding</li>
                            <li>Ongoing business Support</li>
                            <li>One-size-fits-all offers</li>
                            <li>Tailored solutions</li>
                        </ul>
                    </div>
                    <div class="landingProrightCol2">
                        <h2>Why Thousands Trust Verifen</h2>
                        <ul>
                            <li>Best Rated in Business Growth Strategy</li>
                            <li>$100M+ in Capital Delivered</li>
                            <li>Trusted and Secure</li>
                            <li>Real Humans. Real Support.</li>                    
                        </ul>
                        <a class="applyButton" href="#">Check Your Eligibility in Minutes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



  <!-- <div class="landingPro-outer">
    <div class="container">
        <div class="landingProFlex">
            <div class="landingProleftCol">
                <img alt="Business Strategy" src="assets/images/mobile-device-screenshots-base.webp">
            </div>
            <div class="landingProrightCol">
                <h2>See What Makes Verifen Different</h2>
                <ul>
                    <li>Traditional Lenders	Verifen</li>
                    <li>Long waits & red tape</li>
                    <li>Fast approvals</li>
                    <li>Confusing terms</li>
                    <li>Transparent pricing</li>
                    <li>No support after funding</li>
                    <li>Ongoing business Support</li>
                    <li>One-size-fits-all offers</li>
                    <li>Tailored solutions</li>
                </ul>
            </div>
        </div>
    </div>
  </div> -->


    <!-- <div class="landingPro-outer">
    <div class="container">
        <div class="landingProFlex">            
            <div class="landingProrightCol">
                <h2>Why Thousands Trust Verifen</h2>
                <ul>
                    <li>Best Rated in Business Growth Strategy</li>
                    <li>$100M+ in Capital Delivered</li>
                    <li>Trusted and Secure</li>
                    <li>Real Humans. Real Support.</li>                    
                </ul>
                <a class="applyButton" href="#">Check Your Eligibility in Minutes</a>
            </div>
            <div class="landingProleftCol">
                <img alt="Business Strategy" src="assets/images/mobile-device-screenshots-base.webp">
            </div>
        </div>
    </div>
  </div> -->


  <!-- ================ Ready to proceed Section ================ -->

    <div class="readytoproSec landingfaqSec">
        <div class="container">
            <h2>Questions? Let’s Talk</h2>
            <p>Call us at <span><i class="fa fa-phone"></i></span> (888) 788-6160 
            or <span><i class="fa fa-envelope"></i></span> email contact@verifen.com</p>
            <small>Our expert business advisors are here to help. No pressure, just clarity.</small>            
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

<!DOCTYPE html>
<html lang="en-US">

<head>


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

        <section class="home-banner-sec">
            <div id="carouselExampleControls" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item servicebg2 active">
                        <div class="featured_img_overlay">
                            <div class="bnr-caption">
                                <div class="container">
                                    <div class="bdFlex">
                                        <aside class="slider_left">
                                            <h3>Payment Processing</h3>
                                            <h2>Seamless, Secure Payment Processing for Every Business</h2>
                                            <p>Take control of your transactions with Verifen’s advanced payment processing solutions. 
                                                From startups to high-volume enterprises, including high-risk industries, we deliver secure, 
                                                fast, and scalable systems that help you grow without limits.</p>
                                            <a class="applyButton" href="/business-loan-application/step-1"><span>Schedule a Free Consultation</span></a>
                                        </aside>
                                        <aside class="slider_right">
                                            <img src="{{ 'assets/images/payment-processing-banner.png' }}" alt="">
                                        </aside>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>


        

    <section class="brands-sec about-us-sec m-5">
        <div class="container">
            <h2 class="ser-subHeading">Why Choose Verifen Payment Processing?</h2>
            <p class="pb-3 ser-paragraph">Payment processing is the backbone of your business. With the wrong partner, you risk high fees, fraud, chargebacks, and compliance issues. Verifen eliminates these challenges by offering:</p>
            
            
            <div class="serviceBox-row">
                <div class="serviceBox">
                    <img src="assets/images/expert-icon_01.png" alt="">
                    <h5><span>High-Risk Industry Solutions</span></h5>
                    <p>If you’ve been denied by traditional processors, Verifen can help. We provide approvals and reliable services for industries like nutraceuticals, CBD, adult, coaching, gaming, credit repair, and more.</p>
                </div>
                <div class="serviceBox">
                    <img src="assets/images/expert-icon_02.png" alt="">
                     <h5><span>Multi-Channel Acceptance</span></h5>
                    <p>Accept payments online, in-store, or on mobile, powered by state-of-the-art POS systems, gateways, and e-commerce integrations.</p>
                </div>
                <div class="serviceBox">
                    <img src="assets/images/expert-icon_03.png" alt="">
                    <h5><span>Advanced Security</span></h5>
                    <p>Our systems are PCI-DSS compliant, with built-in fraud detection, encryption, and chargeback prevention.</p>
                </div>
                <div class="serviceBox">
                    <img src="assets/images/expert-icon_04.png" alt="">
                    <h5><span>Scalability</span></h5>
                    <p>Whether you’re processing hundreds or millions in monthly revenue, our solutions scale with your business needs.</p>
                </div>
                <div class="serviceBox">
                    <img src="assets/images/expert-icon_04.png" alt="">
                    <h5><span>Global Capabilities</span></h5>
                    <p>Accept payments from customers worldwide with multi-currency and international gateway options.</p>
                </div>
                <div class="serviceBox">
                    <img src="assets/images/expert-icon_04.png" alt="">
                    <h5><span>Dedicated Support</span></h5>
                    <p>Expert advisors available to guide you through setup, optimization, and compliance.</p>
                </div>

            </div>
                      
            
        </div>
    </section>

    <div class="deliversSec sp-top-bottom">
        <div class="container">
            <div class="deliversSecFlex">
                <div class="c-partner_right-block sw43 mt-0">
                    <img class="simgRadius" src="assets/images/service-img.jpg" alt="">
                </div>
                <div class="c-partner_left-block sw50">
                    <div class="c-partner_sticky">
                            <h2 class="pb-3">Who We Serve</h2>
                                <p>Verifen’s payment processing solutions are designed for:</p>     
                                <div class="staticPages">                           
                                    <ul class="backpack-list serviceList">
                                        <li>Retail and E-commerce Businesses</li>
                                        <li>Subscription and Membership Platforms</li>
                                        <li>Hospitality, Travel, and Entertainment Companies</li>
                                        <li>Financial Services and Professional Firms</li>
                                        <li>High-Risk Businesses requiring specialized processing</li>
                                    </ul>
                                </div>
                                <p>No matter your size or industry, we deliver reliable systems that keep your business moving.</p>                                 
                        </div>
                </div>
            </div>
        </div>
    </div>

     <div class="deliversSec sp-top-bottom">
        <div class="container">
            <div class="deliversSecFlex">               
                <div class="c-partner_left-block sw50">
                    <div class="c-partner_sticky">
                            <h2 class="pb-3">No matter your size or industry, we deliver reliable systems that keep your business moving.</h2>
                                     
                                <div class="staticPages">                           
                                    <p>Staying compliant is non-negotiable. Verifen ensures your business 
                                        meets PCI-DSS and AML standards while minimizing chargebacks and 
                                        fraudulent activity. Our monitoring and reporting tools give you 
                                        real-time visibility into your transactions.</p>
                                </div> 
                    </div>
                </div>

                <div class="c-partner_right-block sw43 mt-0">
                    <img class="simgRadius" src="assets/images/service-img2.jpg" alt="">
                </div>
            </div>


        </div>
    </div>


   

<!-- ================ FAQ Section ================ -->
    <div id="faqs" class="faqSecRow pt-5">
        <div class="faqSec">
            <div class="container">
                <h2>Frequently Asked Questions</h2>
                <div class="details">
                    <details class="detailsContainer">
                        <summary class="detailsSummary">
                            <!-- The title -->
                            <h3 class="detailsTitle">Do you work with new businesses?</h3>
                        </summary>
                    </details>
                    <!-- The content -->
                    <div class="detailsDesc">
                        <div class="detailsDescInner">Yes. We support both startups and established enterprises.</div>
                    </div>
                </div>
                <div class="details">
                    <details class="detailsContainer">
                        <summary class="detailsSummary">
                            <!-- The title -->
                            <h3 class="detailsTitle">What if my industry is considered high-risk?</h3>
                        </summary>
                    </details>
                    <!-- The content -->
                    <div class="detailsDesc">
                        <div class="detailsDescInner">That’s one of our specialties. We provide custom solutions for high-risk merchants.</div>
                    </div>
                </div>
                <div class="details">
                    <details class="detailsContainer">
                        <summary class="detailsSummary">
                            <!-- The title -->
                            <h3 class="detailsTitle">Can I accept international payments?</h3>
                        </summary>
                    </details>
                    <!-- The content -->
                    <div class="detailsDesc">
                        <div class="detailsDescInner">Absolutely. Verifen supports global transactions and multiple currencies.</div>
                    </div>
                </div>               
               

            </div>
        </div>
    </div>
    
    
     <!-- ================ Ready to proceed Section ================ -->

     <div class="readytoproSec">
        <div class="container">  
             <h2>Start accepting payments without limitations.</h2>          
            <p>Schedule a free consultation with Verifen today and get a solution built for your business</p>
            <div class="flex">
                <a class="contactButton" href="/business-loan-application/step-1" target="_blank">Book a Consultation</a>
                
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
    <!-- Custome js -->
    <script src="{{ 'assets/js/custom.js' }}"></script>

</body>

</html>

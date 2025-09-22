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
                                            <h3>Credit Repair</h3>
                                            <h2>Build the Strong Credit Profile Your Business Deserves</h2>
                                            <p>A strong credit profile isn’t just a number , it’s the key to unlocking 
                                                affordable funding, better terms, and long-term growth. At Verifen, 
                                                our credit repair services are designed to help you identify issues, 
                                                rebuild your profile, and position your business for the financing it needs to thrive.</p>
                                            <a class="applyButton" href="/business-loan-application/step-1"><span>Start Your Credit Repair Journey Today</span></a>
                                        </aside>
                                        <aside class="slider_right">
                                            <img src="{{ 'assets/images/credit-repair-banner.png' }}" alt="">
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
            <h2 class="ser-subHeading">Why Credit Repair Matters</h2>
            <p class="pb-3 ser-paragraph">Lenders, suppliers, and even insurers look at your credit before 
                deciding how to work with you. A weak credit score can mean:</p>
           
            
            <div class="serviceBox-row">
                <div class="serviceBox">
                    <img src="assets/images/expert-icon_01.png" alt="">  
                    </br>                 
                    <p>Higher interest rates and tighter loan terms</p>
                </div>
                <div class="serviceBox">
                    <img src="assets/images/expert-icon_02.png" alt="">   
                    </br>                 
                    <p>Difficulty qualifying for SBA loans or lines of credit</p>
                </div>
                <div class="serviceBox">
                    <img src="assets/images/expert-icon_03.png" alt=""> 
                    </br>                   
                    <p>Missed opportunities for growth due to limited financing</p>
                </div>
                <div class="serviceBox">
                    <img src="assets/images/expert-icon_04.png" alt="">  
                    </br>                  
                    <p>Challenges building trust with vendors and partners</p>
                </div>
            </div>
            <p class="p-5 ">But here’s the good news: credit is not permanent. With the right support, you can repair your profile and restore your financial strength.
</p>            
            
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
                            <h2 class="pb-3">The Verifen Credit Repair Process</h2>
                                <p>We make the process simple, transparent, and effective: </p>     
                                <div class="staticPages">                           
                                    <ul class="backpack-list serviceList">
                                        <li><strong>Assessment:</strong> We review your current credit profile to identify errors, weaknesses, and opportunities for improvement.</li>
                                        <li><strong>Dispute & Correction:</strong> Inaccuracies and unfair marks are addressed with the credit bureaus on your behalf.</li>
                                        <li><strong>Rebuilding Plan:</strong> We create a personalized strategy for strengthening your score over time.</li>
                                        <li><strong>Ongoing Guidance:</strong> Our team helps you maintain good credit habits and stay positioned for better funding.</li>                                        
                                    </ul>
                                </div>                                
                                <a class="applyButton mt-3" href="/business-loan-application/step-1">Get Your Free Credit Assessment Now</a> 
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
                            <h2 class="pb-3">Beyond Credit Repair: Building Financial Readiness</h2>
                                <p>Credit repair is only part of the picture. At Verifen, we combine repair with education and strategy to give your business the strongest possible foundation. Our services include:</p>     
                                <div class="staticPages">                           
                                    <ul class="backpack-list serviceList">
                                        <li><strong>Credit Education:</strong> Learn how to avoid common pitfalls and maintain healthy credit.</li>
                                        <li><strong>Funding Preparation:</strong> Position your business for loan approval by aligning your credit profile with lender expectations.</li>
                                        <li><strong>Monitoring & Alerts:</strong> Stay informed about changes that could affect your eligibility for financing.</li>
                                        <li><strong>Regulation & Compliance:</strong> Ensure your business meets requirements that lenders look for beyond just credit.</li>
                                        <li><strong>Insurance & Risk Management:</strong> Strengthen your financial profile by reducing risks that can impact creditworthiness.</li>
                                    </ul>
                                </div>                                
                        </div>
                </div>

                <div class="c-partner_right-block sw43 mt-0">
                    <img class="simgRadius" src="assets/images/business-support.jpg" alt="">
                </div>
            </div>


        </div>
    </div>

    <section id="howitworks" class="howitWorksSec sp-top-bottom">
            <div class="container">
                <h2>Why Choose Verifen?</h2>
                <p>We know credit repair is often surrounded by false promises. That’s why we built our process on <strong>care, transparency, and delivery</strong>.</p>
                
                <ul class="whychoose-sec">
                    <li>
                        <figure>
                            <img src="assets/images/ventilation_2.png" class="fr-fic fr-dib " alt="Apply Online">
                        </figure>
                        <p>Care <span>We treat your financial journey with respect and patience.</span></p>
                    </li>
                    <li>
                        <figure>
                            <img src="assets/images/insurance_1.png" class="fr-fic fr-dib " alt="Get Approved">
                        </figure>
                        <p>Transparency <span>No gimmicks, no hidden costs, just clear progress reports.</span></p>
                    </li>
                    <li>
                        <figure>
                            <img src="assets/images/consulting_1.png" class="fr-fic fr-dib " alt="Receive Funds">
                        </figure>
                        <p>Delivery <span>Our proven system has helped countless business owners improve their credit and unlock new opportunities.</span></p>
                    </li> 
                </ul>

                <div class="text-center"><a class="applyButton" href="/business-loan-application/step-1"><span>Start Repairing Your Credit Today</span></a></div>
            </div>
        </section>




    <div class="deliversSec sp-top-bottom">
        <div class="container">
            <div class="deliversSecFlex">               
                <div class="c-partner_left-block sw50">
                    <div class="c-partner_sticky">
                            <h2 class="pb-3">Common Issues We Help Resolve</h2>                                     
                                <div class="staticPages">                           
                                    <ul class="backpack-list serviceList">
                                        <li>Late payments and delinquencies</li>
                                        <li>Inaccurate credit reporting</li>
                                        <li>Collections and charge-offs</li>
                                        <li>High utilization ratios</li>
                                        <li>Business credit profile gaps</li>
                                    </ul>
                                    <p>No matter where your credit stands today, Verifen has a path to improvement.</p>
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
                            <h3 class="detailsTitle">How long does credit repair take?</h3>
                        </summary>
                    </details>
                    <!-- The content -->
                    <div class="detailsDesc">
                        <div class="detailsDescInner">While timelines vary, many clients see improvements within 3: 6 months.</div>
                    </div>
                </div>
                <div class="details">
                    <details class="detailsContainer">
                        <summary class="detailsSummary">
                            <!-- The title -->
                            <h3 class="detailsTitle">Can you guarantee a specific score increase?</h3>
                        </summary>
                    </details>
                    <!-- The content -->
                    <div class="detailsDesc">
                        <div class="detailsDescInner">No one can guarantee exact numbers. What we do guarantee is a focused, transparent effort to maximize your credit potential.</div>
                    </div>
                </div>
                <div class="details">
                    <details class="detailsContainer">
                        <summary class="detailsSummary">
                            <!-- The title -->
                            <h3 class="detailsTitle">Will repairing credit help me qualify for loans?</h3>
                        </summary>
                    </details>
                    <!-- The content -->
                    <div class="detailsDesc">
                        <div class="detailsDescInner">Yes , stronger credit improves eligibility and can secure you better terms, rates, and approvals.</div>
                    </div>
                </div>

                <div class="text-center mt-5"><a class="applyButton" href="/business-loan-application/step-1"><span>Check Your Credit Repair Options Today</span></a></div>
               

            </div>
        </div>
    </div>
    
    
     <!-- ================ Ready to proceed Section ================ -->

     <div class="readytoproSec">
        <div class="container">  
             <h2>Ready to Grow Your Business?</h2>          
            <p>Your credit is the foundation of your business’s financial future. Don’t let mistakes or 
                outdated marks hold you back. With Verifen’s expert credit repair services, you’ll 
                gain the clarity, strength, and confidence you need to move your business forward.</p>
            <div class="flex">
                <a class="contactButton" href="/business-loan-application/step-1" target="_blank">Start Your Credit Repair Journey with Verifen Today</a>
                
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

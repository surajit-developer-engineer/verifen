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
                                            <h3>Business Loans</h3>
                                            <h2>Fuel Your Growth with Confidence</h2>
                                            <p>Every business deserves the chance to grow , but too often, funding 
                                                feels out of reach. At Verifen, we make business loans simple, 
                                                transparent, and stress-free. With clear terms, caring support, 
                                                and fast delivery, you’ll have the capital you need to take the 
                                                next step with confidence.</p>
                                            <a class="applyButton" href="/business-loan-application/step-1"><span>Apply for a Business Loan Today</span></a>
                                        </aside>
                                        <aside class="slider_right">
                                            <img src="{{ 'assets/images/business-loans-banner.png' }}" alt="">
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
            <h2 class="ser-subHeading">The Challenge Most Businesses Face</h2>
            <p class="pb-3 ser-paragraph">Accessing capital through traditional lenders is often overwhelming. 
                Banks bury fees in fine print, drag out the approval process, and treat small businesses 
                like just another number. The result? Missed opportunities, slowed growth, and unnecessary stress.
                We believe you deserve better.</p>
            </br>
            <h3><strong>The Verifen Solution</strong></h3>
            <p class="pb-5">Verifen business loans are built around three promises:</p>
            <div class="serviceBox-row">
                <div class="serviceBox">
                    <img src="assets/images/expert-icon_01.png" alt="">
                    <h5><span>Care </span></h5>
                    <p>We take the time to understand your goals, challenges, and vision.</p>
                </div>
                <div class="serviceBox">
                    <img src="assets/images/expert-icon_02.png" alt="">
                    <h5><span>Transparency</span></h5>
                    <p>No hidden fees, no confusing terms , ever.</p>
                </div>
                <div class="serviceBox">
                    <img src="assets/images/expert-icon_03.png" alt="">
                    <h5><span>Delivery</span></h5>
                    <p>Fast, reliable funding when you need it most.</p>
                </div>
            </div>
            <p class="p-5 ">Unlike traditional loans, our process is designed to empower, not frustrate.</p>            
            <a class="applyButton" href="/business-loan-application/step-1"><span>See How Much You Qualify For</span></a>
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
                            <h2 class="pb-3">Loan Options Available</h2>
                                <p>At Verifen, we know every business has unique needs. That’s why we offer a 
                                    variety of loan products to fit your situation:</p>     
                                <div class="staticPages">                           
                                    <ul class="backpack-list serviceList">
                                        <li><strong>Revenue-Based Financing:</strong> Flexible funding tied to your revenue flow, ideal for businesses 
                                        with seasonal or variable sales.</li>
                                        <li><strong>Working Capital:</strong> Short-term funding to cover payroll, inventory, or day-to-day expenses.</li>
                                        <li><strong>Line of Credit:</strong> On-demand access to funds, giving you flexibility whenever 
                                        unexpected expenses or opportunities arise.</li>
                                        <li><strong>Term Loans:</strong> Fixed-rate financing with clear repayment schedules for 
                                        long-term investments like equipment or expansion.</li>
                                        <li><strong>SBA Loans:</strong> Affordable financing backed by the Small Business Administration, 
                                        offering lower rates and longer repayment terms.</li>
                                    </ul>
                                </div>
                                <p>No matter where your business stands today, Verifen has the right solution to help you move forward.</p>
                                <a class="applyButton mt-3" href="/business-loan-application/step-1">Explore Loan Options and Apply Today</a> 
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
                            <h2 class="pb-3">How You Can Use Verifen Business Loans</h2>
                                <p>Every business is unique, which is why our loans are flexible enough to fit your needs. Use your loan to: </p>     
                                <div class="staticPages">                           
                                    <ul class="backpack-list serviceList">
                                        <li>Expand into new markets or open additional locations</li>
                                        <li>Purchase new equipment or upgrade technology</li>
                                        <li>Launch marketing campaigns that bring in more customers</li>
                                        <li>Smooth out seasonal cash flow challenges</li>
                                        <li>Hire, train, and support the right team</li>
                                    </ul>
                                </div>
                                <p>With Verifen, your capital works exactly where you need it most.</p>
                                
                        </div>
                </div>

                <div class="c-partner_right-block sw43 mt-0">
                    <img class="simgRadius" src="assets/images/service-img2.jpg" alt="">
                </div>
            </div>


        </div>
    </div>

    <section id="howitworks" class="howitWorksSec sp-top-bottom">
            <div class="container">
                <h2>Why Choose Verifen?</h2>
                <p>Most lenders focus on paperwork. We focus on people. At Verifen, you’re more than an application , you’re a partner.</p>
                <p><strong>Here’s what sets us apart:</strong></p>
                <ul class="whychoose-sec">
                    <li>
                        <figure>
                            <img src="assets/images/ventilation_2.png" class="fr-fic fr-dib " alt="Apply Online">
                        </figure>
                        <p>Fast approval process <span>many clients receive funding in as little as 48 hours.</span></p>
                    </li>
                    <li>
                        <figure>
                            <img src="assets/images/insurance_1.png" class="fr-fic fr-dib " alt="Get Approved">
                        </figure>
                        <p>Flexible amounts <span>from $25,000 to $2 million, depending on your business size.</span></p>
                    </li>
                    <li>
                        <figure>
                            <img src="assets/images/consulting_1.png" class="fr-fic fr-dib " alt="Receive Funds">
                        </figure>
                        <p>Clear repayment terms <span>no hidden charges or sudden surprises.</span></p>
                    </li>
                     <li>
                        <figure>
                            <img src="assets/images/consulting_2.png" class="fr-fic fr-dib " alt="Receive Funds">
                        </figure>
                        <p>Personal support <span>a real team that listens and guides you every step.</span></p>
                    </li>
                    
                </ul>

                <div class="text-center"><a class="applyButton" href="/business-loan-application/step-1"><span>Apply Now and Get Funded Fast</span></a></div>
            </div>
        </section>



           <!-- ================ FAQ Section ================ -->
    <div id="faqs" class="faqSecRow pt-5">
        <div class="faqSec">
            <div class="container">
                <h2>Frequently Asked Questions</h2>
                <div class="details">
                    <details class="detailsContainer">
                        <summary class="detailsSummary">
                            <!-- The title -->
                            <h3 class="detailsTitle">Will applying affect my credit?</h3>
                        </summary>
                    </details>
                    <!-- The content -->
                    <div class="detailsDesc">
                        <div class="detailsDescInner">No, initial applications only use a soft pull.</div>
                    </div>
                </div>
                <div class="details">
                    <details class="detailsContainer">
                        <summary class="detailsSummary">
                            <!-- The title -->
                            <h3 class="detailsTitle">How fast can I receive funds?</h3>
                        </summary>
                    </details>
                    <!-- The content -->
                    <div class="detailsDesc">
                        <div class="detailsDescInner">Many clients are funded within 48: 72 hours of approval.</div>
                    </div>
                </div>
                <div class="details">
                    <details class="detailsContainer">
                        <summary class="detailsSummary">
                            <!-- The title -->
                            <h3 class="detailsTitle">Are there hidden fees?</h3>
                        </summary>
                    </details>
                    <!-- The content -->
                    <div class="detailsDesc">
                        <div class="detailsDescInner">Never. Transparency is our promise , what you see is what you get.</div>
                    </div>
                </div>

                <div class="text-center mt-5"><a class="applyButton" href="/business-loan-application/step-1"><span>Check Your Eligibility Today</span></a></div>
               

            </div>
        </div>
    </div>
    
    
     <!-- ================ Ready to proceed Section ================ -->

     <div class="readytoproSec">
        <div class="container">  
             <h2>Ready to Grow Your Business?</h2>          
            <p>Your business deserves more than financial roadblocks. With Verifen business loans, you’ll 
                have clear funding, fast delivery, and a team that truly cares about your success.</p>
            <div class="flex">
                <a class="contactButton" href="/business-loan-application/step-1" target="_blank">Apply for a Business Loan Today</a>
                
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

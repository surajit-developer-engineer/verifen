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
                                            <h3>Credit Monitoring</h3>
                                            <h2>Stay Ahead of Credit Changes and Protect Your Business</h2>
                                            <p>Your business reputation and financial health are invaluable. 
                                                With Verifen Credit Monitoring, you can track your credit in real 
                                                time, catch potential issues early, and ensure your business is 
                                                always ready to seize growth opportunities</p>
                                            <a class="applyButton" href="/business-loan-application/step-1"><span>Start Credit Monitoring Today</span></a>
                                        </aside>
                                        <aside class="slider_right">
                                            <img src="{{ 'assets/images/credit-monitoring-banner.png' }}" alt="">
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
            <h2 class="ser-subHeading">Why Credit Monitoring Matters</h2>
            <p class="pb-3 ser-paragraph">Even a small change to your business credit can affect loan eligibility, 
                supplier terms, or insurance rates. Without ongoing oversight, you risk:</p>
                       
            <div class="serviceBox-row">
                <div class="serviceBox">
                    <img src="assets/images/expert-icon_01.png" alt="">
                    <!-- <h5><span>Care </span></h5> -->
                    <p>Missing errors or fraudulent activity on your credit report</p>
                </div>
                <div class="serviceBox">
                    <img src="assets/images/expert-icon_02.png" alt="">
                    <!-- <h5><span>Transparency</span></h5> -->
                    <p>Delays in securing financing due to unnoticed changes</p>
                </div>
                <div class="serviceBox">
                    <img src="assets/images/expert-icon_03.png" alt="">
                    <!-- <h5><span>Delivery</span></h5> -->
                    <p>Higher interest rates or declined funding opportunities</p>
                </div>
                <div class="serviceBox">
                    <img src="assets/images/expert-icon_04.png" alt="">
                    <!-- <h5><span>Delivery</span></h5> -->
                    <p>Reduced trust with partners or investors</p>
                </div>
            </div>
            <p class="p-5 ">Verifen helps you stay proactive instead of reactive.</p>
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
                            <h2 class="pb-3">How Verifen Credit Monitoring Works</h2>
                                <p>Our process is designed for simplicity, transparency, and peace of mind:</p>     
                                <div class="staticPages">                           
                                    <ul class="backpack-list serviceList">
                                        <li><strong>Real-Time Alerts:</strong> Get immediate notifications when changes occur in your credit profile.</li>
                                        <li><strong>Detailed Reporting:</strong> Easy-to-understand insights show exactly what’s happening and why it matters.</li>
                                        <li><strong>Actionable Guidance:</strong> We provide advice on how to address negative activity or take advantage of positive changes.</li>
                                        <li><strong>Ongoing Protection:</strong> Monitor trends and stay ahead of potential financial or reputational risks.</li>                                        
                                    </ul>
                                </div>                                
                                <a class="applyButton mt-3" href="/business-loan-application/step-1">Protect Your Business Today</a> 
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
                            <h2 class="pb-3">Beyond Monitoring: Comprehensive Financial Awareness</h2>
                                <p>Verifen doesn’t just report changes , we empower you with tools to improve your financial standing: </p>     
                                <div class="staticPages">                           
                                    <ul class="backpack-list serviceList">
                                        <li><strong>Credit Repair Integration:</strong> Quickly address negative items discovered during monitoring.</li>
                                        <li><strong>Funding Readiness:</strong> Stay prepared to qualify for loans, lines of credit, or SBA financing.</li>
                                        <li><strong>Compliance Oversight:</strong> Ensure your credit and financial activities align with regulatory requirements.</li>
                                        <li><strong>Insurance & Risk Management:</strong> Strengthen your profile by mitigating financial and operational risks.</li>                                        
                                    </ul>
                                </div>
                                <p>Monitoring your credit isn’t just about prevention , it’s about positioning your business for growth.</p>                                
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
                <p>We built our monitoring system with <strong>care, transparency, and reliable delivery</strong>:</p>                
                <ul class="whychoose-sec">
                    <li>
                        <figure>
                            <img src="assets/images/ventilation_2.png" class="fr-fic fr-dib " alt="Apply Online">
                        </figure>
                        <p>Care: <span>We understand the stakes of every change to your credit profile.</span></p>
                    </li>
                    <li>
                        <figure>
                            <img src="assets/images/insurance_1.png" class="fr-fic fr-dib " alt="Get Approved">
                        </figure>
                        <p>Transparency: <span>Alerts and reports are clear, actionable, and easy to interpret.</span></p>
                    </li>
                    <li>
                        <figure>
                            <img src="assets/images/consulting_1.png" class="fr-fic fr-dib " alt="Receive Funds">
                        </figure>
                        <p>Delivery: <span>Fast notifications and continuous monitoring mean you can act immediately, keeping your business agile.</span></p>
                    </li>                    
                    
                </ul>

                <div class="text-center"><a class="applyButton" href="/business-loan-application/step-1"><span>Start Protecting Your Credit Now</span></a></div>
            </div>
        </section>



    <div class="deliversSec sp-top-bottom">
        <div class="container">
            <div class="deliversSecFlex">
                <div class="c-partner_right-block sw43 mt-0">
                    <img class="simgRadius" src="assets/images/service-img2.jpg" alt="">
                </div>
                <div class="c-partner_left-block sw50">
                    <div class="c-partner_sticky">
                            <h2 class="pb-3">Key Features of Verifen Credit Monitoring</h2>                                     
                                <div class="staticPages">                           
                                    <ul class="backpack-list serviceList">
                                        <li>Real-time credit updates and alerts</li>
                                        <li>Historical credit trend tracking</li>
                                        <li>Personalized insights and improvement recommendations</li>
                                        <li>Alerts on errors, collections, or fraudulent activity</li>  
                                        <li>Integration with other Verifen financial services for seamless support</li>                                      
                                    </ul>
                                </div>                                
                                 
                        </div>
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
                            <h3 class="detailsTitle">Will monitoring hurt my credit score?</h3>
                        </summary>
                    </details>
                    <!-- The content -->
                    <div class="detailsDesc">
                        <div class="detailsDescInner">No. Monitoring uses a soft pull, which doesn’t affect your score.</div>
                    </div>
                </div>
                <div class="details">
                    <details class="detailsContainer">
                        <summary class="detailsSummary">
                            <!-- The title -->
                            <h3 class="detailsTitle">How often will I receive updates?</h3>
                        </summary>
                    </details>
                    <!-- The content -->
                    <div class="detailsDesc">
                        <div class="detailsDescInner">Changes are reported in real time, so you’ll always be informed immediately.</div>
                    </div>
                </div>
                <div class="details">
                    <details class="detailsContainer">
                        <summary class="detailsSummary">
                            <!-- The title -->
                            <h3 class="detailsTitle">Can monitoring help me secure loans faster?</h3>
                        </summary>
                    </details>
                    <!-- The content -->
                    <div class="detailsDesc">
                        <div class="detailsDescInner">Yes. By staying aware of your credit profile, you can address issues promptly and be ready when financing opportunities arise.</div>
                    </div>
                </div>

                <div class="text-center mt-5"><a class="applyButton" href="/business-loan-application/step-1"><span>Start Credit Monitoring Today</span></a></div>
               

            </div>
        </div>
    </div>
    
    
     <!-- ================ Ready to proceed Section ================ -->

     <div class="readytoproSec">
        <div class="container">  
             <h2>Ready to Grow Your Business?</h2>          
            <p>Stay ahead of financial changes and safeguard your business’s reputation with Verifen Credit 
                Monitoring. Proactive awareness isn’t optional , it’s essential.</p>
            <div class="flex">
                <a class="contactButton" href="/business-loan-application/step-1" target="_blank">Protect Your Business Credit Now</a>                
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

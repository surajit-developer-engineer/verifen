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
                                            <h3>SBA Loans</h3>
                                            <h2>Affordable Financing to Grow Your Business</h2>
                                            <p>Small businesses are the backbone of the economy, and they deserve 
                                                financing that empowers growth without creating financial strain. 
                                                Verifen SBA Loans provide low-interest, government-backed funding 
                                                with longer repayment terms , helping your business expand with 
                                                confidence.</p>
                                            <a class="applyButton" href="/business-loan-application/step-1"><span>Apply for an SBA Loan Today</span></a>
                                        </aside>
                                        <aside class="slider_right">
                                            <img src="{{ 'assets/images/sba-loans-banner.png' }}" alt="">
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
            <h2 class="ser-subHeading">The Challenge Small Businesses Face</h2>
            <p class="pb-3 ser-paragraph">Many entrepreneurs struggle to secure financing: </p>
            
            
            <div class="serviceBox-row">
                <div class="serviceBox">
                    <img src="assets/images/expert-icon_01.png" alt="">
                    </br>
                    <p>High interest rates on conventional loans</p>
                </div>
                <div class="serviceBox">
                    <img src="assets/images/expert-icon_02.png" alt="">
                     </br>
                    <p>Short repayment terms that strain cash flow</p>
                </div>
                <div class="serviceBox">
                    <img src="assets/images/expert-icon_03.png" alt="">
                    </br>
                    <p>Limited access to capital for expansion or equipment</p>
                </div>
                <div class="serviceBox">
                    <img src="assets/images/expert-icon_04.png" alt="">
                    </br>
                    <p>Complex, confusing application processes</p>
                </div>
            </div>
              <p>Verifen simplifies this process, giving you access to affordable funding while guiding you through every step.</p>         
            
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
                            <h2 class="pb-3">How Verifen SBA Loans Work</h2>
                                <p>SBA Loans are designed to support small businesses with longer repayment terms and lower interest rates, thanks to backing from the Small Business Administration. With Verifen:</p>     
                                <div class="staticPages">                           
                                    <ul class="backpack-list serviceList">
                                        <li><strong>Guided Application:</strong> We walk you through the SBA loan process step by step.</li>
                                        <li><strong>Affordable Terms: </strong> Low-interest rates and extended repayment schedules make funding manageable.</li>
                                        <li><strong>Transparent Process:</strong> Clear explanations of requirements, fees, and repayment schedules.</li>
                                        <li><strong>Ongoing Support:</strong> Assistance throughout the loan lifecycle to ensure your business succeeds.</li>
                                       
                                    </ul>
                                </div>
                                
                                <a class="applyButton mt-3" href="/business-loan-application/step-1">Start Your SBA Loan Application Now</a> 
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
                            <h2 class="pb-3">What You Need to Qualify</h2>
                             <p>To streamline your SBA loan approval, Verifen recommends preparing the following documentation:</p>        
                                <div class="staticPages">                           
                                    <ul class="backpack-list serviceList">
                                        <li><strong>Business Tax Returns:</strong>  Last 2 years of filed business tax returns</li>
                                        <li><strong>Personal Tax Returns:</strong>  Last 2 years of personal tax returns for business owners</li>
                                        <li><strong>Bank Statements:</strong> Most recent 6 months of business bank statements</li>
                                        <li><strong>Profit & Loss Statement:</strong> Most recent report showing revenue and expenses</li>
                                        <li><strong>Cash Flow Statement:</strong> Documenting inflows and outflows to demonstrate repayment ability</li>
                                        <li><strong>Balance Sheet:</strong> Overview of assets, liabilities, and equity</li>
                                        <li><strong>Business Licenses & Registrations: </strong> Proof of legal operations and compliance</li>
                                        <li><strong>Debt Schedule:</strong> Current debts and obligations</li>
                                        <li><strong>Ownership & Management Information:</strong> Details on all owners with 20%+ stake</li>
                                    </ul>
                                </div> 
                                <p>Having these documents ready helps us expedite your approval and ensures you qualify for the most favorable terms.</p>
                                
                                 <a class="applyButton mt-3" href="/business-loan-application/step-1">Check Your Eligibility for an SBA Loan</a>
                            </div>
                </div>

                <div class="c-partner_right-block sw43 mt-0">
                    <img class="simgRadius" src="assets/images/business-support.jpg" alt="">
                </div>
            </div>


        </div>
    </div>


     <div class="deliversSec sp-top-bottom">
        <div class="container">
            <div class="deliversSecFlex">
                <div class="c-partner_right-block sw43 mt-0">
                    <img class="simgRadius" src="assets/images/service-img2.jpg" alt="">
                </div>
                <div class="c-partner_left-block sw50">
                    <div class="c-partner_sticky">
                            <h2 class="pb-3">Benefits of Verifen SBA Loans</h2>                                     
                                <div class="staticPages">                           
                                    <ul class="backpack-list serviceList">
                                        <li><strong>Lower Interest Rates:</strong> Reduce financing costs and improve cash flow.</li>
                                        <li><strong>Longer Terms:</strong> Spread repayment over a manageable period.</li>
                                        <li><strong>Access to Larger Loans: </strong> SBA backing allows higher loan amounts than typical small business loans.</li>
                                        <li><strong>Business Growth Ready:</strong> Fund expansion, equipment, inventory, or working capital.</li>
                                        <li><strong>Expert Guidance:</strong> Navigate the SBA application process with ease.</li>                                       
                                    </ul>
                                </div>
                                
                                
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
                                <h2 class="pb-3">Beyond the Loan: Comprehensive Support</h2>
                                <p>Verifen goes beyond just funding. We provide guidance to ensure your business is fully prepared:</p>        
                                    <div class="staticPages">                           
                                        <ul class="backpack-list serviceList">
                                            <li><strong>Regulatory Guidance:</strong>   Ensure compliance with SBA and industry requirements.</li>
                                            <li><strong>Business Insurance Insights:</strong>  Protect assets and operations while leveraging financing.</li>
                                            <li><strong>Credit Preparation:</strong> Optimize your credit profile to qualify for better terms.</li>
                                            <li><strong>Financial Planning Support:</strong> Plan cash flow and repayment without compromising growth.</li>
                                        </ul>
                                    </div>                                      
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
                <p>Our SBA loan services are built on <strong>care, transparency, and delivery</strong>:</p>
                
                <ul class="whychoose-sec">
                    <li>
                        <figure>
                            <img src="assets/images/ventilation_2.png" class="fr-fic fr-dib " alt="Apply Online">
                        </figure>
                        <p>Care<span> We take time to understand your business goals and funding needs.</span></p>
                    </li>
                    <li>
                        <figure>
                            <img src="assets/images/insurance_1.png" class="fr-fic fr-dib " alt="Get Approved">
                        </figure>
                        <p>Transparency<span> Clear guidance and upfront terms prevent surprises.</span></p>
                    </li>
                    <li>
                        <figure>
                            <img src="assets/images/consulting_1.png" class="fr-fic fr-dib " alt="Receive Funds">
                        </figure>
                        <p>Delivery<span> Fast, reliable assistance throughout the application and funding process.</span></p>
                    </li>
                    
                </ul>

                <div class="text-center"><a class="applyButton" href="/business-loan-application/step-1"><span>Apply for Affordable SBA Financing Today</span></a></div>
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
                            <h3 class="detailsTitle">How long does the SBA loan process take?</h3>
                        </summary>
                    </details>
                    <!-- The content -->
                    <div class="detailsDesc">
                        <div class="detailsDescInner">Processing times vary, but Verifen’s guidance helps streamline approvals.</div>
                    </div>
                </div>
                <div class="details">
                    <details class="detailsContainer">
                        <summary class="detailsSummary">
                            <!-- The title -->
                            <h3 class="detailsTitle">What types of businesses qualify?</h3>
                        </summary>
                    </details>
                    <!-- The content -->
                    <div class="detailsDesc">
                        <div class="detailsDescInner">Most small businesses across industries qualify, provided they meet SBA criteria.</div>
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
                        <div class="detailsDescInner"> Never. Verifen ensures full transparency on all costs and requirements.</div>
                    </div>
                </div>

                <div class="text-center mt-5"><a class="applyButton" href="/business-loan-application/step-1"><span>Start Your SBA Loan Application Today</span></a></div>
               

            </div>
        </div>
    </div>
    
    
     <!-- ================ Ready to proceed Section ================ -->

     <div class="readytoproSec">
        <div class="container">  
             <h2>Ready to Grow Your Business?</h2>          
            <p>Affordable financing is key to sustainable growth. With Verifen SBA Loans, your business gains access to low-cost funding, expert guidance, and a partner invested in your success.</p>
            <div class="flex">
                <a class="contactButton" href="/business-loan-application/step-1" target="_blank">Apply Now and Grow Your Business</a>
                
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

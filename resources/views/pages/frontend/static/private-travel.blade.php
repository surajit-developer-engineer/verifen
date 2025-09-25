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
                                            <h3>Private Travel</h3>
                                            <h2>Your Personal Jet, Reimagined</h2>
                                            <p>Skip the hassle of commercial travel and experience true freedom in the sky 
                                                with Verifen Jet Charter. Our concierge-level service ensures every detail is handled , 
                                                from luggage and ground transportation to luxury dining , so you can focus on 
                                                what matters most: arriving refreshed, on time, and in style.</p>
                                            <a class="applyButton" href="/business-loan-application/step-1"><span>Book Your Private Jet Experience Today</span></a>
                                        </aside>
                                        <aside class="slider_right">
                                            <img src="{{ 'assets/images/private-travel-banner.png' }}" alt="">
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
            <h2 class="ser-subHeading">The Problem with Traditional Travel</h2>
            <p class="pb-3 ser-paragraph">Commercial flights are stressful: </p>
            
            
            <div class="serviceBox-row">
                <div class="serviceBox">
                    <img src="assets/images/expert-icon_01.png" alt="">
                    </br>
                    <p>Long security lines and crowded airports</p>
                </div>
                <div class="serviceBox">
                    <img src="assets/images/expert-icon_02.png" alt="">
                     </br>
                    <p>Unpredictable delays and cancellations</p>
                </div>
                <div class="serviceBox">
                    <img src="assets/images/expert-icon_03.png" alt="">
                    </br>
                    <p>Impersonal service and cramped spaces</p>
                </div>
                <div class="serviceBox">
                    <img src="assets/images/expert-icon_04.png" alt="">
                    </br>
                    <p>Hidden fees that drive up costs</p>
                </div>
            </div>
              <p>Traditional private charters solve some problems but often come with opaque pricing and 
                limited support. That’s where Verifen Jet Charter redefines the experience.</p>         
            
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
                            <h2 class="pb-3">How Verifen Jet Charter Works</h2>
                                <p>We combine transparency, care, and concierge-level delivery to make every trip effortless: </p>     
                                <div class="staticPages">                           
                                    <ul class="backpack-list serviceList">
                                        <li><strong>Flexible Scheduling:</strong> Flights that fit your schedule, not the airline’s.</li>
                                        <li><strong>Concierge Service:</strong> Luggage, ground transportation, dining, and in-flight preferences handled seamlessly.</li>
                                        <li><strong>Transparent Pricing:</strong> Competitive rates with no hidden fees or last-minute surprises.</li>
                                        <li><strong>VIP Experience:</strong> Privacy, comfort, and full attention from takeoff to landing.</li>
                                       
                                    </ul>
                                </div>
                                
                                <a class="applyButton mt-3" href="/business-loan-application/step-1">Discover Stress-Free Private Travel</a> 
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
                            <h2 class="pb-3">Benefits of Flying with Verifen Jet Charter</h2>
                                     
                                <div class="staticPages">                           
                                    <ul class="backpack-list serviceList">
                                        <li><strong>Time Efficiency:</strong> Skip long airport lines and unnecessary delays.</li>
                                        <li><strong>Stress-Free Travel:</strong> Concierge service handles every detail.</li>
                                        <li><strong>Flexibility:</strong> Change your itinerary if your schedule shifts.</li>
                                        <li><strong>Luxury and Comfort:</strong> Personalized in-flight amenities tailored to your needs.</li>
                                        <li><strong>Transparent Costs:</strong> Know the full price upfront, no surprises.</li>
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


     <div class="deliversSec sp-top-bottom">
        <div class="container">
            <div class="deliversSecFlex">
                <div class="c-partner_right-block sw43 mt-0">
                    <img class="simgRadius" src="assets/images/business-support.jpg" alt="">
                </div>
                <div class="c-partner_left-block sw50">
                    <div class="c-partner_sticky">
                            <h2 class="pb-3">Beyond the Flight: Complete Business Travel Support</h2>
                                <p>Verifen goes beyond just flying you from point A to B. Our private travel service integrates with the broader needs of business and VIP travelers: </p>     
                                <div class="staticPages">                           
                                    <ul class="backpack-list serviceList">
                                        <li><strong>Ground Transportation Coordination: </strong> From your office to the airport, we handle logistics.</li>
                                        <li><strong>Luxury Accommodation Assistance: </strong> Concierge help for hotels and stays at your destination.</li>
                                        <li><strong>Event & Meeting Coordination: </strong> We assist with timing, setup, and arrivals to ensure you’re always prepared.</li>
                                        <li><strong>Regulatory Compliance: </strong> All flights and logistics comply with aviation regulations and safety standards.</li>
                                       
                                    </ul>
                                </div>
                                
                                
                        </div>
                </div>
            </div>
        </div>
    </div>




    <section id="howitworks" class="howitWorksSec sp-top-bottom">
            <div class="container">
                <h2>Why Choose Verifen?</h2>
                <p>We built our jet charter service around <strong>care, transparency, and delivery</strong>:</p>
                
                <ul class="whychoose-sec">
                    <li>
                        <figure>
                            <img src="assets/images/ventilation_2.png" class="fr-fic fr-dib " alt="Apply Online">
                        </figure>
                        <p>Care<span> Every detail, from luggage to in-flight meals, is tailored to your preferences.</span></p>
                    </li>
                    <li>
                        <figure>
                            <img src="assets/images/insurance_1.png" class="fr-fic fr-dib " alt="Get Approved">
                        </figure>
                        <p>Transparency<span> Full pricing and service details provided upfront.</span></p>
                    </li>
                    <li>
                        <figure>
                            <img src="assets/images/consulting_1.png" class="fr-fic fr-dib " alt="Receive Funds">
                        </figure>
                        <p>Delivery<span> Reliable, punctual, and professional service ensures a seamless journey every time.</span></p>
                    </li>
                    
                </ul>

                <div class="text-center"><a class="applyButton" href="/business-loan-application/step-1"><span>Book Your Private Jet Today</span></a></div>
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
                            <h3 class="detailsTitle">Are the rates competitive?</h3>
                        </summary>
                    </details>
                    <!-- The content -->
                    <div class="detailsDesc">
                        <div class="detailsDescInner">Yes. Verifen Jet Charter offers transparent, competitive pricing without hidden fees.</div>
                    </div>
                </div>
                <div class="details">
                    <details class="detailsContainer">
                        <summary class="detailsSummary">
                            <!-- The title -->
                            <h3 class="detailsTitle">Can my travel itinerary change last minute?</h3>
                        </summary>
                    </details>
                    <!-- The content -->
                    <div class="detailsDesc">
                        <div class="detailsDescInner">Yes. Our flexible scheduling accommodates your changing needs whenever possible.</div>
                    </div>
                </div>
                <div class="details">
                    <details class="detailsContainer">
                        <summary class="detailsSummary">
                            <!-- The title -->
                            <h3 class="detailsTitle"> Is concierge service included?</h3>
                        </summary>
                    </details>
                    <!-- The content -->
                    <div class="detailsDesc">
                        <div class="detailsDescInner">Absolutely. Our team handles luggage, ground transport, and in-flight requests.</div>
                    </div>
                </div>

                <div class="text-center mt-5"><a class="applyButton" href="/business-loan-application/step-1"><span>Experience Stress-Free Private Travel Today</span></a></div>
               

            </div>
        </div>
    </div>
    
    
     <!-- ================ Ready to proceed Section ================ -->

     <div class="readytoproSec">
        <div class="container">  
             <h2>Ready to Grow Your Business?</h2>          
            <p>Reimagine what travel can be. With Verifen Jet Charter, you’ll enjoy privacy, luxury, and peace of mind , all at transparent, competitive rates.</p>
            <div class="flex">
                <a class="contactButton" href="/business-loan-application/step-1" target="_blank">Book Your Private Jet Experience Now</a>
                
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

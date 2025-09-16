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

    <!-- ================ Banner Section ================ -->
     <section class="home-banner-sec">
        <div class="landingbannerSec">
            <div class="container">
                <div class="lanbannerBg">
                     <div class="lanban-img-holder">
                        <img src="{{ 'assets/images/home-banner.png' }}">
                    </div>
                    <div class="lanban-con-holder">
                        <h3>Your Partner in Business Growth</h3>
                        <h2>Grow Your Business Without Limits</h2>
                        <p>Access the capital you need to expand, innovate, and succeed. Verifen
                            empowers businesses with quick,
                            transparent, and affordable funding solutions tailored to meet your goals.
                        </p>
                        <a class="applyButton" href="{{ route('business.loan.application.step-1') }}"
                            target="_blank"><span>Apply Now</span></a>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>


    <!-- <section class="home-banner-sec">
        <div id="carouselExampleControls" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item itembg1 active">
                    <div class="featured_img_overlay">
                        <div class="bnr-caption">
                            <div class="container">
                                <div class="bdFlex">
                                    <aside class="slider_left">
                                        <h3>Your Partner in Business Growth</h3>
                                        <h2>Grow Your Business Without Limits</h2>
                                        <p>Access the capital you need to expand, innovate, and succeed. Verifen
                                            empowers businesses with quick,
                                            transparent, and affordable funding solutions tailored to meet your goals.
                                        </p>
                                        <a class="applyButton" href="{{ route('business.loan.application.step-1') }}"
                                            target="_blank"><span>Apply Now</span></a>
                                    </aside>
                                    <aside class="slider_right">
                                        <img src="{{ 'assets/images/slider_img01.png' }}" alt="">
                                    </aside>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
        <img src="{{ 'assets/images/home-banner-2.jpg' }}" alt="">
        <div class="bnr-caption">
          <div class="container">
            <aside class="fadeInLeft animated">
              <h2><span>Welcome to </span>Elite Global Travel</h2>
              <p>Going beyond your expectations is our greatest satisfaction</p>
            </aside>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ 'assets/images/home-banner-3.jpg' }}" alt="">
        <div class="bnr-caption">
          <div class="container">
            <aside class="fadeInLeft animated">
              <h2><span>Welcome to </span>Elite Global Travel</h2>
              <p>Going beyond your expectations is our greatest satisfaction</p>
            </aside>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ 'assets/images/home-banner-4.jpg' }}" alt="">
        <div class="bnr-caption">
          <div class="container">
            <aside class="fadeInLeft animated">
              <h2><span>Welcome to </span>Elite Global Travel</h2>
              <p>Going beyond your expectations is our greatest satisfaction</p>
            </aside>
          </div>
        </div>
      </div>
            </div>
            <a class="bnr-carousel-cntrl carousel-control-prev" data-bs-target="#carouselExampleControls" data-bs-slide="prev"></a>
    <a class="bnr-carousel-cntrl carousel-control-next" data-bs-target="#carouselExampleControls" data-bs-slide="next"></a>
        </div>
    </section> -->

    <!-- ================ Logo Section ================ -->

    <div class="logoSec">
        <div class="container">
            <ul class="logoFlex">
                <!-- <li><img class="fr-fic" src="{{ 'assets/images/bbb_transparent.png' }}" alt=""></li>
                <li>
                    <h3>As Seen On:</h3>
                </li> -->
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
                        <img class="maxWidth130" alt="startribune" src="{{ 'assets/images/msn-logo.png' }}"></a>
                </li>
                <li><a href="#" target="_blank">
                        <img class="maxWidth130" alt="fox" src="{{ 'assets/images/yahoo-logo.png' }}"></a>
                </li>
            </ul>
        </div>
    </div>


    <!-- ================ About Section ================ -->

    <!-- ================ Featured Brands Section Start ================ -->
    <section class="brands-sec about-us-sec">
        <div class="container">
            <h2>Funding is Just the Start. </br>We Build Empires.</h2>
            <p class="pb-3">At Verifen, we don’t just fund businesses, we fuel their evolution.
                From powerful strategy to cutting edge branding, we help business owners build smarter, grow faster, and
                outperform
                the competition. Whether you're scaling or starting fresh, Verifen delivers expert backed solutions
                every step of the way.
            </p>

            <div class="owl-carousel owl-theme featuredBrands-carousel">
                <div class="item">
                    <div class="brands-box">
                        <div class="featured-icon-holder">
                            <img class="maxWidth130" alt="Business Strategy"
                                src="{{ 'assets/images/icon-111.png' }}">
                        </div>
                        <h4>Business Strategy</h4>
                        <h3>Plan Smart. Execute Bold.</h3>
                        <p>Our expert advisors work closely with you to craft a winning business strategy, aligning
                            operations,
                            vision, and resources for long-term success. We don’t guess. We guide with data and
                            experience.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="brands-box">
                        <div class="featured-icon-holder">
                            <img class="maxWidth130" alt="Business Strategy"
                                src="{{ 'assets/images/icon-222.png' }}">
                        </div>
                        <h4>Marketing & Optimization</h4>
                        <h3>Marketing That Moves the Needle</h3>
                        <p>We help you launch and refine high-impact marketing campaigns, from digital ads to conversion
                            funnels.
                            All tailored to attract more of your ideal customers and maximize ROI.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="brands-box">
                        <div class="featured-icon-holder">
                            <img class="maxWidth130" alt="Business Strategy"
                                src="{{ 'assets/images/icon-333.png' }}">
                        </div>
                        <h4>Sales & Growth</h4>
                        <h3>Accelerate Sales. Amplify Growth.</h3>
                        <p>Our sales specialists help you build and optimize sales systems that close more deals,
                            improve retention,
                            and drive predictable revenue growth, without wasting time or budget.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="brands-box">
                        <div class="featured-icon-holder">
                            <img class="maxWidth130" alt="Business Strategy"
                                src="{{ 'assets/images/icon-444.png' }}">
                        </div>
                        <h4>Business Model Analysis</h4>
                        <h3>See What’s Working. Fix What’s Not.</h3>
                        <p>We break down your business model to uncover hidden inefficiencies, missed opportunities, and
                            scalable advantages, so you can run leaner, smarter, and more profitably.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="brands-box">
                        <div class="featured-icon-holder">
                            <img class="maxWidth130" alt="Business Strategy"
                                src="{{ 'assets/images/icon-555.png' }}">
                        </div>
                        <h4>Technology Integration</h4>
                        <h3>Smarter Tech. Smoother Operations.</h3>
                        <p>From CRM systems to automation tools, we help you integrate the right tech stack to
                            streamline
                            processes, improve customer experience, and future proof your operations.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="brands-box">
                        <div class="featured-icon-holder">
                            <img class="maxWidth130" alt="Business Strategy"
                                src="{{ 'assets/images/icon-666.png' }}">
                        </div>
                        <h4>Branding & Identity</h4>
                        <h3>Build a Brand They Remember</h3>
                        <p>Stand out with a powerful brand identity that resonates. We help define your voice, design,
                            and message. Making your business unforgettable in a crowded market.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ================ Featured Brands Section End ================ -->




    <!-- ================ About Section ================ -->
    <section class="about-us-sec">
        <div class="container">
            <h2>Grow Your Business Without Compromise</h2>
            <p>Every business journey has challenges, but financial hurdles shouldn’t hold you back. Whether you're
                managing cash flow, expanding operations, or investing in growth opportunities, Verifen provides the
                financial
                support you need without the drawbacks of traditional lending.</p>
            <div class="egt-row">
                <figure>
                    <img src="{{ 'assets/images/expert-icon_01.png' }}" alt="">
                    <h5><span>Transparent </span>Funding </h5>
                    <p>No gimmicks, no hustle. <br />Straightforward process.</p>
                </figure>
                <figure>
                    <img src="{{ 'assets/images/expert-icon_02.png' }}" alt="">
                    <h5><span>Same-Day </span> Approval</h5>
                    <p>No waiting, no hassle</p>
                </figure>
                <figure>
                    <img src="{{ 'assets/images/expert-icon_03.png' }}" alt="">
                    <h5><span>Funds Delivered</span> in 48 Hours </h5>
                    <p>Timely support when you <br />need it most.</p>
                </figure>
            </div>
        </div>
    </section>

    <!-- ================ Service Section ================ -->

    <div class="servicesSec">
        <div class="container">
            <h2>Our Services</h2>
            <div class="servicesGrid">
                <div class="servicesCol">
                    <div class="servicesImgHolder">
                        <img src="{{ 'assets/images/business-loans.png' }}" alt="">
                    </div>
                    <div class="servicesContentHolder">
                        <h3>Business Loans</h3>
                        <p>Fuel your growth with flexible business loans designed to meet your needs. At Verifen, 
                            we provide straightforward funding without hidden fees or gimmicks, so you can focus on 
                            building your business with confidence.</p>
                        <a class="moreBtn" href="javascript:void(0)"><span>Read More</span> <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="servicesCol">
                    <div class="servicesImgHolder">
                        <img src="{{ 'assets/images/consultation.png' }}" alt="">
                    </div>
                    <div class="servicesContentHolder">
                        <h3>Consultation</h3>
                        <p>Success starts with the right strategy. Our consultations give you clear, actionable 
                            guidance built on proven formulas that work across industries, helping you create a path 
                            to lasting business growth.</p>
                        <a class="moreBtn" href="javascript:void(0)"><span>Read More</span> <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="servicesCol">
                    <div class="servicesImgHolder">
                        <img src="{{ 'assets/images/credit-repair.png' }}" alt="">
                    </div>
                    <div class="servicesContentHolder">
                        <h3>Credit Repair</h3>
                        <p>A strong credit profile opens doors to better financing. We work with you to identify issues, 
                            repair your credit, and position your business to qualify for the funding it deserves.</p>
                        <a class="moreBtn" href="javascript:void(0)"><span>Read More</span> <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="servicesCol">
                    <div class="servicesImgHolder">
                        <img src="{{ 'assets/images/credit-monitoring.png' }}" alt="">
                    </div>
                    <div class="servicesContentHolder">
                        <h3>Credit Monitoring</h3>
                        <p>Stay ahead with real-time credit monitoring. Our service keeps you informed, protects your 
                            business reputation, and ensures you’re always ready when the right funding 
                            opportunity comes along.</p>
                        <a class="moreBtn" href="javascript:void(0)"><span>Read More</span> <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="servicesCol">
                    <div class="servicesImgHolder">
                        <img src="{{ 'assets/images/line-credit.png' }}" alt="">
                    </div>
                    <div class="servicesContentHolder">
                        <h3>Line of Credit</h3>
                        <p>Access funds when you need them with a flexible line of credit. Whether it’s 
                            managing expenses or seizing new opportunities, Verifen ensures you have reliable 
                            capital at your fingertips.</p>
                        <a class="moreBtn" href="javascript:void(0)"><span>Read More</span> <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="servicesCol">
                    <div class="servicesImgHolder">
                        <img src="{{ 'assets/images/sba-loans.png' }}" alt="">
                    </div>
                    <div class="servicesContentHolder">
                        <h3>SBA Loans</h3>
                        <p>Grow with affordable financing backed by the Small Business Administration. 
                            Our SBA loans provide lower rates and longer terms, making it easier for your business 
                            to expand with peace of mind.</p>
                        <a class="moreBtn" href="javascript:void(0)"><span>Read More</span> <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>


                <div class="servicesCol">
                    <div class="servicesImgHolder">
                        <img src="{{ 'assets/images/term-loans.png' }}" alt="">
                    </div>
                    <div class="servicesContentHolder">
                        <h3>Term Loans</h3>
                        <p>Plan for the future with fixed-rate term loans tailored to your business goals. 
                            Whether investing in new equipment or scaling operations, you’ll benefit from 
                            clear terms and no surprises.</p>
                        <a class="moreBtn" href="javascript:void(0)"><span>Read More</span> <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="servicesCol">
                    <div class="servicesImgHolder">
                        <img src="{{ 'assets/images/working-capital.png' }}" alt="">
                    </div>
                    <div class="servicesContentHolder">
                        <h3>Working Capital</h3>
                        <p>Keep your operations running smoothly with working capital solutions that put cash flow within reach. 
                            Verifen helps you cover day-to-day expenses while staying focused on long-term success.</p>
                        <a class="moreBtn" href="javascript:void(0)"><span>Read More</span> <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="servicesCol">
                    <div class="servicesImgHolder">
                        <img src="{{ 'assets/images/private-travel.png' }}" alt="">
                    </div>
                    <div class="servicesContentHolder">
                        <h3>Private Travel</h3>
                        <p>Your Personal Jet, Reimagined. Skip the hassle of commercial travel and discover Verifen Jet Charter. 
                            Our concierge team ensures every detail is handled, from luggage to luxury dining, 
                            while you enjoy private, stress-free travel at transparent, competitive rates.</p>
                        <a class="moreBtn" href="javascript:void(0)"><span>Read More</span> <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <!-- ================ Membership How It Works Section ================ -->
    {{-- <section id="membership" class="memberhowitWorksSec">
        <div class="container">
            <h2>Revolutionizing Membership Funding with Zero Interest</h2>
            <p>At Verifen, we're redefining the way you access financial support. As a member, you can secure
                funding with zero interest, <br />making it easier than ever to manage your financial needs.</p>
            <h3>How It Works:</h3>
            <ul>
                <li>
                    <figure>
                        <img src="{{ 'assets/images/ventilation_2.png' }}" class="fr-fic fr-dib "
                            alt="Apply Online">
                    </figure>
                    <p>Membership Access: <span>Become a Verifen member to unlock exclusive access to funding with no
                            interest charges.</span></p>
                </li>
                <li>
                    <figure>
                        <img src="{{ 'assets/images/insurance_1.png' }}" class="fr-fic fr-dib " alt="Get Approved">
                    </figure>
                    <p>Affordable Repayments: <span>Enjoy flexible repayment terms with a minimum of just 10% of your
                            balance paid back each month.</span></p>
                </li>
                <li>
                    <figure>
                        <img src="{{ 'assets/images/consulting_1.png' }}" class="fr-fic fr-dib "
                            alt="Receive Funds">
                    </figure>
                    <p>Simple Fees: <span>A monthly membership fee applies, giving you access to our funding platform
                            and services.</span></p>
                </li>
                <li>
                    <figure>
                        <img src="{{ 'assets/images/accounts-tax_12.png' }}" class="fr-fic fr-dib "
                            alt="Receive Funds">
                    </figure>
                    <p>Penalties for Late Payments: <span>To ensure a smooth experience for all members, a 3% penalty
                            will be applied if monthly
                            repayments or membership fees are not received on time.</span></p>
                </li>

            </ul>
        </div>
    </section> --}}

    <!-- ================ Membership Plans Section ================ -->
    {{-- <section class="membershipPlanSec">
        <div class="container">
            <section class="pricing-section">
                <div class="container">
                    <div class="sec-title text-center">
                        <h2>Membership Plans:</h2>
                    </div>

                    <div class="outer-box">
                        <div class="row">
                            <!-- Pricing Block -->
                            <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                                <div class="inner-box">
                                    <div class="icon-box">
                                        <div class="icon-outer"><i class="fa fa-paper-plane"></i></div>
                                    </div>
                                    <div class="price-box">
                                        <div class="title"> Silver Plan</div>
                                    </div>
                                    <ul class="features">
                                        <li class="true">Available Capital: Up to $25,000</li>
                                        <li class="true">Membership Fee: $1,500/month</li>
                                        <li class="true">Minimum Repayment: 10% monthly</li>
                                        <li class="false">Penalty for Late Payment: 3%</li>
                                        <li class="true interIcon"><strong>0% Interest</strong></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Pricing Block -->
                            <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp"
                                data-wow-delay="400ms">
                                <div class="inner-box">
                                    <div class="icon-box">
                                        <div class="icon-outer"><i class="fa fa-star"></i></div>
                                    </div>
                                    <div class="price-box">
                                        <div class="title">Gold Plan</div>
                                    </div>
                                    <ul class="features">
                                        <li class="true">Available Capital: $30,000 - $50,000</li>
                                        <li class="true">Membership Fee: $2,500/month</li>
                                        <li class="true">Minimum Repayment: 10% monthly</li>
                                        <li class="true">Penalty for Late Payment: 3%</li>
                                        <li class="true interIcon"><strong>0% Interest</strong></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Pricing Block -->
                            <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp"
                                data-wow-delay="800ms">
                                <div class="inner-box">
                                    <div class="icon-box">
                                        <div class="icon-outer"><i class="fa fa-rocket"></i></div>
                                    </div>
                                    <div class="price-box">
                                        <div class="title">Platinum Plan</div>
                                    </div>
                                    <ul class="features">
                                        <li class="true">Available Capital: $50,000 - $100,000</li>
                                        <li class="true">Membership Fee: $3,500/month</li>
                                        <li class="true">Minimum Repayment: 10% monthly</li>
                                        <li class="true">Penalty for Late Payment: 3%</li>
                                        <li class="true interIcon"><strong>0% Interest</strong></li>
                                    </ul>
                                </div>
                            </div>


                            <!-- Pricing Block -->
                            <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                                <div class="inner-box">
                                    <div class="icon-box">
                                        <div class="icon-outer"><i class="fa fa-bandcamp"></i></div>
                                    </div>
                                    <div class="price-box">
                                        <div class="title">Black Plan</div>
                                    </div>
                                    <ul class="features">
                                        <li class="true">Funding Amount: $100,000 - $250,000</li>
                                        <li class="true">Membership Fee: $5,000/month</li>
                                        <li class="true">Minimum Repayment: 10% monthly</li>
                                        <li class="false">Penalty for Late Payment: 3%</li>
                                        <li class="true interIcon"><strong>0% Interest</strong></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Pricing Block -->
                            <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp"
                                data-wow-delay="400ms">
                                <div class="inner-box">
                                    <div class="icon-box">
                                        <div class="icon-outer"><i class="fa fa-diamond"></i></div>
                                    </div>
                                    <div class="price-box">
                                        <div class="title">Diamond Plan</div>
                                    </div>
                                    <ul class="features">
                                        <li class="true">Funding Amount: $250,000 - $500,000</li>
                                        <li class="true">Membership Fee: $7,500/month</li>
                                        <li class="true">Minimum Repayment: 10% monthly</li>
                                        <li class="true">Penalty for Late Payment: 3%</li>
                                        <li class="true interIcon"><strong>0% Interest</strong></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Pricing Block -->
                            <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp"
                                data-wow-delay="800ms">
                                <div class="inner-box">
                                    <div class="icon-box">
                                        <div class="icon-outer"><i class="fa fa-bomb"></i></div>
                                    </div>
                                    <div class="price-box">
                                        <div class="title">Diamond Preferred Plan</div>
                                    </div>
                                    <ul class="features">
                                        <li class="true">Funding Amount: $500,000 - $1,000,000</li>
                                        <li class="true">Membership Fee: $10,000/month</li>
                                        <li class="true">Minimum Repayment: 10% monthly</li>
                                        <li class="true">Penalty for Late Payment: 3%</li>
                                        <li class="true interIcon"><strong>0% Interest</strong></li>
                                    </ul>
                                </div>
                            </div>



                        </div>
                    </div>

                    <h3>Why Choose Verifen Membership?</h3>
                    <ul>
                        <li class="number01"><strong>Zero Interest:</strong> All funding plans come with zero interest,
                            helping you save on costs.</li>
                        <li class="number02"><strong>Flexible Repayments:</strong> We understand life happens, so you
                            have the option to repay as you go with a manageable monthly commitment.</li>
                        <li class="number03"><strong>Transparency:</strong> No hidden fees, just clear, straightforward
                            terms.</li>
                    </ul>
                    <p>Ready to get started? Select the membership plan that fits your needs and unlock funding to take
                        your financial goals to the next level.</p>
                    <p>At Verifen, we’re committed to helping you take control of your finances with transparent,
                        straightforward terms. Join us today and start benefiting from smarter, interest-free funding.
                    </p>
                    <div class="text-center mt-30"><a class="applyButton" href="{{ route('application') }}"
                            target="_blank">Become a Member</a></div>
                </div>
            </section>
        </div>
    </section> --}}

    <!-- ================ Delivers Section ================ -->
        <div class="deliversSec">
        <div class="section-6 color">
            <div class="container">
                <div class="div-block-54">
                    <div class="c-partner deliversSecFlex">
                        <div class="c-partner_right-block">
                            <div data-w-id="f9d19a92-f731-f2d8-8a7b-3110b461759c" class="c-partner_stacked">
                            <div class="c-dev_card _01 cc-shadow white" 
                            style="will-change: transform; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) 
                            rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                <div class="c-dev_process">
                                    <h3>Home Care Business Accelerates with $120,000 in Smart, Strategic Capital.</h3>			
                                </div>
                                <img src="{{ 'assets/images/deliversSec-img1.png' }}" loading="lazy"
                                sizes="(max-width: 767px) 100vw, (max-width: 991px) 728px, 940px" 
                                srcset="{{ 'assets/images/deliversSec-img1.png' }} 500w, 
                                {{ 'assets/images/deliversSec-img1.png' }} 800w, 
                                {{ 'assets/images/deliversSec-img1.png' }} 1080w, 
                                {{ 'assets/images/deliversSec-img1.png' }} 1366w" alt="" 
                                class="image-20">
                                </div>
                                <div class="c-dev_card _01 cc-shadow white" 
                                style="will-change: transform; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) 
                                rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                <div class="c-dev_process">
                                    <h3>$60,000 in Fast Funding Fuels Inventory Surge for Scaling eCommerce Store</h3>				
                                </div>
                                    <img src="{{ 'assets/images/deliversSec-img2.png' }}" loading="lazy" 
                                    sizes="(max-width: 767px) 100vw, (max-width: 991px) 728px, 940px" 
                                    srcset="{{ 'assets/images/deliversSec-img2.png' }} 500w, 
                                    {{ 'assets/images/deliversSec-img2.png' }} 800w, 
                                    {{ 'assets/images/deliversSec-img2.png' }} 1080w, 
                                    {{ 'assets/images/deliversSec-img2.png' }} 1366w" alt="" 
                                    class="image-20">
                                </div>
                                    <div class="c-dev_card _01 cc-shadow white" 
                                    style="will-change: transform; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) 
                                    rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                    <div class="c-dev_process">
                                        <h3>$30,000 Delivered to Upgrade Salon Interiors and Boost Client Experience.</h3>					
                                    </div>
                                    <img src="{{ 'assets/images/deliversSec-img3.png' }}" loading="lazy"
                                    sizes="(max-width: 767px) 100vw, (max-width: 991px) 728px, 940px" 
                                    srcset="{{ 'assets/images/deliversSec-img3.png' }} 500w, 
                                    {{ 'assets/images/deliversSec-img3.png' }} 800w, 
                                    {{ 'assets/images/deliversSec-img3.png' }} 1080w, 
                                    {{ 'assets/images/deliversSec-img3.png' }} 1366w" alt="" 
                                    class="image-20">
                                </div>
                                <div class="c-dev_card _01 cc-shadow white" 
                                style="will-change: transform; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) 
                                rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                <div class="c-dev_process">
                                    <h3>$200,000 Funded to Expand Clinic Operations and Add Diagnostic Equipment.</h3>				
                                </div>
                                    <img src="{{ 'assets/images/deliversSec-img4.png' }}" loading="lazy" sizes="100vw" 
                                    srcset="{{ 'assets/images/deliversSec-img4.png' }} 500w, 
                                    {{ 'assets/images/deliversSec-img4.png' }} 800w, 
                                    {{ 'assets/images/deliversSec-img4.png' }} 1080w, 
                                    {{ 'assets/images/deliversSec-img4.png' }} 1366w" alt="" 
                                    class="image-20">
                                </div>
                                
                            </div>
                        </div>
                        
                    <div class="c-partner_left-block">
                        <div class="c-partner_sticky">
                            <h2>Fuel your vision. Unlock your success.</h2>
                                <p>A stronger, smarter business starts with the right support. Verifen delivers.</p>                                
                                <div class="contFlex mt-3">
                                    <div class="conInfoBox w48p">
                                        <h4 style="display:flex; justify-content:center">
                                            <div class="stat-number">10</div>
                                            <span>K+</span>
                                        </h4>  
                                        <p class="strongerText">Businesses Analyzed.</p>
                                    </div>
                                    <div class="conInfoBox w48p">
                                        <h4 style="display:flex; justify-content:center">
                                            <span>$</span>
                                            <div class="stat-number">75</div>
                                            <span>M+</span>
                                        </h4>                            
                                        <p class="strongerText">Funded to Growing Businesses.</p>
                                    </div>
                                    <div class="conInfoBox w48p">
                                        <h4 style="display:flex; justify-content:center">                                
                                            <div class="stat-number">500</div>
                                            <span>+</span>
                                        </h4>                            
                                        <p class="strongerText">Entrepreneurs Empowered.</p>
                                    </div>
                                    <div class="conInfoBox w48p">
                                        <h4 style="display:flex; justify-content:center">                                
                                            <div class="stat-number">10</div>
                                            <span>+</span>
                                        </h4>                             
                                        <p class="strongerText">Years of Proven Business Support</p>
                                    </div>
                                </div>
                                <a class="applyButton mt-3" href="#">Check Your Eligibility</a> 
                        </div>
                    </div>
                        
                </div>
                </div>
                </div>
                </div>
        </div>

   



    <!-- ================ Transparency Section ================ -->
    <div class="transparencySec">
        <div class="fixedContent">
            <div class="transparencySecRow">
                <div class="column11 mobText-center">
                    <h2>Where Transparency Meets Opportunity</h2>
                    <p>At Verifen, we believe that trust is the foundation of every successful partnership.
                        Unlike many lenders who operate in the shadows with fake names and questionable practices,
                        Verifen prides itself on complete transparency. We are here to help you grow your business,
                        not just by providing the capital you need but by offering the tools and insights to take your
                        business to the next level.
                    </p>
                    <p>We understand that businesses seeking funding often need support in other critical areas of
                        operation. That’s why Verifen goes beyond lending. From operational strategies and regulatory
                        guidance to marketing and growth planning, we’re your partner in success.</p>


                    <h3>Meet Our Team</h3>
                    <ol>
                        <li>
                            <p>At Verifen, our leadership team brings a wealth of experience across the service, finance, marketing, 
                                and retail industries. With a strong foundation in entrepreneurship and a deep understanding of what 
                                it takes to grow and sustain a successful business, our team is committed to helping you navigate 
                                your biggest challenges with clarity and strategy. We know every business is unique. That’s why our 
                                approach is hands-on, personalized, and focused on real results. Whether you're seeking growth, 
                                stability, or a fresh start, we're here to help you unlock your full potential and thrive.</p>
                            <!-- <p><a
                                    href="https://calendly.com/nathan-vaknin">{{ env('TESTER_FULL_NAME', 'Daniel Joseph') }}</a>,
                                founder and CEO of Verifen, is a serial
                                entrepreneur with
                                extensive
                                experience in the service, finance, marketing, and retail industries, just to name a
                                few.
                                His diverse background and hands-on expertise allow him to understand your challenges
                                and
                                craft solutions tailored to your needs. {{ env('TESTER', 'Joseph') }}’s passion is
                                helping
                                businesses like yours
                                unlock their full potential and thrive.</p> -->
                        </li>
                        <li>
                            <p>Take the first step toward transforming your business. Schedule a 30 minute consultation and discover 
                                how Verifen can help you achieve your goals. This could be the moment that changes the future of your 
                                company.</p>
                        </li>

                    </ol>
                    <div class="layoutBlock mobFlex">
                        <a class="applyButton mt-30" href="https://calendly.com/{{ env('CALENDLY_SLUG') }}"
                            target="_blank">Schedule Your Consultation</a>
                    </div>

                </div>
                <div class="column22">
                    <figure>
                        <img src="{{ 'assets/images/direct-funders-bright-final-img05.png' }}" class="fr-fic fr-dib "
                            alt="Direct-Funders">
                    </figure>
                </div>
            </div>
        </div>
    </div>




    <!-- ================ Services Section ================ -->
    <div id="Verifen" class="directFunders">
        <div class="fixedContent">
            <div class="directFundersRow">
                <div class="column2">
                    <figure>
                        <img src="{{ 'assets/images/direct-funders-bright-final-img03.png' }}" class="fr-fic fr-dib "
                            alt="Direct-Funders">
                    </figure>
                </div>
                <div class="column1 mobText-center">
                    <h2>Why Verifen?</h2>
                    <p>The merchant cash advance industry is often plagued by high interest rates, hidden fees,
                        and gimmicks that exploit businesses. Verifen stands out by offering a refreshing alternative.
                    </p>
                    <h3>Here’s what makes us different:</h3>
                    <ol>
                        <li>
                            <h4>Lowest Industry Rates</h4>
                            <p>Keep more of your profits with our competitive, transparent pricing. We minimize loan
                                fees, closing costs, and eliminate silly surprises.</p>
                        </li>
                        <li>
                            <h4>Simple, Streamlined Process</h4>
                            <p>Skip the paperwork overload. Our digital-first application process is designed for speed
                                and simplicity, ensuring you get funding fast.</p>
                        </li>
                        <li>
                            <h4>Customized Solutions for Your Business</h4>
                            <p>No cookie-cutter loans, our funding is tailored to your unique needs, helping you make
                                the
                                most of your capital.</p>
                        </li>
                        <li>
                            <h4>Resources Beyond Funding</h4>
                            <p>We go beyond financing to provide actionable insights and tools to optimize your
                                operations, marketing, and business strategy.</p>
                        </li>
                    </ol>

                </div>
            </div>
        </div>
    </div>


    <!-- ================ How It Works Section ================ -->
    <section id="howitworks" class="howitWorksSec">
        <div class="container">
            <h2>How It Works</h2>
            <p>Getting started with Verifen is easy and fast.</p>
            <ul>
                <li>
                    <figure>
                        <img src="{{ 'assets/images/ventilation_2.png' }}" class="fr-fic fr-dib "
                            alt="Apply Online">
                    </figure>
                    <p>Apply Online: <span>Complete a simple application in minutes.</span></p>
                </li>
                <li>
                    <figure>
                        <img src="{{ 'assets/images/insurance_1.png' }}" class="fr-fic fr-dib " alt="Get Approved">
                    </figure>
                    <p>Get Approved: <span>Receive approval within the same day.</span></p>
                </li>
                <li>
                    <figure>
                        <img src="{{ 'assets/images/consulting_1.png' }}" class="fr-fic fr-dib "
                            alt="Receive Funds">
                    </figure>
                    <p>Receive Funds: <span>Access your funding in as little as 48 hours.</span></p>
                </li>
            </ul>
        </div>
    </section>

    <!-- ================ Funding Process Steps Section ================ -->

    <div id="solutions" class="fundingProcessSteps">
        <div class="container">
            <h3>Our Funding Solutions</h3>
            <h2>How to Secure Business Funding</h2>

            <div class="fundingProStepsFlex">
                <div class="fundingProStepsLeft">
                    <p>At Verifen, we understand that every business is unique. That’s why we offer flexible,
                        short-term funding options to meet your needs.</p>
                    <h3>Ideal for:</h3>
                    <ul>
                        <li>Managing operational expenses.</li>
                        <li>Expanding your business footprint.</li>
                        <li>Investing in inventory or new projects.</li>
                        <li>Bridging cash flow gaps.</li>
                    </ul>
                </div>
                <div class="fundingProStepsRight">
                    <div class="processStepsNew">
                        <div class="layout_block">
                            <figcaption>
                                <h5>1.</h5>
                            </figcaption>
                            <figure>
                                <h4>Funding Amounts</h4>
                                <p>From small capital injections to more significant amounts for significant projects
                                </p>
                            </figure>
                        </div>

                        <div class="layout_block">
                            <figcaption>
                                <h5>2.</h5>
                            </figcaption>
                            <figure>
                                <h4>Repayment Flexibility</h4>
                                <p>Terms that align with your cash flow</p>
                            </figure>
                        </div>

                        <div class="layout_block">
                            <figcaption>
                                <h5>3.</h5>
                            </figcaption>
                            <figure>
                                <h4>Transparency</h4>
                                <p>No hidden fees, no gimmicks, no surprises</p>
                            </figure>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>


    <!-- ================ Services Section ================ -->
    <section id="funding" class="fundRight">
        <div class="fundRightFlex">
            <div class="fundRightFlexLeft">
                <figure>
                    <img src="{{ 'assets/images/business.png' }}" class="fr-fic fr-dib "
                        alt="Funding That's Right For You">
                </figure>
            </div>
            <div class="fundRightFlexRight">
                <h2>What We Offer Beyond Funding</h2>
                <p>Verifen is more than a financial provider, we're your partner in growth.</p>
                <div class="">
                    <div class="layoutBlock">
                        <ul>
                            <li>
                                <img src="{{ 'assets/images/icon01.png' }}" class="fr-fic fr-dib "
                                    alt="Business Optimization">
                                <a href="#">Business Optimization:</a><br />
                                <p>Expert advice to streamline operations and improve efficiency</p>
                            </li>
                            <li>
                                <img src="{{ 'assets/images/icon02.png' }}" class="fr-fic fr-dib "
                                    alt="Marketing Support">
                                <a href="#">Marketing Support:</a><br />
                                <p>Tools and strategies to expand your reach and engage your audience</p>
                            </li>
                            <li>
                                <img src="{{ 'assets/images/icon03.png' }}" class="fr-fic fr-dib "
                                    alt="Long-Term Loans">
                                <a href="#">Operational Insights:</a><br />
                                <p>Identifying bottlenecks and providing tailored solutions to keep your business
                                    running smoothly</p>
                            </li>
                            <li>
                                <img src="{{ 'assets/images/icon04.png' }}" class="fr-fic fr-dib "
                                    alt="Invoice Factoring">
                                <a href="#">Growth Tools:</a><br />
                                <p>Access resources that empower you to scale your business sustainably</p>
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="layoutBlock">
                    <a class="applyButtonBlack mt-30" href="{{ route('business.loan.application.step-1') }}" target="_blank">Apply
                        Now</a>
                </div>

            </div>



        </div>
    </section>

    <!-- ================ Benefits Section ================ -->
    <div id="benefits" class="benefitsSec">
        <div class="container">
            <div class="benefitsSecRow">
                <div class="benefitsSecleftCol">
                    <h2>Key Benefits of Choosing Verifen</h2>
                    <ul>
                        <li><span>Fast Access to Funds:</span> Apply today and get funds within 48 hours.</li>
                        <li><span>No Hidden Fees:</span> What you see is what you get.</li>
                        <li><span>Flexible Repayment Terms:</span> Tailored to your business cash flow.</li>
                        <li><span>Expert Support:</span> Our team guides you every step of the way.</li>
                    </ul>
                </div>
                <div class="benefitsSecrightCol">
                    <img src="{{ 'assets/images/circle_img01.png' }}" class="fr-fic fr-dib " alt="Benefits">
                </div>
            </div>
        </div>
    </div>



    <!-- ================ Industries Section ================ -->
    <section id="industries" class="industriesSec">
        <div class="container">
            <h2>Industries We Serve</h2>
            <p>Verifen supports businesses across a range of industries, including but not limited to:</p>
            <ul>
                <li>
                    <figure>
                        <img src="{{ 'assets/images/ecommerce_1.png' }}" class="fr-fic fr-dib "
                            alt="Construction &amp; Contractor Business Funding">
                    </figure>
                    <p>Retail & <span>E-Commerce</span></p>
                </li>
                <li>
                    <figure>
                        <img src="{{ 'assets/images/retail_1.png' }}" class="fr-fic fr-dib " alt="Restaurants">
                    </figure>
                    <p>Restaurants & <span>Hospitality</span></p>
                </li>
                <li>
                    <figure>
                        <img src="{{ 'assets/images/healthcare_2.png' }}" class="fr-fic fr-dib " alt="Healthcare">
                    </figure>
                    <p>Healthcare & <span>Wellness</span></p>
                </li>
                <li>
                    <figure>
                        <img src="{{ 'assets/images/insurance_1.png' }}" class="fr-fic fr-dib " alt="Professional">
                    </figure>
                    <p>Professional <span>Services</span></p>
                </li>
                <li>
                    <figure>
                        <img src="{{ 'assets/images/manufacturing_1.png' }}" class="fr-fic fr-dib "
                            alt="Manufacturing">
                    </figure>
                    <p>Manufacturing & <span>Distribution</span></p>
                </li>
            </ul>
        </div>
    </section>

    <!-- ================ Apply Section ================ -->

    <div id="whywait" class="applySec">
        <div class="container">
            <h2>Why Wait? Apply Today</h2>
            <p>Don’t let financial barriers slow you down. Verifen is here to help you take the next step toward growth
                and success.</p>
            <ul class="applySecdFlex">
                <li>
                    <div class="applicationServiceIcon">
                        <img alt="icon" title="Fast Application" src="{{ 'assets/images/icon03.png' }}">
                    </div>
                    <h3>Fast Application</h3>
                    <p>Quick and simple online application</p>
                </li>
                <li>
                    <div class="applicationServiceIcon">
                        <img alt="icon" title="Transparent" src="{{ 'assets/images/values-icon02.png' }}">
                    </div>
                    <h3>Transparent</h3>
                    <p>Same-day approval for qualified businesses</p>
                </li>
                <li>
                    <div class="applicationServiceIcon">
                        <img alt="icon" title="Reliable" src="{{ 'assets/images/reliable-icon.png' }}">
                    </div>
                    <h3>Reliable</h3>
                    <p>Funds in your account within 48 hours</p>
                </li>
            </ul>
        </div>
    </div>





    <!-- ================ FAQ Section ================ -->
    <div id="faqs" class="faqSecRow">
        <div class="faqSec">
            <div class="container">
                <h2>Frequently Asked Questions</h2>
                <div class="details">
                    <details class="detailsContainer">
                        <summary class="detailsSummary">
                            <!-- The title -->
                            <h3 class="detailsTitle">How does Verifen differ from traditional bank loans?</h3>
                        </summary>
                    </details>
                    <!-- The content -->
                    <div class="detailsDesc">
                        <div class="detailsDescInner">
                            Verifen provides short-term funding with a streamlined application process, same-day
                            approval,
                            and funds delivered in 48 hours. Unlike banks, we don’t charge loan fees or closing costs or
                            impose high interest rates.
                        </div>
                    </div>
                </div>
                <div class="details">
                    <details class="detailsContainer">
                        <summary class="detailsSummary">
                            <!-- The title -->
                            <h3 class="detailsTitle">Are there any upfront costs or hidden fees?</h3>
                        </summary>
                    </details>
                    <!-- The content -->
                    <div class="detailsDesc">
                        <div class="detailsDescInner">
                            No. Verifen prides itself on complete transparency. There are no upfront costs, hidden fees,
                            or closing charges. What you see is what you get.
                        </div>
                    </div>
                </div>
                <div class="details">
                    <details class="detailsContainer">
                        <summary class="detailsSummary">
                            <!-- The title -->
                            <h3 class="detailsTitle">What types of businesses qualify for funding?</h3>
                        </summary>
                    </details>
                    <!-- The content -->
                    <div class="detailsDesc">
                        <div class="detailsDescInner">
                            We work with businesses of all sizes across various industries, including retail,
                            hospitality, healthcare, professional services, and more. Whether you’re a startup or an
                            established company, you can apply.
                        </div>
                    </div>
                </div>

                <div class="details">
                    <details class="detailsContainer">
                        <summary class="detailsSummary">
                            <!-- The title -->
                            <h3 class="detailsTitle">How does the application process work?</h3>
                        </summary>
                    </details>
                    <!-- The content -->
                    <div class="detailsDesc">
                        <div class="detailsDescInner">
                            The process is fast and straightforward:
                            <ul>
                                <li>Fill out our online application.</li>
                                <li>Provide basic business information.</li>
                                <li>Receive same-day approval.</li>
                                <li>Access funds within 48 hours of approval.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="details">
                    <details class="detailsContainer">
                        <summary class="detailsSummary">
                            <!-- The title -->
                            <h3 class="detailsTitle"> How long does approval take?</h3>
                        </summary>
                    </details>
                    <!-- The content -->
                    <div class="detailsDesc">
                        <div class="detailsDescInner">
                            Our approval process is speedy. Most applications are reviewed and approved on the same day
                            they
                            are submitted.
                        </div>
                    </div>
                </div>

                <div class="details">
                    <details class="detailsContainer">
                        <summary class="detailsSummary">
                            <!-- The title -->
                            <h3 class="detailsTitle">Is Verifen a loan?</h3>
                        </summary>
                    </details>
                    <!-- The content -->
                    <div class="detailsDesc">
                        <div class="detailsDescInner">
                            Not exactly. We provide merchant cash advances or short-term funding solutions that are more
                            flexible and tailored than traditional loans, without the extensive fees and rigid terms.
                        </div>
                    </div>
                </div>

                <div class="details">
                    <details class="detailsContainer">
                        <summary class="detailsSummary">
                            <!-- The title -->
                            <h3 class="detailsTitle">Can seasonal businesses apply?</h3>
                        </summary>
                    </details>
                    <!-- The content -->
                    <div class="detailsDesc">
                        <div class="detailsDescInner">
                            Absolutely. We understand the unique challenges of seasonal businesses and offer
                            funding solutions tailored to their cash flow cycles.
                        </div>
                    </div>
                </div>

                <div class="details">
                    <details class="detailsContainer">
                        <summary class="detailsSummary">
                            <!-- The title -->
                            <h3 class="detailsTitle">Is Verifen available nationwide?</h3>
                        </summary>
                    </details>
                    <!-- The content -->
                    <div class="detailsDesc">
                        <div class="detailsDescInner">
                            Yes, Verifen serves businesses across the United States, ensuring entrepreneurs nationwide
                            can
                            access the support they need.
                        </div>
                    </div>
                </div>

                <div class="details">
                    <details class="detailsContainer">
                        <summary class="detailsSummary">
                            <!-- The title -->
                            <h3 class="detailsTitle">How do I know if Verifen is the right fit for my business?</h3>
                        </summary>
                    </details>
                    <!-- The content -->
                    <div class="detailsDesc">
                        <div class="detailsDescInner">
                            If you’re seeking fast, flexible, and transparent funding with no hidden fees and tailored
                            solutions,
                            Verifen is the perfect partner to help you grow.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- ================ Ready to proceed Section ================ -->

    <div class="readytoproSec">
        <div class="container">
            <h2>Ready to Grow Your Business?</h2>
            <p>See how Verifen can help you achieve growth</p>
            <div class="flex">
                <a class="applyButtonBlack" href="/business-loan-application/step-1" target="_blank">Apply Now</a>
                <a class="contactButton" href="/contact" target="_blank">Contact</a>
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
    <script>
        const leftPart = document.querySelector('.unlock-sucess-left-prt');
        const items = leftPart.querySelectorAll('[id^="paralaxItm"]');

        leftPart.addEventListener('scroll', function () {
            const scrollTop = leftPart.scrollTop;
            items.forEach((item, index) => {
            const offset = scrollTop - item.offsetTop;
            item.style.backgroundPositionY = `${offset * 0.5}px`; // Adjust speed here
            });
        });
    </script>

    <script>
        $('.stat-number').each(function () {
        var size = $(this).text().split(".")[1] ? $(this).text().split(".")[1].length : 0;
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 5000,
            step: function (func) {
                $(this).text(parseFloat(func).toFixed(size));
            }
        });
        });
    </script>



</body>

</html>

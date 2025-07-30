<!DOCTYPE html>
<html lang="en-US">

<head>

    <title>Verifen</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
    <!-- Bootstrap Css -->
    <link type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Fontawesome Css -->
    <link type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        rel="stylesheet">
    <link type="text/css" href="https://cdn.jsdelivr.net/npm/ti-icons@0.1.2/css/themify-icons.min.css" rel="stylesheet">
    <!-- Owl Carousel Css -->
    <link type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet">
    <!-- Animate Css -->
    <link type="text/css" href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <!-- Menu Css -->
    <link type="text/css" href="{{ asset('assets/css/slimmenu.css') }}" rel="stylesheet">
    <!-- Custom Css -->
    <link type="text/css" href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
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
    <header class="top-main-hdr">
        <div class="container">
            <div class="hdrToprow">
                <ul>
                    <li>
                        <img src="{{ asset('assets/images/phone-call.png') }}">
                        <a href="tel:877-400-0297" target="_blank">877-400-0297</a>
                    </li>
                </ul>
                <div class="layout_block">
                    <img src="{{ asset('assets/images/globe_2.png') }}" class="fr-fic">
                    <ul class="languages">
                        <li class="selected"><a href="#"><span>EN</span></a></li>
                        <li class="selected">/</li>
                        <li><a href="#"><span>ES</span></a></li>
                    </ul>
                </div>
            </div>

            <div class="hdr-row">
                <a href="index.html">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Verifen">
                </a>
                <div class="hdr-menu">
                    <div class="collapse-button"><span class="icon-bar"></span><span class="icon-bar"></span><span
                            class="icon-bar"></span></div>
                    <ul class="slimmenu">
                        <li class="active"><a href="#">Why Verifen?</a></li>
                        <li><a href="#">How It Works</a></li>
                        <li><a href="#">Solutions</a></li>
                        <li><a href="#">Funding</a></li>
                        <li><a href="#">Benefits</a></li>
                        <li><a href="#">Industries</a></li>
                        <li><a href="#">Why Wait?</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li class="button lastmenu">
                            <a href="#" target="_blank">
                                <span>Apply Now</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <!-- ================ Banner Section ================ -->
    <section class="home-banner-sec">
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
                                        <a class="applyButton" href="#" target="_blank"><span>Apply Now</span></a>
                                    </aside>
                                    <aside class="slider_right">
                                        <img src="{{ asset('assets/images/slider_img01.png') }}" alt="">
                                    </aside>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/images/home-banner-2.jpg') }}" alt="">
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
                    <img src="{{ asset('assets/images/home-banner-3.jpg') }}" alt="">
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
                    <img src="{{ asset('assets/images/home-banner-4.jpg') }}" alt="">
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
            <a class="bnr-carousel-cntrl carousel-control-prev" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev"></a>
            <a class="bnr-carousel-cntrl carousel-control-next" data-bs-target="#carouselExampleControls"
                data-bs-slide="next"></a>
        </div>
    </section>

    <!-- ================ Logo Section ================ -->

    <div class="logoSec">
        <div class="container">
            <ul class="logoFlex">
                <li><img class="fr-fic" src="{{ asset('assets/images/bbb_transparent.png') }}" alt=""></li>
                <li>
                    <h3>As Seen On:</h3>
                </li>
                <li><a href="#" target="_blank">
                        <img class="maxWidth130" alt="nbc" src="{{ asset('assets/images/nbc-logo.png') }}"></a>
                </li>
                <li><a href="#" target="_blank">
                        <img class="maxWidth130" alt="abc" src="{{ asset('assets/images/abc-logo.png') }}"></a>
                </li>
                <li><a href="#" target="_blank">
                        <img class="maxWidth130" alt="boston herald"
                            src="{{ asset('assets/images/boston-herald-logo.png') }}"></a>
                </li>
                <li><a href="#" target="_blank">
                        <img class="maxWidth130" alt="startribune"
                            src="{{ asset('assets/images/startribune-logo.png') }}"></a>
                </li>
                <li><a href="#" target="_blank">
                        <img class="maxWidth130" alt="fox" src="{{ asset('assets/images/foxlogo2.png') }}"></a>
                </li>
            </ul>
        </div>
    </div>


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
                    <img src="{{ asset('assets/images/expert-icon_01.png') }}" alt="">
                    <h5><span>Short-Term </span>Funding </h5>
                    <p>30 to 180 days</p>
                </figure>
                <figure>
                    <img src="{{ asset('assets/images/expert-icon_02.png') }}" alt="">
                    <h5><span>Same-Day </span> Approval</h5>
                    <p>No waiting, no hassle</p>
                </figure>
                <figure>
                    <img src="{{ asset('assets/images/expert-icon_03.png') }}" alt="">
                    <h5><span>Funds Delivered</span> in 48 Hours </h5>
                    <p>Timely support when you <br />need it most.</p>
                </figure>
            </div>
        </div>
    </section>


    <!-- ================ Services Section ================ -->
    <div class="directFunders">
        <div class="fixedContent">
            <div class="directFundersRow">
                <div class="column2">
                    <figure>
                        <img src="{{ asset('assets/images/direct-funders-bright-final-img03.png') }}"
                            class="fr-fic fr-dib " alt="Direct-Funders">
                    </figure>
                </div>
                <div class="column1">
                    <h2>Why Verifen?</h2>
                    <p>The merchant cash advance industry is often plagued by high interest rates, hidden fees,
                        and gimmicks that exploit businesses. Verifen stands out by offering a refreshing alternative.
                    </p>
                    <h3>Here’s what makes us different:</h3>
                    <ol>
                        <li>
                            <h4>Lowest Industry Rates</h4>
                            <p>Keep more of your profits with our competitive and transparent pricing. There are no loan
                                fees, closing costs, or surprises.</p>
                        </li>
                        <li>
                            <h4>Simple, Streamlined Process</h4>
                            <p>Skip the paperwork overload. Our digital-first application process is designed for speed
                                and simplicity, ensuring you get funding fast.</p>
                        </li>
                        <li>
                            <h4>Customized Solutions for Your Business</h4>
                            <p>No cookie-cutter loans—our funding is tailored to your unique needs, helping you make the
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


    <!-- ================ Funding Process Steps Section ================ -->

    <div class="fundingProcessSteps">
        <div class="container">
            <h3>Funding Process Steps</h3>
            <h2>How to Secure Business Funding</h2>

            <div class="fundingProStepsFlex">
                <div class="fundingProStepsLeft">
                    <p>Verifen specializes in expedient funding solutions because we understand that many
                        of our
                        clients are under limited timelines. Our firm invested into our digital infrastructure for the
                        purpose of
                        making the funding process more efficient.</p>
                </div>
                <div class="fundingProStepsRight">
                    <div class="processStepsNew">
                        <div class="layout_block">
                            <figcaption>
                                <h5>1.</h5>
                            </figcaption>
                            <figure>
                                <h4>Apply &amp; Submit</h4>
                                <p>Complete application online and submit the last three bank statements of the business
                                    account.</p>
                            </figure>
                        </div>

                        <div class="layout_block">
                            <figcaption>
                                <h5>2.</h5>
                            </figcaption>
                            <figure>
                                <h4>Underwrite & Approve</h4>
                                <p>Our underwriting team works diligently to provide the maximum capital for your
                                    business. A Funding Specialist
                                    will reach out and discuss your available funding options.</p>
                            </figure>
                        </div>

                        <div class="layout_block">
                            <figcaption>
                                <h5>3.</h5>
                            </figcaption>
                            <figure>
                                <h4>Sign & Fund</h4>
                                <p>After receiving a signed contract, a call will be scheduled with a member of our
                                    Underwriting Team to
                                    complete a brief interview and the funds will be released.</p>
                            </figure>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>


    <!-- ================ Services Section ================ -->
    <section class="fundRight">
        <div class="fundRightFlex">
            <div class="fundRightFlexLeft">
                <figure>
                    <img src="{{ asset('assets/images/business.png') }}" class="fr-fic fr-dib "
                        alt="Funding That's Right For You">
                </figure>
            </div>
            <div class="fundRightFlexRight">
                <h2>Funding That's<br>Right For You</h2>
                <p>Our aim is to approve and fund all of our clients expediently and easily. We value your time and
                    wish to make the funding process as smooth as possible.</p>
                <div class="dFlex">
                    <div class="layoutBlock w50">
                        <ul>
                            <li>
                                <img src="{{ asset('assets/images/icon01.png') }}" class="fr-fic fr-dib "
                                    alt="Lines of Credit">
                                <a href="#">Lines of Credit</a>
                            </li>
                            <li>
                                <img src="{{ asset('assets/images/icon02.png') }}" class="fr-fic fr-dib "
                                    alt="Short-Term Loans">
                                <a href="#">Short-Term Loans</a>
                            </li>
                            <li>
                                <img src="{{ asset('assets/images/icon03.png') }}" class="fr-fic fr-dib "
                                    alt="Long-Term Loans">
                                <a href="#">Long-Term Loans</a>
                            </li>
                            <li>
                                <img src="{{ asset('assets/images/icon04.png') }}" class="fr-fic fr-dib "
                                    alt="Invoice Factoring">
                                <a href="#">Invoice Factoring</a></p>
                            </li>
                        </ul>
                    </div>
                    <div class="layoutBlock w50">
                        <ul>
                            <li>
                                <img src="{{ asset('assets/images/icon05.png') }}" class="fr-fic fr-dib "
                                    alt="Equipment Financing">
                                <a href="#">Equipment Financing</a>
                            </li>
                            <li>
                                <img src="{{ asset('assets/images/icon06.png') }}" class="fr-fic fr-dib "
                                    alt="Merchant Cash Advance">
                                <a href="#">Merchant Cash Advance</a>
                            </li>
                            <li>
                                <img src="{{ asset('assets/images/icon07.png') }}" class="fr-fic fr-dib "
                                    alt="SBA Loans">
                                <a href="#">SBA Loans</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="layoutBlock">
                    <a class="applyButtonBlack mt-30" href="#" target="_blank">Apply Now</a>
                </div>

            </div>



        </div>
    </section>

    <!-- ================ Industries Section ================ -->
    <section class="industriesSec">
        <div class="container">
            <h2>Industries We Serve</h2>
            <p>Verifen supports businesses across a range of industries, including but not limited to:</p>
            <ul>
                <li>
                    <figure>
                        <img src="{{ asset('assets/images/ecommerce_1.png') }}" class="fr-fic fr-dib "
                            alt="Construction &amp; Contractor Business Funding">
                    </figure>
                    <p>Retail & <span>E-Commerce</span></p>
                </li>
                <li>
                    <figure>
                        <img src="{{ asset('assets/images/retail_1.png') }}" class="fr-fic fr-dib "
                            alt="Restaurants">
                    </figure>
                    <p>Restaurants & <span>Hospitality</span></p>
                </li>
                <li>
                    <figure>
                        <img src="{{ asset('assets/images/healthcare_2.png') }}" class="fr-fic fr-dib "
                            alt="Healthcare">
                    </figure>
                    <p>Healthcare & <span>Wellness</span></p>
                </li>
                <li>
                    <figure>
                        <img src="{{ asset('assets/images/insurance_1.png') }}" class="fr-fic fr-dib "
                            alt="Professional">
                    </figure>
                    <p>Professional <span>Services</span></p>
                </li>
                <li>
                    <figure>
                        <img src="{{ asset('assets/images/manufacturing_1.png') }}" class="fr-fic fr-dib "
                            alt="Manufacturing">
                    </figure>
                    <p>Manufacturing & <span>Distribution</span></p>
                </li>
            </ul>
        </div>
    </section>

    <!-- ================ FAQ Section ================ -->

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
                        Verifen provides short-term funding with a streamlined application process, same-day approval,
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
                        Our approval process is speedy. Most applications are reviewed and approved on the same day they
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
                        Yes, Verifen serves businesses across the United States, ensuring entrepreneurs nationwide can
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

    <!-- ================ Ready to proceed Section ================ -->

    <div class="readytoproSec">
        <div class="container">
            <h2>Ready to proceed?</h2>
            <p>Please <a href="#" target="_blank"><u>complete a quick application</u></a> or call us at <span>
                    <a href="tel:(877)%20400-0297" rel="noopener noreferrer" target="_blank">(877)
                        400-0297</a></span>
            </p>
        </div>
    </div>



    <!-- ================ Footer Section ================ -->
    <footer class="btm-footer">
        <div class="container">
            <div class="footerFlex">

                <div class="columnOne">
                    <a href="index.html">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="Verifen">
                    </a>
                    <img class="fr-fic" src="{{ asset('assets/images/bbb_transparent.png') }}" alt="">
                </div>

                <div class="columnTwo">
                    <ul>
                        <li class="selected"><a href="#">Why Verifen?</a></li>
                        <li><a href="#">How It Works</a></li>
                        <li><a href="#">Solutions</a></li>
                    </ul>
                </div>
                <div class="columnThree">
                    <ul>
                        <li><a href="#">Funding</a></li>
                        <li><a href="#">Benefits</a></li>
                        <li><a href="#">Industries</a></li>
                        <li><a href="#">Why Wait?</a></li>
                        <li><a href="#">FAQs</a></li>
                    </ul>
                </div>
                <div class="columnThree">
                    <p class="boldText">Call Us
                        <span><a href="tel:877-400-0297" target="_blank">877-400-0297</a></span>
                    </p>
                    <p class="boldText">Fax
                        <span>(917) 267-5066</span>
                    </p>
                    <p class="boldText">Follow Us</p>
                    <ul class="socials">
                        <li><a href="#" target="_blank"><i class="fa fa-fw fa-facebook"
                                    alt="facebook"></i></a><br></li>
                        <li><a href="#" target="_blank"><i class="fa fa-fw fa-twitter"
                                    alt="twitter"></i></a><br></li>
                        <li><a href="#" target="_blank"><i class="fa fa-fw  fa-instagram"
                                    alt="instagram"></i></a><br></li>
                        <li><a href="#" target="_blank"><i class="fa fa-fw fa-linkedin"
                                    alt="linkedin"></i></a><br></li>
                    </ul>
                </div>

                <div class="columnThree">
                    <p class="boldText">Monday - Friday
                        <span> 9:00 AM - 8:00 PM</span>
                    </p>
                    <p class="boldText">Email
                        <span><a href="mailto:info@Verifen.com"
                                target="_blank">info@Verifen.com</a></span>
                    </p>
                </div>

            </div>

            <div class="ftr-copyright-prt">
                <p>&copy; 2024 Verifen.com. All rights reserved.</p>
            </div>

        </div>
    </footer>


    <!-- JS Start here -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Wow JS -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Menu JS -->
    <script src="{{ asset('assets/js/easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/slimmenu.min.js') }}"></script>
    <!-- Owl Carousel js -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <!-- Custome js -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

</body>

</html>

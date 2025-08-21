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
                    <div class="carousel-item itembg1 active">
                        <div class="featured_img_overlay">
                            <div class="bnr-caption">
                                <div class="container">
                                    <div class="bdFlex">
                                        <aside class="slider_left">
                                            <h3>Our Blogs</h3>
                                            <h2>Help your business growth up to high level</h2>
                                            <p>your gateway to connecting with verified, high-quality business loans applications 
                                                from qualified bussiness. With transparency, lower risk, and powerful tools for funders, 
                                                Verifen is revolutionizing the funding process to make it simple, secure, and profitable.
                                            </p>
                                            <!-- <a class="applyButton" href="{{ route('application') }}"
                                                target="_blank"><span>Apply Now</span></a> -->
                                        </aside>
                                        <aside class="slider_right">
                                            <img src="{{ 'assets/images/blog-banner.png' }}" alt="">
                                        </aside>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

       <section class="blog-list-body-sec">
            <div class="container">
                <div class="blog-list-row">
                    <div class="blog-list-clmn">
                        <figure>
                            <a href="/blog-details">
                                <img alt="Blog" src="{{ 'assets/images/blog-img1.jpg' }}">
                            </a>
                        </figure>
                        <article>
                            <dt>25 June, 2022</dt>
                            <h2 class="blog-title">
                                <a href="/blog-details">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                            </h2>
                            <a class="blog-read-more" href="/blog-details">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </article>
                    </div>
                    
                    <div class="blog-list-clmn">
                        <figure><a href="/blog-details"> <img alt="Blog" src="{{ 'assets/images/blog-img2.jpg' }}"></a></figure>
                        <article>
                            <dt>25 June, 2022</dt>
                            <h2 class="blog-title">
                                <a href="/blog-details">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                            </h2>
                            <a class="blog-read-more" href="/blog-details">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </article>
                    </div>

                    <div class="blog-list-clmn">
                        <figure><a href="/blog-details"> <img alt="Blog" src="{{ 'assets/images/blog-img3.jpg' }}"></a></figure>
                        <article>
                            <dt>25 June, 2022</dt>
                            <h2 class="blog-title">
                                <a href="/blog-details">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                            </h2>
                            <a class="blog-read-more" href="/blog-details">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </article>
                    </div>

                    <div class="blog-list-clmn">
                        <figure><a href="/blog-details"> <img alt="Blog" src="{{ 'assets/images/blog-img4.jpg' }}"></a></figure>
                        <article>
                            <dt>25 June, 2022</dt>
                            <h2 class="blog-title">
                                <a href="/blog-details">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                            </h2>
                            <a class="blog-read-more" href="/blog-details">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </article>
                    </div>

                    <div class="blog-list-clmn">
                        <figure><a href="/blog-details"> <img alt="Blog" src="{{ 'assets/images/blog-img5.jpg' }}"></a></figure>
                        <article>
                            <dt>25 June, 2022</dt>
                            <h2 class="blog-title">
                                <a href="/blog-details">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                            </h2>
                            <a class="blog-read-more" href="/blog-details">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </article>
                    </div>

                    <div class="blog-list-clmn">
                        <figure><a href="/blog-details"> <img alt="Blog" src="{{ 'assets/images/blog-img6.jpg' }}"></a></figure>
                        <article>
                            <dt>25 June, 2022</dt>
                            <h2 class="blog-title">
                                <a href="/blog-details">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                            </h2>
                            <a class="blog-read-more" href="/blog-details">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </article>
                    </div>

                    <div class="blog-list-clmn">
                        <figure><a href="/blog-details"> <img alt="Blog" src="{{ 'assets/images/blog-img7.jpg' }}"></a></figure>
                        <article>
                            <dt>25 June, 2022</dt>
                            <h2 class="blog-title">
                                <a href="/blog-details">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                            </h2>
                            <a class="blog-read-more" href="/blog-details">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </article>
                    </div>

                    <div class="blog-list-clmn">
                        <figure><a href="/blog-details"> <img alt="Blog" src="{{ 'assets/images/blog-img8.jpg' }}"></a></figure>
                        <article>
                            <dt>25 June, 2022</dt>
                            <h2 class="blog-title">
                                <a href="/blog-details">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                            </h2>
                            <a class="blog-read-more" href="/blog-details">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </article>
                    </div>

                    <div class="blog-list-clmn">
                        <figure><a href="/blog-details"> <img alt="Blog" src="{{ 'assets/images/blog-img9.jpg' }}"></a></figure>
                        <article>
                            <dt>25 June, 2022</dt>
                            <h2 class="blog-title">
                                <a href="/blog-details">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                            </h2>
                            <a class="blog-read-more" href="/blog-details">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </article>
                    </div>

                </div>
            </div>
        </section>  
    
    
    <!-- ================ Ready to proceed Section ================ -->

    <div class="readytoproSec">
        <div class="container">
            <h2>Earn with Verifen</h2>
            <p>Ready to become an authorized Verifen Partner? Submit the quick form below to 
                get started and unlock new funding opportunities.</p>
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

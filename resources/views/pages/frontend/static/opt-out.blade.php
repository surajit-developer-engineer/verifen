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

     <div class="applicationBodyOuter">
        <div class="container">
        <div class="applicationBody">
            <form>
                <ul class="tabs">
                    <li class="active" rel="tab1">Opt Out of Data Sharing</li>
                    <li rel="tab2">Opt Out of Communications</li>                    
                </ul>
                    <div class="tab_container">
                    <h3 class="d_active tab_drawer_heading optTitle" rel="tab1">Opt Out of Data Sharing</h3>
                    <div id="tab1" class="tab_content cat-1">                    
                        <div class="question-wrap">
                        <p>Please provide the following information for identity verification:</p>
                        <div class="formFlex">
                            <div style="width:100%;" class="formCol">
                                <span>Business Name</span>
                                <input type="text" placeholder="">
                            </div>
                        </div>

                        <div class="formFlex">
                            <div class="formCol">
                                <span>Owner's First Name</span>
                                <input type="text" placeholder="">
                            </div>
                            <div class="formCol">
                                <span>Owner's Last Name</span>
                                <input type="text" placeholder="">
                            </div>
                        </div>

                        <div class="formFlex">
                            <div class="formCol">
                                <span>Email Address</span>
                                <input type="text" placeholder="">
                            </div>
                            <div class="formCol">
                                <span>Phone Number</span>
                                <input type="text" placeholder="">
                            </div>
                        </div>

                        <div class="basic-check-container">
                            <div class="formCol">
                                <strong>Select the reason for your request</strong>
                            </div>
                            <div class="checkcol">
                                <input type="checkbox" id="basic1" checked>
                                <label for="basic1">I don't want Verifen to collect my data</label>
                            </div>
                            <div class="checkcol">
                                <input type="checkbox" id="basic2">
                                <label for="basic2">I don't want Verifen to sell my data</label>
                            </div>
                            <div class="checkcol">
                                <input type="checkbox" id="basic3">
                                <label for="basic3">I want Verifen to remove all my data from their database</label>
                            </div>
                        </div>

                        <input style="position:relative; float: none; z-index:1; margin-top:0;" type="button" name="next" class="next action-button" value="Submit" />

                    </div>
                    </div>
                    <!-- #tab1 -->
                    <h3 class="tab_drawer_heading optTitle" rel="tab2">Opt Out of Communications</h3>
                    <div id="tab2" class="tab_content">
                    <div class="question-wrap">
                        <p>Please provide the following information for identity verification:</p>
                        <div class="formFlex">
                            <div style="width:100%;" class="formCol">
                                <span>Business Name</span>
                                <input type="text" placeholder="">
                            </div>
                        </div>

                        <div class="formFlex">
                            <div class="formCol">
                                <span>Owner's First Name</span>
                                <input type="text" placeholder="">
                            </div>
                            <div class="formCol">
                                <span>Owner's Last Name</span>
                                <input type="text" placeholder="">
                            </div>
                        </div>

                        <div class="formFlex">
                            <div class="formCol">
                                <span>Email Address</span>
                                <input type="text" placeholder="">
                            </div>
                            <div class="formCol">
                                <span>Phone Number</span>
                                <input type="text" placeholder="">
                            </div>
                        </div>

                        <div class="basic-check-container">
                            <div class="formCol">
                                <strong>Select the reason for your request</strong>
                            </div>
                            <div class="checkcol">
                                <input type="checkbox" id="basic1" checked>
                                <label for="basic1">I don't want Verifen to Contact me via Phone calls</label>
                            </div>
                            <div class="checkcol">
                                <input type="checkbox" id="basic2">
                                <label for="basic2">I don't want to be contacted by Verifen</label>
                            </div>                            
                        </div>

                        <input style="position:relative; float: none; z-index:1; margin-top:0;" type="button" name="next" class="next action-button" value="Submit" />

                    </div>
                    </div>
                    <!-- #tab2 -->                    
                    </div>
                    <!-- .tab_container -->
                    </div>

                
            </form>

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
         // tabbed content
    // http://www.entheosweb.com/tutorials/css/tabs.asp
    $(".tab_content").hide();
    $(".tab_content:first").show();

  /* if in tab mode */
    $("ul.tabs li").click(function() {
		
      $(".tab_content").hide();
      var activeTab = $(this).attr("rel"); 
      $("#"+activeTab).fadeIn();		
		
      $("ul.tabs li").removeClass("active");
      $(this).addClass("active");

	  $(".tab_drawer_heading").removeClass("d_active");
	  $(".tab_drawer_heading[rel^='"+activeTab+"']").addClass("d_active");
	  
    });
	/* if in drawer mode */
	$(".tab_drawer_heading").click(function() {
      
      $(".tab_content").hide();
      var d_activeTab = $(this).attr("rel"); 
      $("#"+d_activeTab).fadeIn();
	  
	  $(".tab_drawer_heading").removeClass("d_active");
      $(this).addClass("d_active");
	  
	  $("ul.tabs li").removeClass("active");
	  $("ul.tabs li[rel^='"+d_activeTab+"']").addClass("active");
    });
	
	
	/* Extra class "tab_last" 
	   to add border to right side
	   of last tab */
	$('ul.tabs li').last().addClass("tab_last");
    </script>

</body>

</html>

<!-- ================ Header Section ================ -->
<header class="top-main-hdr">
    <div class="container">
        <div class="hdrToprow">
            <ul>
                <li>
                    <img src="{{ 'assets/images/phone-call.png' }}">
                    <a href="tel:8887886160" target="_blank">(888) 788-6160</a>
                </li>
                <li>
                    <i class="fa fa-envelope-o"></i>
                    <a href="mailto:contact@verifen.com " target="_blank">contact@verifen.com </a>
                </li>
            </ul>
            <div class="layout_block">
                <!-- <img src="{{ 'assets/images/globe_2.png' }}" class="fr-fic"> -->
                <ul class="languages">
                    <li class="bapBtn lastmenu">
                        <a href="/contact" target="_blank">
                            <span>Contact Us</span></a>
                    </li>
                    <li class="button lastmenu">
                        <a href="{{ route('application') }}" target="_blank">
                            <span>Apply Now</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

        <div class="hdr-row">
            <div class="container">            
                <div class="logo-flxRow">                 
           <div class="hdr-row2">
            <a href="{{ route('index') }}">
                <img src="{{ 'assets/images/logo.svg' }}" alt="Verifen">
            </a>
            
            <div class="hdr-menu">
                <ul class="slimmenu">
                <div class="collapse-button closeIcon"> <img src="{{ 'assets/images/close-icon.png' }}" alt="Close Icon"> </div>
                    {{-- <li class="active"><a href="#membership">Membership</a></li> --}}
                    <li><a href="#verifen">Why Verifen?</a></li>
                    <li><a href="#howitworks">How It Works</a></li>
                    <li><a href="#solutions">Solutions</a></li>
                    <li><a href="#funding">Funding</a></li>
                    <li><a href="#benefits">Benefits</a></li>
                    <li><a href="#industries">Industries</a></li>
                    <!-- <li><a href="/partner">Partner</a></li> -->
                    <li><a href="#faqs">FAQs</a></li>
                    <li class="mobView">
                    <div class="dFlex mobBtnSec"><a class="applyButton" href="{{ route('application') }}" target="_blank">
                    <span>Apply Now</span></a>
                    <a class="applyButton" href="/contact" target="_blank">
                        Contact Us</a></div>
                    <a class="applyButtonStroke" href="tel:8887886160" target="_blank">
                    <span><i><img src="{{ 'assets/images/phone-call.png' }}"></i> Call Us: (888) 788-6160</span></a>
                </li>
                </ul>
            </div>
           </div> 
           <div class="dFlex">
            <div class="callSecwe">
                <a href="tel:8887886160" target="_blank"><i class="fa fa-phone"></i></a>   
                <!-- <img src="{{ 'assets/images/phone-call.png' }}"> -->
            </div>
            <div class="collapse-button"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></div>
           </div> 
           </div>         
        </div>
    </div>
</header>

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
                    <a href="mailto:contact@Verifen.com " target="_blank">contact@Verifen.com </a>
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
                        <a href="{{ route('business.loan.application.step-1') }}" target="_blank">
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
                <!-- <img class="mobLogo" src="{{ 'assets/images/verifen-mob-logo.png' }}" alt="Verifen"> -->
            </a>

            <div class="hdr-menu">
                <ul class="slimmenu">
                <div class="collapse-button closeIcon"> <img src="{{ 'assets/images/close-icon.png' }}" alt="Close Icon"> </div>
                    {{-- <li class="active"><a href="#membership">Membership</a></li> --}}
                    <li class="dropdown"><a class="dropdown-toggle" href="#">Services</a>
                        <ul  class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="#">Business Loans</a></li>
                            <li><a class="dropdown-item" href="#">Consultation</a></li>
                            <li><a class="dropdown-item" href="#">Credit Repair</a></li>
                            <li><a class="dropdown-item" href="#">Credit Monitoring</a></li>
                            <li><a class="dropdown-item" href="#">Line of Credit</a></li>
                            <li><a class="dropdown-item" href="#">Privet Travel</a></li>
                            <li><a class="dropdown-item" href="#">SBA Loans</a></li>
                            <li><a class="dropdown-item" href="#">Term Loans</a></li>
                            <li><a class="dropdown-item" href="#">Working Capital</a></li>
                        </ul>
                    </li>
                    <li><a href="#Verifen">Why Verifen?</a></li>
                    <li><a href="#howitworks">How It Works</a></li>
                    <li><a href="#solutions">Solutions</a></li>
                    <li><a href="#funding">Funding</a></li>
                    <li><a href="#benefits">Benefits</a></li>
                    <li><a href="#industries">Industries</a></li>                    
                    <li><a href="#faqs">FAQs</a></li>
                    <li class="mobView"><a href="/partners">Partners</a></li>
                    <li class="mobView"><a href="/investor-program">Investor Program</a></li>
                    <li class="mobView">
                    <div class="dFlex mobBtnSec">
                        <a class="applyButton" href="{{ route('business.loan.application.step-1') }}" target="_blank">
                    <span>Apply Now</span></a>
                    <a style="margin-top:15px;" class="applyButton" href="/contact" target="_blank">
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

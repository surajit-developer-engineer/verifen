<!DOCTYPE html>
<html lang="en-US">

<head>

    @include('includes.frontend.meta-data')
    
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

     <section class="innerConBodyOuter staticPages pb-0 bgNone">
        <div class="container">

         <div class="landingbannerSec">
            <div class="container">
                <div class="lanbannerBg">
                    <div class="lanban-con-holder">
                        <h3>Invest with Confidence. Grow with Verifen.</h3>
                        <dt class="pt-0">Fixed Monthly Payouts. No Market Volatility. No Lending Risk.</dt>
                        <h2>Why Invest with Verifen?</h2>
                       <p>At Verifen, we’re reshaping how capital is deployed and how investors can participate in the 
                growth of America’s small businesses through structured receivables purchases backed by our 
                proven business funding model and reinforced with multi channel risk mitigation.</p> 
                    <p>You help fuel the growth of America’s small businesses while receiving fixed monthly distributions 
                            that far exceed returns from traditional investments like CDs, bonds, or savings accounts.</p> 
                    <p>Our model offers secure, fixed monthly payouts through a receivables participation strategy, 
                            not tied to any specific loan or classified as a security.</p>
                    <p>You’re not lending money. Instead, you’re purchasing a portion of Verifen’s projected future receivables, 
                            enabling real businesses to access growth capital, while you receive predictable, contractual distributions 
                            under our receivables purchase model.</p> 
                    </div>
                    <div class="lanban-img-holder">
                        <img src="{{ 'assets/images/landing-banner3.png' }}">
                    </div>
                </div>
            </div>
        </div>



            <div class="logoSec landing-logoSec">
                <div class="container">
                    <ul class="logoFlex">                
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
                                <img class="maxWidth130" alt="startribune"
                                    src="{{ 'assets/images/msn-logo.png' }}"></a>
                        </li>
                        <li><a href="#" target="_blank">
                                <img class="maxWidth130" alt="fox" src="{{ 'assets/images/yahoo-logo.png' }}"></a>
                        </li>
                    </ul>
                </div>
            </div>


    <!-- ================ Delivers Section ================ -->
        <div class="deliversSec pt-4">
            <div class="container">
                <div class="deliversSecFlex">                    
                    <div class="deliversSecFlexRight fullWidth text-center">
                        <h2>What Makes Verifen Different?</h2>
                        <section class="list-program">
                            <div class="list-programcol">
                                <ul>
                                    <li>Guaranteed fixed Monthly Distributions over a 12 month term.</li>
                                    <li>Receivables Participation Model – Not Lending, Not APR.</li>
                                    <li>100% Principal Protected through our reserve backed structure.</li>
                                    <li>Not Tied to Loan Repayment or Borrower Default.</li>
                                    <li>Fully Transparent Investor Portal.</li>
                                    <li>Multi-Channel Risk Mitigation.</li>
                                    <li>Simple Enrollment and Capital Deployment Process.</li>
                                </ul>
                                <p>Beyond Capital: Business Strategy that Powers Real Growth Verifen doesn’t just fund businesses, 
                            we analyze, optimize, and help scale them. We become active partners in the 
                            success of every business we fund.</p>  
                                <p>Before deploying capital, our analysts conduct a deep dive into the company’s business model, 
                                    financial structure, and operational flow. We only engage with qualified, scalable businesses 
                                    backed by strong fundamentals.</p>                                 
                            </div>
                            <div class="list-programcol">
                                 <p>But we don’t stop at underwriting and funding, Verifen provides hands on strategic support to 
                                    help each business improve and grow:</p>
                                <ul>
                                    <li>Streamline operational inefficiencies.</li>
                                    <li> Improve and modernize their business model to boost profitability.</li>
                                    <li>Strengthen revenue channels and customer acquisition.</li>
                                    <li>Boost conversion and average transaction value.</li>
                                    <li>Reinvent marketing, sales, and fulfillment strategies.</li>
                                    <li>Strengthen fundamentals, from pricing to positioning.</li>
                                    <li>Apply technology tools from our proprietary resource stack.</li>
                                    <li>Provide access to exclusive resources, tools, and insights developed through years of proven success.</li>
                                </ul>
                                <p>With our unique combination of funding and business expertise, Verifen not only protects your capital, 
                                    it ensures it’s working smarter.</p>
                            </div>
                        
                        </section>         
                    </div>
                </div>
            </div>
        </div>


        <div class="landing-growSae mt-5">
            <div class="container">
                <h2>How the Verifen Revenue Participation Model Works</h2>                
                <ul>
                    <li>
                        <div class="featured-icon-holder2">						
                            <img class="maxWidth130" alt="Business Strategy" src="assets/images/icon-111.png">												
                        </div>
                        <h3 class="leftText">Choose Your Participation Level</h3>
                        <p class="leftText">You choose your capital participation tier (starting at $10,000). This capital purchases a share of 
                            Verifen’s receivables pool for the next 12-month cycle. You may add new positions at any time.</p>
                    </li>
                    <li>
                        <div class="featured-icon-holder2">						
                            <img class="maxWidth130" alt="Business Strategy" src="assets/images/icon-222.png">												
                        </div>
                        <h3 class="leftText">Capital Deployed to Verified Business Funding</h3>
                        <p class="leftText">Verifen funds qualified small businesses through structured revenue-based agreements and terms loans. 
                            In higher-risk scenarios, capital is sourced from third-party brokers, protecting Verifen's receivables pool.</p>
                    </li>
                    <li>
                        <div class="featured-icon-holder2">						
                            <img class="maxWidth130" alt="Business Strategy" src="assets/images/icon-333.png">												
                        </div>
                        <h3 class="leftText">Fixed Monthly Distributions</h3>
                        <p class="leftText">Investors receive contractual monthly distributions of projected receivables over 12 months. 
                            This is not interest. It is a fixed payout based on receivables performance forecasting.</p>
                    </li>
                    <li>
                        <div class="featured-icon-holder2">						
                            <img class="maxWidth130" alt="Business Strategy" src="assets/images/icon-444.png">												
                        </div>
                        <h3 class="leftText">Reserve & Diversification Protection</h3>
                        <p class="leftText">To safeguard your capital, Verifen allocates portions of its portfolio into real estate and crypto 
                            reserve accounts. These protect against business underperformance while maintaining payout reliability.</p>
                    </li>
                    <li>
                        <div class="featured-icon-holder2">						
                            <img class="maxWidth130" alt="Business Strategy" src="assets/images/icon-555.png">												
                        </div>
                        <h3 class="leftText"> Access Real-Time Earnings Data</h3>
                        <p class="leftText">Log in to your secure Investor Dashboard to:</br>
                            * Track your distribution history</br>
                            * Monitor your position performance</br>
                            * Renew or open new positions</br>
                            * View your capital summary and terms</br>
                        </p>                        
                    </li>
                    <li>
                        <div class="featured-icon-holder2">						
                            <img class="maxWidth130" alt="Business Strategy" src="assets/images/icon-666.png">												
                        </div>
                        <h3 class="leftText">12-Month Terms with Simple Renewa</h3>
                        <p class="leftText">At the end of each term:</br>
                            * Reinvest your capital in a new cycle</br>
                            * Withdraw your principal</br>
                            * Increase your participation level</br>
                        </p>
                    </li>
                </ul>                
            </div>
        </div>        
    </div>


    <div class="transparencySec">
        <div class="fixedContent">
            <div class="transparencySecRow">
                <div class="column11">
                    <h2>Let Your Money and Verifen Work for You</h2>
                    <p>Traditional banks offer 0.5% to 1.5% annually on CDs or savings. Verifen offers higher monthly earning guaranteed. 
                        No market swings. No stock volatility. Just a smarter, simpler way to grow your wealth.</p>
                    <p>Whether you're an experienced investor, high net worth individual, or simply looking for a better return 
                        on idle capital, Verifen is the safer, smarter choice.</p>

                    <p class="mb-0"><strong>Security. Stability. Simplicity.</strong></p>
                    <ul class="security-list">
                        <li>
                           <strong>100% Principal Guarantee</strong>
                           <p class="mb-0">Your capital is never exposed to loan defaults.</p>
                        </li>
                        <li>
                           <strong>Consistent, Predictable Earnings</strong>
                           <p class="mb-0">Consistent, Predictable Earnings Receive a fixed payout every month, 
                            deposited directly to your account.</p>
                        </li>
                        <li>
                           <strong>No Market Risk</strong>
                           <p class="mb-0">Your returns aren’t tied to Wall Street or the crypto market.</p>
                        </li>
                        <li>
                           <strong>Institutional-Level Risk Controls</strong>
                           <p class="mb-0">Every loan is backed by personal guarantees and strict qualification processes.</p>
                        </li>
                        <li>
                            <strong>What You’re Really Getting</strong>
                            <p class="mb-0">100% Capital Protection</p>
                            <p class="mb-0">Your position is secured by Verifen’s risk-managed reserve structure.</p>
                        </li>
                        <li>
                            <strong>Guaranteed Fixed Monthly Payouts</strong>                            
                            <p class="mb-0">Guaranteed Fixed Monthly Payouts Distributions based on Verifen’s receivables 
                                participation pool, not loan repayments.</p>
                        </li>
                        <li>
                            <strong>Strategic Business Oversight</strong>                           
                            <p class="mb-0">Your capital helps fund businesses supported by hands-on optimization.</p>
                        </li>
                    </ul>                   

                </div>
                <div class="column22">
                    <figure>
                        <img src="assets/images/direct-funders-bright-final-img05.png" class="fr-fic fr-dib " alt="Direct-Funders">
                    </figure>
                </div>
            </div>
        </div>
    </div>

    <div id="verifen" class="directFunders">
        <div class="fixedContent">
            <div class="directFundersRow">
                <div class="column2">
                    <figure>
                        <img src="assets/images/direct-funders-bright-final-img03.png" class="fr-fic fr-dib " alt="Direct-Funders">
                    </figure>
                </div>
                <div class="column1">
                    <h2>Why Verifen?</h2>
                    <p>Verifen is a leading name in small business funding, offering:</p>
                    <h3 class="mb-0">Here’s what makes us different:</h3>
                    <ul>
                        <li>Revenue-Based Capital Programs</li>
                        <li>MCA (Merchant Cash Advance) Alternatives</li>
                        <li>Term Loans and Lines of Credit</li>
                        <li>Advanced Business Growth Strategy</li>
                    </ul>
                    <p>We’ve helped thousands of companies scale profitably—and now, we’re giving investors a 
                        smart new way to benefit from that growth.</p>
                </div>
            </div>
        </div>
    </div>


    <div class="landing-commonSec">
    <div class="container">
        <div class="lanimagebgsec iplanimagebgsec">
            <!-- <img alt="Image" src="{{ 'assets/images/office-indoor.jpg' }}">	 -->
            <div class="bgopacity becomeSecBg">
                <div class="text-center becomeSec">
                    <h2>Become a Verifen Investor Today</h2>
                <p>Start earning more from your money. Grow your capital with confidence.
                    Join a network of investors who trust Verifen to protect their funds and deliver consistent returns.
                </p>

                <form class="investor-form">
                    <div class="formFlex">
                        <div class="formCol">
                            <span>Company Name</span>
                            <input type="text" placeholder="Company Name" />
                        </div>
                        <div class="formCol">
                            <span>Company Address</span>
                            <input type="text" placeholder="Company Address">
                        </div>
                    </div>

                    <div class="formFlex">
                        <div class="formCol">
                            <span>Email Address</span>
                            <input type="text" placeholder="Email Address" />
                        </div>
                        <div class="formCol">
                            <span>Phone Number</span>
                            <input type="text" placeholder="Phone Number">
                        </div>
                    </div>

                    <div class="formFlex">
                        <div class="formCol fullWidth">
                            <span>Potential Investment Amount</span>
                            <div class="selectDropdownSec">
                                <select class="selectDropdown">
                                    <option selected="">Select One</option>
                                    <option>Up to $50,000</option>
                                    <option>$50,000 - $100,000</option>
                                    <option>$100,000 - $250,000</option>
                                    <option>$250,000 - $500,000</option>
                                    <option>$500,000 +</option>
                                </select>
                            </div>
                        </div>                        
                    </div>

                    <div class="text-center">
                        <input type="button" class="applyButton" value="Review & Submit" />
                    </div>

                </form>
                
                </div>
            </div>
        </div>
    </div>
</div>

    

    <div id="faqs" class="faqSecRow pt-0">        
            <div class="faqSec"> 
                <div class="container">           
                    <h2>Frequently Asked Questions</h2>
                    <div class="details">
                        <details class="detailsContainer">
                            <summary class="detailsSummary">
                                <!-- The title -->
                                <h3 class="detailsTitle">Is this a loan or interest based investment?</h3>
                            </summary>
                        </details>
                        <!-- The content -->
                        <div class="detailsDesc">
                            <div class="detailsDescInner">
                                No. Verifen does not offer lending investments. Your capital purchases a share of Verifen’s projected 
                                receivables pool under a fixed factor rate structure. It is not classified as interest or a debt security.
                            </div>
                        </div>
                    </div>
                    <div class="details">
                        <details class="detailsContainer">
                            <summary class="detailsSummary">
                                <!-- The title -->
                                <h3 class="detailsTitle">How is my principal protected?</h3>
                            </summary>
                        </details>
                        <!-- The content -->
                        <div class="detailsDesc">
                            <div class="detailsDescInner">
                                Your principal is not tied to any specific loan and your position is supported by Verifen’s internal 
                                reserves, diversified assets, and non-performance risk controls. Your capital is not tied to any 
                                single borrower.
                            </div>
                        </div>
                    </div>
                    <div class="details">
                        <details class="detailsContainer">
                            <summary class="detailsSummary">
                                <!-- The title -->
                                <h3 class="detailsTitle">What happens if Verifen doesn’t deploy my capital during the investment period?</h3>
                            </summary>
                        </details>
                        <!-- The content -->
                        <div class="detailsDesc">
                            <div class="detailsDescInner">
                                You will still receive your guaranteed monthly returns. Your earnings are not dependent on whether 
                                your capital is used or repaid, returns are fixed and backed by Verifen’s reserve structure.
                            </div>
                        </div>
                    </div>

                    <div class="details">
                        <details class="detailsContainer">
                            <summary class="detailsSummary">
                                <!-- The title -->
                                <h3 class="detailsTitle">How do I access my monthly returns?</h3>
                            </summary>
                        </details>
                        <!-- The content -->
                        <div class="detailsDesc">
                            <div class="detailsDescInner">
                            We deposit your monthly returns directly into your bank account, and you can track it in your investor portal.
                            </div>
                        </div>
                    </div>

                    <div class="details">
                        <details class="detailsContainer">
                            <summary class="detailsSummary">
                                <!-- The title -->
                                <h3 class="detailsTitle">Can I reinvest or increase my investment?</h3>
                            </summary>
                        </details>
                        <!-- The content -->
                        <div class="detailsDesc">
                            <div class="detailsDescInner">
                                Yes. You can renew your position at the end of each 12-month term or start additional investment 
                                positions at any time during the year, based on your financial goals and available capital.
                            </div>
                        </div>
                    </div>

                    <div class="details">
                        <details class="detailsContainer">
                            <summary class="detailsSummary">
                                <!-- The title -->
                                <h3 class="detailsTitle">Is there a minimum investment amount?</h3>
                            </summary>
                        </details>
                        <!-- The content -->
                        <div class="detailsDesc">
                            <div class="detailsDescInner">
                                Yes. The minimum investment to participate is $10,000, with a maximum of $250,000 accepted 
                                for new investor accounts.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

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

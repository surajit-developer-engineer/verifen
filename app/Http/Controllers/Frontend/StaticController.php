<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function termsOfUse()
    {
        $meta_data = [
            "title" => "Verifen | Terms of Use",
            "description" => "Review the Terms of Use for Verifen. Understand your rights and responsibilities when using our services. By accessing our site, you agree to these terms."
        ];
        return view('pages.frontend.static.terms-of-use', compact('meta_data'));
    }

    public function privacyPolicy()
    {
        $meta_data = [
            "title" => "Verifen | Privacy Policy",
            "description" => "Learn how Verifen collects, uses, and protects your personal data. Our Privacy Policy ensures your information is handled securely and with respect."
        ];
        return view('pages.frontend.static.privacy-policy', compact('meta_data'));
    }

    public function tcpaConsent()
    {
        $meta_data = [
            "title" => "Verifen | TCPA Consent",
            "description" => "Review our TCPA Consent policy. By providing your contact information, you agree to receive calls and messages from Verifen under the Telephone Consumer Protection Act."
        ];
        return view('pages.frontend.static.tcpa-consent', compact('meta_data'));
    }

    public function termsOfApplication()
    {
        $meta_data = [
            "title" => "Verifen | Terms of Application",
            "description" => "Understand the Terms of Application for Verifen. Learn the conditions under which your application for business financing will be processed and reviewed."
        ];
        return view('pages.frontend.static.terms-of-application', compact('meta_data'));
    }

    public function californiaPrivacy()
    {
        $meta_data = [
            "title" => "Verifen | California Privacy Rights",
            "description" => "As a California resident, you have specific rights under the CCPA. Review Verifen’s California Privacy Notice and understand your rights regarding personal data."
        ];
        return view('pages.frontend.static.california-privacy', compact('meta_data'));
    }

    public function creditAuthorization()
    {
        $meta_data = [
            "title" => "Verifen | Credit Authorization",
            "description" => "Review our Credit Authorization terms. By applying for funding with Verifen, you authorize us to obtain your credit report for evaluation purposes."
        ];
        return view('pages.frontend.static.credit-authorization', compact('meta_data'));
    }

    public function electronicDisclosure()
    {
        $meta_data = [
            "title" => "Verifen | Electronic Disclosure",
            "description" => "Verifen’s Electronic Disclosure policy ensures that you receive and consent to electronic communications regarding your funding application and related services."
        ];
        return view('pages.frontend.static.electronic-disclosure', compact('meta_data'));
    }

    public function optOut()
    {
        $meta_data = [
            "title" => "Verifen | Opt-Out of Communications",
            "description" => "Manage your communication preferences with Verifen. Learn how to opt-out of receiving marketing emails, notifications, or other promotional materials from us."
        ];
        return view('pages.frontend.static.opt-out', compact('meta_data'));
    }

    public function contactUs()
    {
        $meta_data = [
            "title" => "Contact Verifen | Get in Touch with a Business Loan Advisor Today",
            "description" => "Need funding or support for your business? Contact Verifen’s expert advisors today. Fast response, transparent answers, and personalized guidance, just a message away."
        ];
        return view('pages.frontend.static.contact-us', compact('meta_data'));
    }

     public function investorProgram()
    {
        $meta_data = [
            "title" => "Investor Program | Earn Fixed Monthly Returns with Verifen",
            "description" => "Join Verifen’s Investor Program and earn 2% fixed monthly distributions through our structured receivables purchase model. Capital secured, risk diversified, returns guaranteed, no loans, no market exposure."
        ];
        return view('pages.frontend.static.investor-program', compact('meta_data'));
    }

    public function businessLoans()
    {
        $meta_data = [
            "title" => "Business Loans Made Simple | Fast & Flexible Funding with Verifen",
            "description" => "Access affordable business loans with Verifen, trusted by entrepreneurs nationwide. Get approved fast with low rates, high limits, and zero hidden fees. Start growing your business today."
        ];
        return view('pages.frontend.static.business-loans', compact('meta_data'));
    }

    public function businessLoansApplication()
    {
        return view('pages.frontend.static.business-loans-application');
    }

}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function termsOfUse()
    {
        $meta_data = [
            "title" => "Verifen Funding | Terms of Use",
            "description" => "Review the Terms of Use for Verifen Funding LLC. Understand your rights and responsibilities when using our services. By accessing our site, you agree to these terms."
        ];
        return view('pages.frontend.static.terms-of-use', compact('meta_data'));
    }

    public function privacyPolicy()
    {
        $meta_data = [
            "title" => "Verifen Funding | Privacy Policy",
            "description" => "Learn how Verifen Funding LLC collects, uses, and protects your personal data. Our Privacy Policy ensures your information is handled securely and with respect."
        ];
        return view('pages.frontend.static.privacy-policy', compact('meta_data'));
    }

    public function tcpaConsent()
    {
        $meta_data = [
            "title" => "Verifen Funding | TCPA Consent",
            "description" => "Review our TCPA Consent policy. By providing your contact information, you agree to receive calls and messages from Verifen Funding under the Telephone Consumer Protection Act."
        ];
        return view('pages.frontend.static.tcpa-consent', compact('meta_data'));
    }

    public function termsOfApplication()
    {
        $meta_data = [
            "title" => "Verifen Funding | Terms of Application",
            "description" => "Understand the Terms of Application for Verifen Funding LLC. Learn the conditions under which your application for business financing will be processed and reviewed."
        ];
        return view('pages.frontend.static.terms-of-application', compact('meta_data'));
    }

    public function californiaPrivacy()
    {
        $meta_data = [
            "title" => "Verifen Funding | California Privacy Rights",
            "description" => "As a California resident, you have specific rights under the CCPA. Review Verifen Funding’s California Privacy Notice and understand your rights regarding personal data."
        ];
        return view('pages.frontend.static.california-privacy', compact('meta_data'));
    }

    public function creditAuthorization()
    {
        $meta_data = [
            "title" => "Verifen Funding | Credit Authorization",
            "description" => "Review our Credit Authorization terms. By applying for funding with Verifen Funding, you authorize us to obtain your credit report for evaluation purposes."
        ];
        return view('pages.frontend.static.credit-authorization', compact('meta_data'));
    }

    public function electronicDisclosure()
    {
        $meta_data = [
            "title" => "Verifen Funding | Electronic Disclosure",
            "description" => "Verifen Funding’s Electronic Disclosure policy ensures that you receive and consent to electronic communications regarding your funding application and related services."
        ];
        return view('pages.frontend.static.electronic-disclosure', compact('meta_data'));
    }

    public function optOut()
    {
        $meta_data = [
            "title" => "Verifen Funding | Opt-Out of Communications",
            "description" => "Manage your communication preferences with Verifen Funding. Learn how to opt-out of receiving marketing emails, notifications, or other promotional materials from us."
        ];
        return view('pages.frontend.static.opt-out', compact('meta_data'));
    }
}

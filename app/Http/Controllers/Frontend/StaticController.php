<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function termsOfUse()
    {
        return view('pages.frontend.static.terms-of-use');
    }

    public function privacyPolicy()
    {
        return view('pages.frontend.static.privacy-policy');
    }

    public function tcpaConsent()
    {
        return view('pages.frontend.static.tcpa-consent');
    }

    public function termsOfApplication()
    {
        return view('pages.frontend.static.terms-of-application');
    }

    public function californiaPrivacy()
    {
        return view('pages.frontend.static.california-privacy');
    }

    public function creditAuthorization()
    {
        return view('pages.frontend.static.credit-authorization');
    }

    public function electronicDisclosure()
    {
        return view('pages.frontend.static.electronic-disclosure');
    }

    public function optOut()
    {
        return view('pages.frontend.static.opt-out');
    }

    public function contactUs()
    {
        return view('pages.frontend.static.contact-us');
    }

     public function investorProgram()
    {
        return view('pages.frontend.static.investor-program');
    }

    public function businessLoans()
    {
        return view('pages.frontend.static.business-loans');
    }

    public function businessLoansApplication()
    {
        return view('pages.frontend.static.business-loans-application');
    }

}

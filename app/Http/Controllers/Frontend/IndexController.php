<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $meta_data = [
            "title" => "Verifen Business Loans | Affordable Loans, fast Approvals, Maximum Growth",
            "description" => "Scale without limits with Verifen. Affordable business loans with fast approvals and same-day funding, trusted by thousands of growing businesses. Rated #1 for fueling real business growth. Apply in minutes."
        ];
        return view('pages.frontend.index', compact('meta_data'));
    }

    public function application()
    {
        $meta_data = [
            "title" => "Apply Now | Verifen Business Loans & MCA with Lower Interest Rates",
            "description" => "Apply for a Verifen business loan or MCA. Guaranteed lower interest rates, transparent terms, and funding up to $2M. Fast, secure process."
        ];
        return view('pages.frontend.application', compact('meta_data'));
    }

    public function partner()
    {
        $meta_data = [
            "title" => "Apply to Be a Verifen Partner | Transparent MCA Funding Program",
            "description" => "Apply to join Verifen as an MCA and loan funder. Help qualified businesses access transparent funding with fast and simple funding process."
        ];
        return view('pages.frontend.partner', compact('meta_data'));
    }

    public function partnerSignup()
    {
        $meta_data = [
            "title" => "Become a Verifen Partner | Transparent MCA & Low-Rate Loans",
            "description" => "Partner with Verifen to fund qualified businesses with transparent loans and MCAs. Fast, simple process with a trusted track record."
        ];
        return view('pages.frontend.partner-signup', compact('meta_data'));
    }
}

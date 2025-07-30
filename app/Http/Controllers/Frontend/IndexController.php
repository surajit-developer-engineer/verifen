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
            "title" => "Verifen Business Loans | Affordable Loans, fast Approvals, Maximum Growth",
            "description" => "Scale without limits with Verifen. Affordable business loans with fast approvals and same-day funding, trusted by thousands of growing businesses. Rated #1 for fueling real business growth. Apply in minutes."
        ];
        return view('pages.frontend.application', compact('meta_data'));
    }

    public function partner()
    {
        $meta_data = [
            "title" => "Verifen Business Loans | Affordable Loans, fast Approvals, Maximum Growth",
            "description" => "Scale without limits with Verifen. Affordable business loans with fast approvals and same-day funding, trusted by thousands of growing businesses. Rated #1 for fueling real business growth. Apply in minutes."
        ];
        return view('pages.frontend.partner', compact('meta_data'));
    }

    public function partnerSignup()
    {
        $meta_data = [
            "title" => "Verifen Business Loans | Affordable Loans, fast Approvals, Maximum Growth",
            "description" => "Scale without limits with Verifen. Affordable business loans with fast approvals and same-day funding, trusted by thousands of growing businesses. Rated #1 for fueling real business growth. Apply in minutes."
        ];
        return view('pages.frontend.partner-signup', compact('meta_data'));
    }

}

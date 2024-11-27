<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Enquiry;
use App\Models\Order;

class DashboardController extends Controller
{
    public function index()
    {
        $dataCount['todayLeads'] = 10;
        $dataCount['weeklyLeads'] = 100;
        $dataCount['monthlyLeads'] = 10000;
        $dataCount['totalLeads'] = 100000;

        $dataArr = [
            "enquiryArr" => [],
            "dataCount" => $dataCount,
        ];

        return view('pages.admin.dashboard.index')->with('dataArr', $dataArr);
    }
}

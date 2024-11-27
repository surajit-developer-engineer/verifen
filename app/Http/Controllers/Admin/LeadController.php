<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    /**
     * Lead Partner Listing
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        $leads = Lead::orderBy('created_at', 'DESC')->get();

        return view('pages.admin.lead.index')
        ->with([
            'leads' => $leads
        ]);
    }

    /**
     * Lead Partner View Page
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function view($leadId)
    {
        $lead = Lead::find($leadId);

        return view('pages.admin.lead.view')
            ->with([
                'lead' => $lead
            ]);
    }
}

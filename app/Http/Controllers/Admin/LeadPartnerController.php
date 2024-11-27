<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LeadPartnerController extends Controller
{
    /**
     * Lead Partner Listing
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        // $leadPartners = LeadPartner::orderBy('created_at', 'DESC')->get();
        $leadPartners = collect();

        return view('pages.admin.lead_partner.index')
            ->with([
                'leadPartners' => $leadPartners
            ]);
    }

    /**
     * Lead Partner Add Page
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function add()
    {
        return view('pages.admin.lead_partner.add');
    }

    /**
     * Lead Partner Store
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function insert(Request $request)
    {
        $request->validate([
            'company_name' => 'required|unique:leadPartners,company_name',
        ]);

        LeadPartner::create([
            'company_name' => $request->company_name
        ]);

        $log = "Created company name is " . $request->company_name;
        Self::insertUserLog($log);

        return redirect()->route('admin.lead.partner')->with([
            "message" => [
                "result" => "success",
                "msg" => "Lead Partner Added Successfully."
            ]
        ]);
    }

    /**
     * Lead Partner Edit Page
     * @param int $id
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function edit($id)
    {
        $leadPartner = LeadPartner::find($id);

        return view('pages.admin.lead_partner.edit')
            ->with([
                'leadPartner' => $leadPartner
            ]);
    }

    /**
     * Lead Partner Update
     * @param int $id
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => 'required|unique:lead_partners,email,' . $id,
        ]);

        $leadPartner = LeadPartner::find($id);
        if ($leadPartner) {
            $leadPartner->email = $request->email;
            $leadPartner->save();

            return redirect()->route('admin.lead.partner')->with([
                "message" => [
                    "result" => "success",
                    "msg" => "Lead Partner Updated Successfully."
                ]
            ]);
        } else {
            return redirect()->back()->with([
                "message" => [
                    "result" => "error",
                    "msg" => "Unable To Update Lead Partner."
                ]
            ]);
        }
    }

    /**
     * Lead Partner Delete
     * @param int $id
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function delete($id)
    {
        $leadPartner = LeadPartner::find($id);
        if (!$leadPartner) {
            $leadPartner->delete();

            return redirect()->back()->with([
                "message" => [
                    "result" => "success",
                    "msg" => "Lead Partner Deleted Successfully."
                ]
            ]);
        } else {
            return redirect()->back()->with([
                "message" => [
                    "result" => "error",
                    "msg" => "Unable To Delete Lead Partner."
                ]
            ]);
        }
    }
}

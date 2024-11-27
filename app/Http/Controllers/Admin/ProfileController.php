<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ProfileController extends Controller
{
    public function changePassword(Request $request)
    {
        // Validate the form data
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|confirmed|min:6'
        ]);

        $adminArr = Auth::user();
        if (Hash::check($request->current_password, $adminArr->password)) {
            $updateArray['password'] = bcrypt($request->password);
            $adminUpd = User::find($adminArr->id)->update($updateArray);

            $result = "success";
            $message = 'Password Changed Successfully';
        } else {
            $result = "error";
            $message = 'Incorrect Current Password';
        }

        return redirect()->intended(route('admin.dashboard'))
            ->with([
                "message" => [
                    "result" => $result,
                    "msg" => $message
                ]
            ]);
    }

    public function profileUpdate(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
        ]);

        $adminArr = Auth::user();
        $updateArray['name'] = $request->name;
        $updateArray['phone'] = $request->phone;
        $adminUpd = User::find($adminArr->id)->update($updateArray);

        return redirect()->intended(route('admin.dashboard'))
            ->with([
                "message" => [
                    "result" => "success",
                    "msg" => 'Profile Updated Successfully'
                ]
            ]);
    }
}

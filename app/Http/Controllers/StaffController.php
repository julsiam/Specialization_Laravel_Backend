<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Staff;

class StaffController extends Controller
{
    public function registerStaff(Request $request)
    {
        $request->validate([
            'fname' => 'required|min:2|max:20',
            'lname' => 'required|min:2|max:20',
            'email' => 'required|email|unique:staff',
            'password' => 'required|min:8',
            'cpassword' => 'required|same:password',

        ]);

        return Staff::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    }

    public function getStaffById($id)
    {
        return Staff::find($id);
    }
}

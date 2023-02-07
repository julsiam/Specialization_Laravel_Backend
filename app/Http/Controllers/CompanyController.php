<?php

namespace App\Http\Controllers;
use App\Models\Company;
use Illuminate\Support\Facades\Hash;


use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function companyReg(Request $request)
    {
        // $regex = '/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/';

        $request->validate([
            'companyname' => 'required|min:2|max:100    ',
            'email' => 'required|email|unique:companies',
            'companyaddress' => 'required|min:2|',
            'companyurl'=> ['required','regex:/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i'],
            'password' => 'required|min:8',
            'cpassword' => 'required|same:password',
        ]);

        return Company::create([
            'companyname' => $request->companyname,
            'email' => $request->email,
            'companyaddress' => $request->companyaddress,
            'companyurl' => $request->companyurl,
            'password' => Hash::make($request->password),
        ]);
    }

    public function getCompanies(){
        return Company::all();
    }


    public function updateCompany(Request $request, $id){

        return Company::find($id)->update([
            'companyname' => $request->companyname,
            'email' => $request->email,
            'companyaddress' => $request->companyaddress,
            'companyurl' => $request->companyurl,
            'password' => Hash::make($request->password),
        ]);
    }
}

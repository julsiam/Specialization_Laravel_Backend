<?php

namespace App\Http\Controllers;

use App\Models\CompanyRequest;


use Illuminate\Http\Request;

class CompanyRequestController extends Controller
{
    public function compRequest(Request $request)
    {
        $request->validate([
            'company' => 'required|min:2',
            'requests' => 'required',
            'place' => 'required',
            'year' => 'required',
            'purpose' => 'required',
        ]);

        return CompanyRequest::create([
            'company' => $request->company,
            'requests' => $request->requests,
            'place' => $request->place,
            'year' => $request->year,
            'purpose' => $request->purpose,

            // 'company' => $request->get('company'),
            // 'request' => $request->get('request'),
            // 'place' => $request->get('place'),
            // 'year' => $request->get('year'),
            // 'purpose' => $request->get('purpose'),

        ]);
    }

    public function getRequests(){
        return CompanyRequest::all();
    }
}

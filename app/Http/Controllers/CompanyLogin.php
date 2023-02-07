<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Models\Company;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class CompanyLogin extends Controller
{
    public function loginPartner(Request $request)
    {
        $validateData = Validator::make(

            $request->all(),
            [
                'email' => 'required',
                'password' => 'required'
            ]   
        );

        if ($validateData->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Error',
                'errors' => $validateData->errors()
            ], 401);
        }

        if (!Auth::attempt($request->only(['email', 'password']))) {
            return response()->json([
                'status' => false,
                'error' => 'Credentials dont match our record',
            ], 401);
        }

        $company = Company::where('email', $request->email)->first();

        return response()->json([
            'status' => true,
            'message' => 'Successful',
            'token' => $company->createToken("API TOKEN")->plainTextToken
        ], 200);
    }
}

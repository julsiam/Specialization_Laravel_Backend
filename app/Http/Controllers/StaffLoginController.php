<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Staff;
use Illuminate\Support\Facades\Hash;


class StaffLoginController extends Controller
{
    public function loginStaff(Request $request)
    {

        $validateData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'

        ]);


        $user = Staff::where('email', $validateData['email'])->first();

        if ($user && Hash::check($validateData['password'], $user->password)) {
            $token = $user->createToken('api', ['create']);

            return [
                'user' => $user,
                'token' => $token->plainTextToken
            ];
        }
        if (!Auth::attempt($request->only(['email', 'password']))) {
            return response()->json([
                'status' => false,
                'error' => 'Credentials dont match our record',
            ], 401);
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function registerUser(Request $request)
    {
        $request->validate([
            'fname' => 'required|min:2|max:20',
            'lname' => 'required|min:2|max:20',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'cpassword' => 'required|same:password',

        ]);

        return User::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    }

    public function getCustomers()
    {
        return User::all();
    }

    // public function getUserById($id)
    // {
    //     return User::find($id);
    // }

    // public function getUserByRole($role)
    // {
    //     return User::find($role);
    // }
}

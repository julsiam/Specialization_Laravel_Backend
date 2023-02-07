<?php

namespace App\Http\Controllers;
use App\Models\Marriage;

use Illuminate\Http\Request;

class MarriageController extends Controller
{
    public function marriageRegister(Request $request)
    {

        $request->validate([
            'sex' => 'required',
            'fname' => 'required|min:2|max:20',
            'mname' => 'required|min:2|max:20',
            'lname' => 'required|min:2|max:20',
            'birthdate' => 'required',
            'birthplace' => 'required',
            'idtype' => 'required',
            'sfirstname' =>'required|min:2|max:20',
            'smiddlename' => 'required|min:2|max:20',
            'slastname' => 'required|min:2|max:20',
            'marriageDate' => 'required',
            'marriageplace' => 'required',
            'purpose' => 'required',
            'legalProceedings' =>'required',
            'phone' => 'required',
        ]);

        return Marriage::create([
            'sex' => $request->sex,
            'fname' => $request->fname,
            'mname' => $request->mname,
            'lname' => $request->lname,
            'birthdate' => $request->birthdate,
            'birthplace' => $request->birthplace,
            'idtype' => $request->idtype,
            'sfirstname' => $request->sfirstname,
            'smiddlename' => $request->smiddlename,
            'slastname' => $request->slastname,
            'marriageDate' => $request->marriageDate,
            'marriageplace' => $request->marriageplace,
            'purpose' => $request->purpose,
            'legalProceedings' => $request->legalProceedings,
            'phone' => $request->phone,
            'status' => 'Pending'
        ]);
    }

    public function getMarriage($id){
        return Marriage::find($id);
    }

    public function getMarriages(){
        return Marriage::all();
    }

    public function updateMarriage(Request $request, $id){

        return Marriage::find($id)->update([
            'sex' => $request->sex,
            'fname' => $request->fname,
            'mname' => $request->mname,
            'lname' => $request->lname,
            'birthdate' => $request->birthdate,
            'birthplace' => $request->birthplace,
            'idtype' => $request->idtype,
            'ffname' => $request->ffname,
            'fmname' => $request->fmname,
            'flname' => $request->flname,
            'mfname' => $request->mfname,
            'mmname' => $request->mmname,
            'mlname' => $request->mlname,
            'latereg' => $request->latereg,
            'purpose' => $request->purpose,
            'phone' => $request->phone,
            'status'=>$request->status,
        ]);
    }
}

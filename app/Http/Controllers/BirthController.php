<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Birth;

class BirthController extends Controller
{
    public function birthRegister(Request $request)
    {

        $request->validate([
            'sex' => 'required',
            'fname' => 'required|min:2|max:20',
            'mname' => 'required|min:2|max:20',
            'lname' => 'required|min:2|max:20',
            'birthdate' => 'required',
            'birthplace' => 'required',
            'idtype' => 'required',
            'ffname' =>'required|min:2|max:20',
            'fmname' => 'required|min:2|max:20',
            'flname' => 'required|min:2|max:20',
            'mfname' => 'required|min:2|max:20',
            'mmname' => 'required|min:2|max:20',
            'mlname' => 'required|min:2|max:20',
            'latereg' =>'required',
            'purpose' => 'required',
            'phone' => 'required|numeric|min:10'
        ]);

        return Birth::create([
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
            'status' => 'Pending'
        ]);
    }

    public function getBirth($id){
        return Birth::find($id);
    }

    public function getBirths(){
        return Birth::all();
    }

    public function updateBirth(Request $request, $id){

        return Birth::find($id)->update([
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

    public function deleteBirth($id){
        return Birth::find($id)->delete();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class addMcontroller extends Controller
{
    //
    function addData(Request $req){
        $member = new Member;
        $member->name = $req->name;
        $member->email = $req->email;
        $member->city = $req->city;
        //dd($req->city);
        $member->save();
        return redirect('add');
        
    }
}

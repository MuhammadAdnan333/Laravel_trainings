<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MutatorController extends Controller
{
    //
    function index(){
        //return Member::all();
        $member = new Member;
        $member->name = "Adnan";
        $member->email = "a@q.com";
        $member->city = "Lahore";
        $member->save(); 
    }
}

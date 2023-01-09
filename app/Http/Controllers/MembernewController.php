<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
//Accessor
class MembernewController extends Controller
{
    //
    function index()
    {
        return Member::all();
    }
}

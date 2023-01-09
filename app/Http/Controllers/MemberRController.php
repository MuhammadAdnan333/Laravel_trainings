<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberRController extends Controller
{
    //One to One Relation
    // function index(){
    //     return Member::find('1')->companyData;
        
    // }

    //One To Many Relation
    function index2(){
     return Member::find(2)->device;   
    }
}

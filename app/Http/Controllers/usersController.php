<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class usersController extends Controller
{
    //Aggregate Methods
    function opreations(){
        // See All Records
        // return DB::table('members')->get();
        //Sum of All Records like total sum of all Records e.g=>1,2,3 =6;
        //return DB::table('members')->sum('id');
        //Minimum Value if we use methods for names then Show Alphabeticaly start with A and on word
        //return DB::table('members')->max('name');
        //Max Value if we use methods for names then Show Alphabeticaly start with Z and Backword
        //return DB::table('members')->max('name');
        //Find Avg only working with Id
        return DB::table('members')->avg('id');
        

    }
}

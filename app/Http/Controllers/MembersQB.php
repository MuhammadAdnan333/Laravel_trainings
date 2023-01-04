<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MembersQB extends Controller
{
    //
    function getAllresult(){
        $data = DB::table('members')->get();
        return view('listQb',['data'=>$data]);
    }
    function find(){
        //return DB::table('members')->where('city','skt')->get();
        // get result and print on table
        // $data = DB::table('members')->where('city','skt')->get();
        // return view('listQbf',['data'=>$data]);
        //Insert Query using query Builder
        // return DB::table('members')->insert([
        //     'name'=>'Adnan',
        //     'email'=>'m@gmail.com',
        //     'city'=>'Shahkot'
        // ]);
        // Update Records
        // return DB::table('members')
        // ->where('id','10')
        // ->update([
        //     'name'=>'Adnan',
        //     'email'=>'m@gmail.com',
        //     'city'=>'Lahore'
        // ]);
        // Delete Reords
        return DB::table('members')
        ->where('id','10')
        ->delete();

    }
}

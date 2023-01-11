<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class memberController extends Controller
{
    //
    function show(){
        $data =  Member::paginate(5);
        return view('list',['members'=>$data]);
        //echo "Welcome From Member Controller";
    }
    function list(){
        $data = Member::all();
        return view('listdel',['members'=>$data]);
    }
    function delete($id){
        $data = Member::find($id)->delete();
       // $data = delete($id);
        return redirect('listdel'); 
    }
    function showData($id){
             //$data =  Member::paginate(5);
             //return view('list',['members'=>$data]);
             $data =  Member::find($id);
             return view('edit',['data'=>$data]);
    }
    function update( Request $req){
        $data = Member::find($req->id);
        $data->name = $req->name;
        $data->email = $req->email;
        $data->city = $req->city;
        $data->save();
        return redirect('listdel'); 
    }
}

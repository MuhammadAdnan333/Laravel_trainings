<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class employeeController extends Controller
{
    //
    function getData(){
        return DB::table('employees')
        ->join('company','employees.id','=','company.employee_id')
        ->get();
        //echo "From EMp Controller";
    }
}

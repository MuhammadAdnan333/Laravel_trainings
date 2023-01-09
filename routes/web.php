<?php

use App\Http\Controllers\memberController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\storeController;
use App\Http\Controllers\userAuth; 
use App\Http\Controllers\uploadController;
use App\Http\Controllers\addMcontroller;
use App\Http\Controllers\MembersQB;
use App\Http\Controllers\usersController;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\MemberNewController;
use App\Http\Controllers\MutatorController;
use App\Http\Controllers\MemberRController;
use Illuminate\Support\Facades\App;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route ::get('/',function(){
    return view('welcome');
});
Route ::get('/home',function(){
    return view('home');
});

//for dynamic usage
// Route::get('/{name}', function ($name) {
//     //echo $name;
//     return view('welcome',['name'=>$name]);
// });
Route::get('/aboutUs',function(){
    return view('aboutUs');
});

//shorter Way to make Route
//Route::view('aboutUs','/aboutUs');
//Make Controller View
//Route::get('users',[UserController::class,'loadView']);

 
//Route::view('users','/users');
//Route::view('login','users');
//Route::post('users',[UserController::class,'getData']);

Route::view('noaccess','noaccess');
// Route::group(['middleware'=>['protectedGroup']],function(){
//     Route::get('/users',function(){
//         return view('users');
//     });
// });

// Route::get('/users',function(){
//              return view('users');
//          });

//Route::view('/home','home')->middleware('protected');
//Route::get('users',[UserController::class,'getData']);
//Route::get('users',[UserController::class,'index']);
//Route::get('users',[UserController::class,'testRequest']);
Route::delete('users',[UserController::class,'testRequest']);
Route::view('login','users');
Route::view('store','storeUser');
Route::post('storeController',[storeController::class,'storeM']);
Route::view('login','login');
Route::view('profile','profile');
Route::get('/logout',function() {
             if(session()->has('user'))
             {
                session()->pull('user');
             }
            return redirect('login');
         });
Route::get('/login',function() { 
            if(session()->has('user'))
            {
                return redirect('profile');
            }
            return view('login');
            });

Route::post('user',[userAuth::class,'userLogin']);
Route::view('upload','upload');
Route::post('upload',[uploadController::class,'index']);
//Route::view('profile1','profile1');
Route ::get('/profile1/{lang}',function($lang){
    App::setlocale($lang);
    return view('profile1');
});
Route::get('list',[memberController::class,'show']);
Route::POST('add',[addMcontroller::class,'addData']);
Route::view('add','addmember');
Route::get('listdel',[memberController::class,'list']);
Route::get('delete/{id}',[memberController::class,'delete']);
Route::get('edit/{id}',[memberController::class,'showData']);
Route::POST('edit',[memberController::class,'update']);
Route::get('listQB',[MembersQB::class,'getAllresult']);
Route::get('listQBf',[MembersQB::class,'find']);
Route::get('list',[usersController::class,'opreations']);
Route::get('list',[employeeController::class,'getData']);
Route::get('member',[MemberNewController::class,'index']);
Route::get('member',[MutatorController::class,'index']);
Route::get('OnetoOneR',[MemberRController::class,'index']);
Route::get('data',[MemberRController::class,'index2']);
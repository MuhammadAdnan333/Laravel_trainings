<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    public $timestamps = false;
    //Accessor Model Functions
    // function getNameAttribute($value){
    //     return ucfirst($value);
    // }
    // function getCityAttribute($value){
    //     return $value. ",pakistan";
    // }
    //Function Fir Mutator    
    // public function setNameAttribute($value){
    //     return $this->attributes['name'] = 'Mr. '.$value;
    // }
    //Function For One to One Relation
    // function companyData(){
    //     return $this->hasOne(Company::class);
    // }
    function device(){
        return $this->hasMany(Device::class);
    }


}

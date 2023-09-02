<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airline extends Model
{
    public $table='airlines';
    protected $fillable=[
        'name',
        'description',
        'phone',
        'rate',
        'logo',
        'website'
    ];
    use HasFactory;
    public function airline()
    {
        return $this->hasMany(Airline_Country::class,'airline_id');
    }
    public function single_trip(){
        return $this->hasMany(Single_trip::class,'airline_id');
    }
   
}

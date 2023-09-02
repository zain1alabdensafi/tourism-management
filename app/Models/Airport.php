<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    public $table='airports';
    protected $fillable=[
        'country_id',
        'city_id',
        'name'
        ];
    use HasFactory;
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function Single_trip(){
        return $this->hasMany(Single_trip::class,'airport_id');
    } 
}

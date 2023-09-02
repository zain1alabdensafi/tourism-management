<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Places extends Model
{  public $table='places';
    protected $fillable=[
        'city_id',
        'name',
        'address',
        'description',
        'rate',
        'image_profile',
        'price'
    ];
    public function city(){
        return $this->belongsTo(City::class);
    }
    public function image(){
        $this->hasMany(imageplaces::class,'place_id');
    }
    public function review(){
        $this->hasMany(Review_place::class,'place_id');
    }
    public function favourite(){
        $this->hasMany(Favourite_place::class,'place_id');
    }
    public function reserve(){
        $this->hasMany(Reservation_place::class,'place_id');
    }
    use HasFactory;
}

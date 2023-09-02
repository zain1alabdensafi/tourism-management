<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class City extends Model
{
    use HasFactory;
    public $table = 'cities' ;
    protected $fillable = [
        'country_id',
        'Name',
        'description',
        'image_profile'
    ];
    public function country(){
        return $this->belongsTo(Country::class);
    }
    public function hotel(){
        return $this->hasMany(Hotel::class,'city_id');
    }
    public function restaurant(){
        return $this->hasMany(Restaurant::class,'city_id');
    }
    public function place(){
        return $this->hasMany(Places::class,'city_id');
    }
    public function airport(){
        return $this->hasMany(Airport::class,'city_id');
    }
    public function image_city(){
        return $this->hasMany(Image_city::class,'city_id');
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
    public $table = 'restaurants';
    protected $fillable = [
        'city_id',
        'name',
        'address',
        'type',
        'description',
        'image_profile',
        'phone',
        'rate'
    ];
    public function city(){
        return $this->belongsTo(City::class);
    }
    public function favourite_restaurant(){
        return $this->hasMany(Favourite_restaurant::class,'restaurant_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favourite_restaurant extends Model
{
    use HasFactory;
    public $table = 'favourites_restaurants';
    protected $fillable = [
        'user_id',
        'restaurant_id',
    ];
    public function user(){
        $this->belongsTo(User::class);
    }
    public function restaurant(){
        $this->belongsTo(Restaurant::class);
    }

}

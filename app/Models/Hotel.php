<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    public $table = 'hotels';
    protected $fillable = [
        'city_id',
        'Name',
        'Address',
        'description',
        'image_profile',
        'link',
        'phone',
        'stars',
        'number_of_room',
        'rate'
    ];
    public $timestamps=false;
    public function city(){
        return $this->belongsTo(City::class);
    }
    public function image(){
        $this->hasMany(Image::class,'hotel_id');
    }
    public function room(){
        $this->hasMany(Room::class,'hotel_id');
    }
    public function offer_room(){
        $this->hasMany(Offerroom::class,'hotel_id');
    }
    public function review(){
        $this->hasMany(Review_hotel::class,'hotel_id');
    }
    public function favourite(){
        $this->hasMany(Favourite_hotel::class,'hotel_id');
    }

}

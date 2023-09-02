<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favourite_hotel extends Model
{
    use HasFactory;
    public $table = 'favourites_hotel';
    protected $fillable = [
        'user_id',
        'hotel_id',
    ];
    public function user(){
        $this->belongsTo(User::class);
    }
    public function hotel(){
        $this->belongsTo(Hotel::class);
    }

}

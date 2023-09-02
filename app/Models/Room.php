<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    use HasFactory;

    public $table = 'rooms';
    protected $fillable = [
        'hotel_id',
        'type',
        'image',
        'description',
        'price',
        'number_of_person',
        'number_of_room',
        'is_available',
        'count'
    ];

    public function hotel()
    {
        $this->belongsTo(Hotel::class);
    }
    public function reserve(){
        
        return $this->hasMany(Reservation::class,'room_id');   
    }

}

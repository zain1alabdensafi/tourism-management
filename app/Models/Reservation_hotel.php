<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation_hotel extends Model
{
    use HasFactory;
    public $table = 'reservations';
    protected $fillable = [
        'user_id',
        'room_id',
        'duration',
        'check_in',
        'check_out',
        'price_total'
    ];
    public function room(){
        $this->belongsTo(Room::class);
    }
    public function user(){
        $this->belongsTo(User::class);
    }

}

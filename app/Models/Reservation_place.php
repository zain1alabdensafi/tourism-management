<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation_place extends Model
{
    public $table = 'reservation_places';
    protected $fillable = [
        'user_id',
        'place_id',
        'check_in',
        'check_out',
        'price_total'
    ];
    use HasFactory;
    public function user(){
        $this->belongsTo(User::class);
    }
    public function place(){
        $this->belongsTo(Places::class);
    }

}

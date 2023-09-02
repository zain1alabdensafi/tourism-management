<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Single_trip extends Model
{
    public $table = 'single_trips';
    use HasFactory;
    protected $fillable = [
        'airline_id',
        'airport_id',
        'source',
        'departure_airport',
        'destination',
        'arrival_airport',
        'starting_time',
        'ending_time',
        'number_of_person',
        'is_available',
        'count'
    ];
    public function airline(){
        return $this->belongsTo(Airline::class);
    }
    public function airport(){
        return $this->belongsTo(Airport::class);
    }
    public function single_ticket()
    {
        return $this->hasMany(Single_ticket::class,'trip_id');
    }
}

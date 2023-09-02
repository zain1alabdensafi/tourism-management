<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airline_Country extends Model
{
    public $table='airline_country';
    protected $fillable = [
        'country_id',
        'airline_id'
    ];
    use HasFactory;
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function airline()
    {
        return $this->belongsTo(Airline::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    public $table = 'countries';
    protected $fillable = [
        'Name',
        'Name_area',
        'capital',
        'language'
    ];
    public function city(){
        return $this->hasMany(City::class,'country_id');
    }
    public function airline_country()
    {
        return $this->hasMany(Airline_Country::class,'country_id');
    }
    public function airport()
    {
        return $this->hasMany(Airport::class,'country_id');
    }
}

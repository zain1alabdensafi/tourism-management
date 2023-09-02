<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image_city extends Model
{
    public $table ='image_cities';
    protected $fillable=[
        'city_id',
        'image'
    ];
    public function city(){
        return  $this->belongsTo(City::class);
    }
    use HasFactory;
}

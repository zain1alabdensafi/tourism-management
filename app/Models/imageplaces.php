<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class imageplaces extends Model
{
    public $table='image_places';
    protected $fillable=[
        'image',
        'place_id'
    ];
    use HasFactory;
public function place(){
    return $this->belongsTo(Places::class);
}
}

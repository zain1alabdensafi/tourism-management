<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offerroom extends Model
{
    use HasFactory;
    public $table = 'offerroom';
    protected $fillable = [
        'hotel_id',
        'type',
        'image',
        'description',
        'old_price',
        'new_price',
        'number_of_person',
        'is_available'
    ];
    public function hotel(){
        $this->belongsTo(Hotel::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review_hotel extends Model
{
    use HasFactory;
    public $table = 'review_hotel';
    protected $fillable = [
        'user_id',
        'hotel_id',
        'rate',
        'comment'
    ];
    public function Hotel()
    {
        $this->belongsTo(Hotel::class);
    }
    public function user()
    {
        $this->belongsTo(User::class);
    }
}

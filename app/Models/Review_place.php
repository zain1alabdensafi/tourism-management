<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review_place extends Model
{
    public $table = 'review_places';
    protected $fillable = [
        'user_id',
        'place_id',
        'rate',
        'comment'
    ];
    use HasFactory;
    public function place()
    {
        return $this->belongsTo(Places::class);
    }
    public function user()
    {
        $this->belongsTo(User::class);
    }
}

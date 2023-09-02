<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Single_ticket extends Model
{
    public $table = 'single_tickets';
    use HasFactory;
    protected $fillable = [
        'trip_id',
        'type',
        'price'
    ];
    public function single_trip ()
    {
        return $this->belongsTo(Single_trip::class);
    }
    public function reserve_single_ticket ()
    {
        return $this->hasMany(Reserve_Single_ticket::class);
    }
}

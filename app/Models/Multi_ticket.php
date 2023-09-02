<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Multi_ticket extends Model
{
    public $table = 'multi_tickets';
    protected $fillable = [
        'trip_id',
        'type',
        'price'
    ];
    public function multi_trip ()
    {
        return $this->belongsTo(Multi_trip::class);
    }
    public function reserve_multi_ticket ()
    {
        return $this->hasMany(Reserve_Multi_ticket::class);
    }
    use HasFactory;
}

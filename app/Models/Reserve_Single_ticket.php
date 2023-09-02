<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserve_Single_ticket extends Model
{
    public $table='reservation_single_ticket';
    protected $fillable=[
        'user_id',
        'ticket_id',
        'check_in',
        'price_total'
    ];
    use HasFactory;
    public function user(){
        $this->belongsTo(User::class);
    }
    public function single_ticket(){
        $this->belongsTo(Single_ticket::class);
    }

}

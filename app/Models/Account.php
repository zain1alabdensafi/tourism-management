<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    public $table = 'accounts' ;
    protected $fillable = [
        'bank_id',
        'email',
        'password',
        'balance'
    ];
    use HasFactory;
    public function bank(){
        return $this->belongsTo(Bank::class);
    }
}

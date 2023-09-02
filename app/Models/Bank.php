<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    public $table = 'banks' ;
    protected $fillable = [
        'name'
    ];
    public function account(){
        return $this->hasMany(Account::class,'bank_id');
    }
    use HasFactory;
}

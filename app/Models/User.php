<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'First_name',
        'Last_name',
        'nationality',
        'image',
        'gender',
        'email',
        'password',
        'email_verified_at'
    ];
    public function user(){
        $this->hasMany(Favourite_hotel::class,'user_id');
    }
    public function reserve(){
        $this->hasMany(Reservation_hotel::class,'user_id');
    }
    public function review(){
        $this->hasMany(Review_hotel::class,'user_id');
    }
    public function complaint(){
        $this->hasMany(Complaints::class,'user_id');
    }
    public function favourite_hotel(){
        $this->hasMany(Favourite_hotel::class,'user_id');
    }
    public function favourite_place(){
        $this->hasMany(Favourite_place::class,'user_id');
    }
    public function favourite_restaurant(){
        $this->hasMany(Favourite_restaurant::class,'user_id');
    }
    public function Reservation_hotel(){
        $this->hasMany(Reservation_hotel::class,'user_id');
    }
    public function Reservation_place(){
        $this->hasMany(Reservation_place::class,'user_id');
    }
    public function Reserve_Multi_ticket(){
        $this->hasMany(Reserve_Multi_ticket::class,'user_id');
    }
    public function Reserve_Single_ticket(){
        $this->hasMany(Reserve_Single_ticket::class,'user_id');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}

<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        // 'category', 
        //  'nic',	
        // 'student_reg_no',
        'name',
        // 'gender',
        // 'age',	
        // 'date_of_birth',	
        // 'address',	
        // 'contact_no',	
        // 'province',	
        // 'district',
        // 'postal_code',	
        // 'depot',
        // 'institute',	
        // 'route_no',	
        // 'starting_point',	
        // 'interchanging_point',
        // 'destination_point',	
        // 'ticket_fee',
        //'permission_letter',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function season(){
        return $this->hasOne(Season::class);
    }
}

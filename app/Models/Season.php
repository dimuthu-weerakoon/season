<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    use HasFactory;

   
   protected $fillable = [
    'category', 
    'nic',	
    'student_reg_no',
    'name',
    'gender',
    'age',	
    'date_of_birth',	
    'address',	
    'contact_no',	
    'province',	
    'district',
    'postal_code',	
    'depot',
    'institute',	
    'route_no',	
    'starting_point',	
    'interchanging_point',
    'destination_point',	
    'ticket_fee',
    //'price',
    'user_id',
       //'permission_letter',
       
   ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}

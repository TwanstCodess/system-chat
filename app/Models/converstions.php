<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class converstions extends Model
{
    use HasFactory;

    protected $filable=[
        'sender_id',
        'receiver_id',
        'last_time_message'
    ];


public function message(){
    return $this->hasMany(message::class);
}

public function User(){
    return $this->hasMany(User::class);
}

}

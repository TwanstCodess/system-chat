<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    use HasFactory;
    protected $filable=[
        'sender_id',
        'recevired_id',
        'convrestions_id',
        'read',
        'type',
        'body'
    ];


    public function converstion(){
        return $this->belongTo(converstion::class);
    }

    public function User(){
        return $this->belongTo(User::class,'sender_id');
    }


}

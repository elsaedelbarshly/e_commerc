<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Payment;
use App\Comment;

class Product extends Model
{
    public function comments(){
        return $this->hasMany('App\Comment');
    }

    public function payments(){
        return $this->hasMany('App\Payment');
    }
}

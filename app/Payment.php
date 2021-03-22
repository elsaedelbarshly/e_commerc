<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\User;
class Payment extends Model
{
    public function products(){
        return $this->belongsTo('App\Product');
    }

    public function User()
    {
        return $this->belongsTo('App\User');
    }
}

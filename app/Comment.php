<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\User;
class Comment extends Model
{
    public function products(){
        return $this->belongsTO('App\Product');
    }
    public function User()
    {
        return $this->belongsTo('App\User');
    }
}

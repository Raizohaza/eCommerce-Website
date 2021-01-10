<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function Productss()
    {
        return $this->hasMany('App\Model\Product', 'id', 'id');
    }
}

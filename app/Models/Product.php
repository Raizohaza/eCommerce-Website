<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Product extends Model
{
    use HasFactory;
    public function CategoryProduct()
    {
        return $this->belongsTo('App\Models\Category', 'id', 'id');
    }
    public function hinhanhlienquan()
    {
        return $this->hasMany('App\Models\Product_Images', 'id', 'id');
    }
}

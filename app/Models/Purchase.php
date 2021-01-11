<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    //Mới, Chờ xử lý, hủy, đang xử lý, đang giao hàng, hoàn thành
    //New, Wait, Canceled,  Processing, Shipping,     Completed 
    //1     2           3   4           5               6
    protected $guarded = []; 
}

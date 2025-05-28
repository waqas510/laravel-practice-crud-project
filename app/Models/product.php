<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = [
    'pro_name',
    'pro_price',
    'pro_qty',
    'pro_des',
    'pro_img',
    'cat_id ',
];
}

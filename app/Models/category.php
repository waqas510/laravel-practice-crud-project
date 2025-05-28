<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
protected $fillable = [
    'cat_name',
    'cat_des',
    'cat_img',
];
}

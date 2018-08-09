<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //黑名单 规定哪些字段不容许填充
    protected $guarded = [
        'id'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Replies extends Model
{
    //
    protected $fillable = [
        'course_id', 'replies'
    ];
}

<?php

namespace App\Models;

#use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;


class Blog extends Model
{
    //
    protected $connection = 'mongodb';
    protected $collection = 'blogs';
    protected $fillable = [
        'title', 'body'
    ];
}

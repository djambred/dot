<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    //protected $connection = 'db_host';
    protected $fillable = [
        'username', 'password', 'created_at', 'updated_at'
    ];
}

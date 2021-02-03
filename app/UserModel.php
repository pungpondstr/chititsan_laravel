<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $fillable = [
        'email',
        'password',
        'status',
        'address',
        'tel'
    ];
}

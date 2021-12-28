<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $fillable = ['name', 'email', 'password', 'role'];

    protected $hidden = ['created_at', 'updated_at'];
}

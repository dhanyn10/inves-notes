<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table        = 'user';
    protected $primaryKey   = 'id';
    public $incrementing    = true;
    public $timestamps      = false;

    protected $fillable = ['name', 'password'];
    protected $hidden   = ['password'];
}

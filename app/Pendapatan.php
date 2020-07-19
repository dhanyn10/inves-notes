<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendapatan extends Model
{
    protected $table        = 'pendapatan';
    protected $primaryKey   = 'id';
    public $incrementing    = true;
    public $timestamps      = true;

    protected $fillable     = ['nama', 'jenis', 'nominal'];
}

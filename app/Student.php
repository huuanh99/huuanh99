<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table='students';
    protected $fillable=[
        'hoten','toan','ly','hoa'
    ];
    public $timestamps = false;
}

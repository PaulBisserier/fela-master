<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = ['name'];
    public $timestamps = false;
}

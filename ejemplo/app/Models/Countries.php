<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    protected $table = 'countries'; // tell the Model how my table is named
    protected $fillable = ['name', 'continent', 'status'];
    //public $timestamps = false;
    // hacer fillable para el crear
}

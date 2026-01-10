<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catatan extends Model
{
    protected $table = 'catatan'; // karena tidak ikuti konvensi plural
    protected $fillable = ['judul', 'isi'];
}

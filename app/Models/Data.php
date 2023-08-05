<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $table = 'data';
    protected $primaryKey = 'no';
    protected $fillable = ['kolom1', 'kolom2', 'kolom3', 'c1', 'c2', 'c3', 'class'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cluster extends Model
{
    protected $table = 'cluster';
    protected $primaryKey = 'class';
    protected $fillable = ['class', 'center1', 'center2', 'center3', 'jumlahanggota'];
}

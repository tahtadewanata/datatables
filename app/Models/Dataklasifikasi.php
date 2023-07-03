<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dataklasifikasi extends Model
{
    use HasFactory;

    protected $table = 'dataklasifikasi';

    protected $fillable = [
        'namadata',
        'klasifikasi',
        'bidang'
    ];
}

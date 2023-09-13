<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apm extends Model
{
    use HasFactory;
     
    protected $table = 'apm';
    protected $guarded = ['id'];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apk extends Model
{
    use HasFactory;
    
    protected $table = 'apk';
    protected $guarded = ['id'];

}

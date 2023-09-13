<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kejarpaket extends Model
{
    use HasFactory;

    protected $table = 'kejarpaket';
    protected $guarded = ['id'];

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'kecamatan_id');
    }
}

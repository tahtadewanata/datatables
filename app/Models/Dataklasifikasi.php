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
        'id_klasifikasi',
        'id_bidang'
    ];

    public function klasifikasi()
    {
        return $this->belongsTo(Klasifikasi::class, 'id_klasifikasi');
    }

    public function bidang()
    {
        return $this->belongsTo(Bidang::class, 'id_bidang');
    }
}

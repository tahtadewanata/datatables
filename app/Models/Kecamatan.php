<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    protected $table = 'kecamatan';
    protected $guarded = ['id'];

    public function siswa()
    {
        return $this->hasMany(DataSiswa::class, 'kecamatan_id');
    }

    public function countjk($jk)
    {
        return $this->siswa?->where('jk', $jk)->count();
    }
}

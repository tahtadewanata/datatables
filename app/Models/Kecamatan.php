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

    public function Sdswasta()
    {
    return $this->hasMany(Sdswasta::class, 'kecamatan_id'); // Assuming 'kecamatan_id' is the foreign key column.
    }
    
    public function countjk($jk)
    {
        return $this->siswa?->where('jk', $jk)->count();
    }

    public function sumjk()
    {
        return $this->sdswasta?->groupBy('kecamatan.id')->sum($jk);
        // return ($this->sdswasta?->where('jk', 'Laki')->count() +  $this->sdswasta?->where('jk', 'Perempuan')->sum());
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\tb_usiasekolah;

class Opd extends Model
{
    use HasFactory;
    protected $table = 'opd';

    protected $fillable = [
        'nama_opd',
        'logo_opd',
        'desk_opd',
    ];

    public function tb_usiasekolah()
    {
        return $this->hasOne(tb_usiasekolah::class, 'id_uker', 'id');
    }
}

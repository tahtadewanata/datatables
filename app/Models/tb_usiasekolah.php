<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_usiasekolah extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_uker',
        'jk_lk_sds',
        'jk_pr_sds',
        'jk_lk_sdn',
        'jk_pr_sdn',
        'jk_lk_smpn',
        'jk_pr_smpn',
        'jk_lk_smps',
        'jk_pr_smps',
        'tahun',
    ];
    function opd()
    {
        return $this->belongsTo(Opd::class, 'id_uker', 'id');
    }
    public function getPercentageAttribute()
    {
        return ($this->jk_lk_sds / $this->jk_pr_sds) * 100;
    }
}

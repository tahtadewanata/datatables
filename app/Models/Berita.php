<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $table= 'tbberita';

    protected $fillable = [
        'title',
        'seo_title',
        'content',
        'excerpt',
        'body',
        'slug',
    ];
}
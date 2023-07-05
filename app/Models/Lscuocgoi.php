<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lscuocgoi extends Model
{
    use HasFactory;

    protected $table = 'lscuocgois';
    protected $fillable = [
        'ten_nv',
        'ngay',
        'thoigiangoi',
        'id_fb',
        'id_nv',
        'id_kh',
    ];
}

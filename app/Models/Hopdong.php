<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hopdong extends Model
{
    use HasFactory;

    protected $table = 'hopdongs';
    protected $fillable = [
        'ten_hd',
        'noidung',
        'file',
        'ngay',
        'ten_nv',
        'id_nv',
        'id_kh',
    ];
}

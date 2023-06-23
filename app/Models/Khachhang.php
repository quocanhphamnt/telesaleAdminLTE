<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Khachhang extends Model
{
    use HasFactory;

    protected $table = 'khachhangs';
    protected $fillable = [
        'ten_kh',
        'email',
        'sdt',
        'diachi',
        'khuvuc',
        'mota',
        'id_nhom',
        'id_tt',
    ];
}

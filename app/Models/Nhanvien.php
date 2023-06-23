<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nhanvien extends Model
{
    use HasFactory;

    protected $table = 'nhanviens';
    protected $fillable = [
        'email',
        'password',
        'ten_nv',
        'sdt',
        'khuvuc',
        'diachi',
        'id_qh',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ghichu extends Model
{
    use HasFactory;

    protected $table = 'ghichus';
    protected $fillable = [
        'ten_gc',
        'noidung',
        'ten_nv',
        'id_nv',
        'id_kh',
    ];
}

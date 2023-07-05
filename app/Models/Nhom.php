<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nhom extends Model
{
    use HasFactory;

    protected $table = 'nhoms';
    protected $fillable = [
        'ten_nhom',
        'mota',
        'id_nv',
    ];
}
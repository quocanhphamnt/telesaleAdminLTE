<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trangthai extends Model
{
    use HasFactory;

    protected $table = 'trangthais';
    protected $fillable = [
        'ten_tt',
    ];
}

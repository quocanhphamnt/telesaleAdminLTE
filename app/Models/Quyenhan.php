<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quyenhan extends Model
{
    use HasFactory;

    protected $table = 'quyenhans';
    protected $fillable = [
        'ten_qh',
        'level',
    ];
}

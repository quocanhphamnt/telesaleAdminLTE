<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuochen extends Model
{
    use HasFactory;

    protected $table = 'cuochens';
    protected $fillable = [
        'id_kh',
        'ngay',
        'noidung',
    ];
}

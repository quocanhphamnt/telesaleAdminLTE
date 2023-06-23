<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DsNhom extends Model
{
    use HasFactory;

    protected $table = 'ds_nhoms';
    protected $fillable = [
        'id_nv',
        'id_nhom',
    ];
}

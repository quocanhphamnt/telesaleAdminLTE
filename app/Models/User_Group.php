<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Group extends Model
{
    use HasFactory;

    protected $table = 'user__groups';
    protected $fillable = [
        'id_user',
        'id_group',
    ];
}

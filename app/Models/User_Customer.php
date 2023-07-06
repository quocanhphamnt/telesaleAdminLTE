<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Customer extends Model
{
    use HasFactory;

    protected $table = 'user__customers';
    protected $fillable = [
        'id_user',
        'id_customer',
    ];
}

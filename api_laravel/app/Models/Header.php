<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    use HasFactory;

    protected $hidden = [
        'id',
        'curriculo_id',
        'created_at',
        'updated_at',
    ];
}

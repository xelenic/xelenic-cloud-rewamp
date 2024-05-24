<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCreditBalance extends Model
{
    protected $fillable = [
        'user_id',
        'credit'
    ];

    use HasFactory;
}

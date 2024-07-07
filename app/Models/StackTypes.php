<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StackTypes extends Model
{
    protected $casts = [
        'files_structure' => 'json',
        'deploy_script' => 'json',
        'default_database_variables' => 'json'
    ];

    use HasFactory;
}

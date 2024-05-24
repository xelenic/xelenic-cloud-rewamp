<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repos extends Model
{
    protected $fillable = [
        'name',
        'full_name',
        'description',
        'html_url',
        'clone_url',
        'created_at',
        'updated_at',
        'pushed_at',
        'stargazers_count',
        'watchers_count',
        'language',
        'fork',
        'size',
        'has_issues',
        'has_projects',
        'permissions',
        'license',
        'default_branch',
        'owner_details',
        'node_id',
        'repo_id',
        'repo_created_at',
        'repo_updated_at',
        'repo_pushed_at',
        'url',
        'user_id',
        'raw_details'
    ];

    use HasFactory;
}

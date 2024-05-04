<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $casts = [
      'faq' => 'json',
      'payment_rules' => 'json',
      'meta_tags' => 'json',

    ];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function getTagsAttribute($value)
    {
        return explode(',', $value);
    }

    public function setTagsAttribute($value)
    {
        $this->attributes['tags'] = implode(',', $value);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',          // Allow mass assignment for the title
        'brand_id',      // Include other attributes you want to allow mass assignment for
        'category_id',
        'description',
        'image',
        'banner',
        // Add any other fields you want to be mass assignable
    ];
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}

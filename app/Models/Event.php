<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'parent_id');
    }
}

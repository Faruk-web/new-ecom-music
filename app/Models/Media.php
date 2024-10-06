<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    protected $fillable = [
        'album_id',     // Add this to allow mass assignment
        'video_link',
        'video_file',
        'audio_file',
        'audio_link',
        // Add other fields as necessary
    ];
}

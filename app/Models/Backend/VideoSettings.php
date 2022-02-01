<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VideoSettings extends Model
{
    use HasFactory,SoftDeletes;
    
    protected $fillable = [
        'video_title',
        'youtube_link',
        'description',
        'created_by'
    ];

}

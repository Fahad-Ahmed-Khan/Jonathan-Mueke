<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminSliders extends Model
{
    use HasFactory;
    protected $fillable = [
        'slider_title',
        'cover_image',
        'slider_tag',
        'description',
        'created_by'
    ];
}

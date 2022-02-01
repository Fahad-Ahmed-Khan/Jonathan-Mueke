<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;
    protected $fillable = [
        'event_title',
        'cover_image',
        'venue',
        'date_from',
        'date_to',
        'description',
        'created_by'
    ];
}

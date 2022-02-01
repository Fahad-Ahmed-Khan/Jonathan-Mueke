<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Downloads extends Model
{
    use HasFactory;
    protected $fillable = [
        'document_title',
        'document_file',
        'description',
        'created_by'
    ];
}

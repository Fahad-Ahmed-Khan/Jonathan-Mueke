<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestForGreeting extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'shoutout_title',
        'description',
        'created_by'
    ];
}

<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DonorSetting extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
        'description',
		'name',
        'email',
        'phone',
        'amount',
        'created_by'
    ];
}

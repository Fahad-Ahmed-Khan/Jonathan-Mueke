<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VolunteerCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'category_name',
        'created_by'
    ];

    public function volunteers()
    {
        return $this->hasMany(Volunteers::class, 'volunteer_category_id');
    }
}

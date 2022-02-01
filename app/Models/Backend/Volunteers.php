<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteers extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'gender',
        'county_id',
        'constituency_id',
        'volunteer_category_id',
        'created_by'
    ];

    public function county()
    {
        return $this->belongsTo(County::class, 'county_id');
    }
    public function constituency()
    {
        return $this->belongsTo(Constituency::class, 'constituency_id');
    }
    public function volunteercategory()
    {
        return $this->belongsTo(VolunteerCategory::class, 'volunteer_category_id');
    }

}

<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Constituency extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
        'name',
        'county_id',
        'created_by'
    ];
    
    public function county()
    {
        return $this->belongsTo(County::class, 'county_id');
    }
    public function volunteers()
    {
        return $this->hasMany(Volunteers::class, 'constituency_id');
    }
}

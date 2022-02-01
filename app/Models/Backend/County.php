<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class County extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name','code'];

    public function constituencies()
    {
        return $this->hasMany(Constituency::class);
    }
    public function volunteers()
    {
        return $this->hasMany(Volunteers::class, 'county_id');
    }

}


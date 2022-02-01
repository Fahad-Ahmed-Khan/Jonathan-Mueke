<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AboutUs extends Model
{
    use HasFactory;
    use SoftDeletes;
	protected $table = 'about_us';
    protected $fillable = ['title','image','description','button','created_by'];
}

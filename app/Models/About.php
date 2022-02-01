<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
	protected $table = 'about_us';
	protected $fillable = ['header','title','description','image'];
    use HasFactory;
}

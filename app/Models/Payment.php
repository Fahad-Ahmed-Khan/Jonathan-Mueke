<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
	protected $table = 'payment';
	protected $fillable = ['amount','phone'];
    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
	protected $table = 'payments';
	protected $fillable = ['amount','phone','mpesa_trans_id','user_id'];
    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vouchers extends Model
{
    use HasFactory;
    public function voucher() 
	{
	     return $this->belongsTo('App\Voucher','id_voucher', 'id');
	}
}

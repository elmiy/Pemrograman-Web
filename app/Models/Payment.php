<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table = 'payments';
    protected $fillable = [
        'bukti_pembayaran'
    ];
	public function transaction() 
	{
	     return $this->belongsTo('App\Transaction','id_transaction', 'id');
	}
    public function voucher() 
	{
	     return $this->belongsTo('App\Voucher','id_voucher', 'id');
	}
}

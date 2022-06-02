<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $table = 'transactions';
    protected $fillable = [
        'id_space',
        'nama',
        'email',
        'no_telp',
        'tipe_durasi',
        'durasi',
        'tanggal',
        'jumlah_orang',
        'jenis_kegiatan',
    ];

    public function space(){
        return $this->belongsTo('App\Space','id_space','id');
    }
    public function payment(){
        return $this->belongsTo('App\Payment','id_transaction','id');
    }
}

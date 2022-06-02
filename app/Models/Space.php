<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Space extends Model
{
    use HasFactory;

    protected $table = 'spaces';
    protected $fillable = [
         'nama_spaces',
         'harga_jam',
         'harga_hari',
         'harga_minggu',
    ];
    
    public function space(){
        return $this->hasMany('App\Transaction', 'id_space', 'id');
    }
    // protected $table = 'spaces';
    // protected $fillable = [
    //     'nama_spaces',
    //     'harga_jam',
    //     'harga_hari',
    //     'harga_minggu',
    // ];
}

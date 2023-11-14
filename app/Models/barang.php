<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    //protected $primarykey = 'kode_barang';

    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'merek',
        'jumlah',
        'kondisi',
        'asal_barang',
        'ketersediaan'
    ];

    public function Ruangan()
    {
        return $this->hasMany(Ruangan::class);
    }
}
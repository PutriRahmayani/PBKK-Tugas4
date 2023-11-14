<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    //protected $primarykey = 'kode_kategori';

    protected $fillable = [
        'kode_kategori',
        'nama_kategori',
        'deskripsi'
    ];

    public function Barang()
    {
        return $this->hasMany(Barang::class);
    }
}


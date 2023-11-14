<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index(){
        $barangs = Barang::all(); 
        return view('template/barang', compact('barangs'));
    }

    public function edit(){
        return view('template/edit_barang',);
    }

    public function create(){
        return view('template/tambah_barang', );
    }
}

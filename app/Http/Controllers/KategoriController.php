<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(){
        $kategoris = Kategori::all(); 
        return view('template/kategori', compact('kategoris'));
    }
}

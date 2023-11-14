<?php

namespace App\Http\Controllers;


use App\Models\Ruangan;
use Illuminate\Http\Request;

class RuanganController extends Controller
{
    public function index(){
        $ruangans = Ruangan::all();
        return view('template.ruangan', compact('ruangans'));
    }    

}

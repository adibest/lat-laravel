<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index($angka)
    {
    	return $angka * $angka;
    }

    public function formulir()
    {
    	return view('pendaftaran.formulir.index');
    }

    public function proses(Request $request)
    {
    	$nama = $request->nama;
    	$hp = $request->hp;

    	return view('pendaftaran.formulir.index', compact('nama','hp') );
    }
}

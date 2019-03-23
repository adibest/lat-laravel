<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LuasKamarController extends Controller
{
    public function LuasKamar(Request $request)
    {
    	$fulan = $request->fulan;

    	return view('kamar.index', compact('fulan'));
    }

    public function hasil(Request $request)
    {
    	$panjang = $request->panjang;
    	$lebar = $request->lebar;
    	$luas = $panjang*$lebar;

    	return view('kamar.hasil', compact('panjang', 'lebar', 'luas'));
    }
}

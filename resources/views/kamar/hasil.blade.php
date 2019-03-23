@extends('layout.kamar')

@section('title', 'kamar')

@section('content')

<a href="{{ url('/kamar/fulan') }}">Kembali ke form</a>

Luas Kamar Adalah:
{{ $luas }}

<div id="kmr" style="border: 2px solid; height:{{ $lebar }}px; width:$panjang)px;">{{ $luas }}</div>

@endsection
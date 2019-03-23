@extends('layout.kamar')

@section('title', 'kamar')

@section('content')

<div class="mx-auto text-center">
<a href="{{ url('/kamar/fulan') }}" class="btn btn-primary" role="button">Kembali ke form</a>
<p>Luas Kamar Adalah:</p>
<h3>{{ $luas }}cm<sup>2</sup></h3>
</div>
<br>
<div id="kmr" class="mx-auto row" style="width: {{ $panjang }}px; height: {{ $lebar }}px;">
	<div class="col my-auto">{{ $lebar }}cm</div>
	<div class="col my-auto text-center">{{ $luas }}cm<sup>2</sup></div>
	<div class="col text-right">{{ $panjang }}cm</div>
</div>
<br>

@endsection
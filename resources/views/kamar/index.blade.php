@extends('layout.kamar')

@section('title', 'kamar')

@section('content')

<h3>Aplikasi penghitung luas kamar mas {{ $fulan }}</h3>

	<form method="get" action="{{ url('/hasil') }}">
		@csrf

		<label>Panjang Kamar(cm)</label><br>
		<input type="number" name="panjang">

		<br>

		<label>Lebar Kamar(cm)</label><br>
		<input type="number" name="lebar">

		<br>

		<button type="submit">Kirim</button>
	</form>

@endsection
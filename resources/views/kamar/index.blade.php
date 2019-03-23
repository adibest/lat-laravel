@extends('layout.kamar')

@section('title', 'kamar')

@section('content')

<h3 class="mx-auto text-center">Aplikasi penghitung luas kamar {{ $fulan }}</h3>

<br>

	<form method="post" action="{{ url('/hasil') }}" class="mx-auto text-center">
		@csrf

		<label>Panjang Kamar(cm)</label><br>
		<input type="number" name="panjang">

		<br><br>

		<label>Lebar Kamar(cm)</label><br>
		<input type="number" name="lebar">

		<br><br>

		<button type="submit" class="btn btn-dark">Kirim</button>
	</form>
<br>
@endsection
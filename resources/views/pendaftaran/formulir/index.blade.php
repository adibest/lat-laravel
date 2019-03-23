<!DOCTYPE html>
<html>
<head>
	<title>Adib</title>
</head>
<body>
	<form method="post" action="{{ url('/proses') }}">

		@csrf

		<label>Nama:</label>
		<input type="text" name="nama">
		
		<br>

		<label>No Hp:</label>
		<input type="number" name="hp">

		<br>

		<button type="submit">Kirim</button>
	</form>

	@if(isset($nama) || isset($hp) )

		{{ $nama }}
		<br>
		{{ $hp }}
		
	@endif
</body>
</html>
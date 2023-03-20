<!DOCTYPE html>
<html>
<head>
	<title>Program PHP Sederhana</title>
</head>
<body>
	<h1>Form Input</h1>
	<form method="POST">
		<label>Nama:</label>
		<input type="text" name="nama"><br><br>
		<label>Tanggal Lahir:</label>
		<input type="date" name="tgl_lahir"><br><br>
		<label>Pekerjaan:</label>
		<select name="pekerjaan">
			<option value="Pro Player">Pro Player</option>
			<option value="Marketing">Marketing</option>
			<option value="Direktur Utama">Direktur Utama</option>
				</select><br><br>
		<input type="submit" name="submit" value="Submit">
	</form>

	<?php
		if(isset($_POST['submit'])){
			$nama = $_POST['nama'];
			$tgl_lahir = $_POST['tgl_lahir'];
			$pekerjaan = $_POST['pekerjaan'];

			// Menghitung umur berdasarkan tanggal lahir
			$umur = date_diff(date_create($tgl_lahir), date_create('now'))->y;

			// Menampilkan output
			echo "<h2>Output</h2>";
			echo "Nama: ".$nama."<br>";
			echo "Umur: ".$umur." tahun<br>";
			echo "Pekerjaan: ".$pekerjaan."<br>";
			if($pekerjaan == "Pro Player"){
				echo "Gaji: Rp25.000.000 per bulan";
			} elseif($pekerjaan == "Marketing"){
				echo "Gaji: Rp12.500.000 per bulan";
			} elseif($pekerjaan == "Direktur Utama"){
				echo "Gaji: Rp50.000.000 per bulan";
			}
		}
	?>
</body>
</html>

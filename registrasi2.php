<DOCTYPE html>
<html>
<head> 
<title> REGISTRASI </title>
</head>
<body>
<?php
		$kabupaten = [
							[
								"id"=>1,
								"nama_kab"=>"Pontianak"
							],
							[
								"id"=>2,
								"nama_kab"=>"KubuRaya"
							],
							[
								"id"=>3,
								"nama_kab"=>"Mempawah"
							],
							[
								"id"=>4,
								"nama_kab"=>"Singkawang"
							],
						];

		?>
	<h1>Registrasi</h1>
	<form method="POST" action="proses.php">
	<table>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td><input type="text" name="username"></input></td>
		</tr>

		<tr>
			<td>password</td>
			<td >:</td>
			<td><input type="password" name="password"></input></td>
		</tr>

		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"></input></td>
		</tr>

		<tr>
			<td>No Hp</td><option value="nama_kab">Kota Pontianak</option>
			</select></td>
		</tr>
			<td>:</td>
			<td><input  type="text" name="no_hp"></input></td>
		</tr>

		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><textarea placeholder="Masukan alamat anda" name="alamat"></textarea></input></td>
		</tr>

		<tr>
			<td>Kabupaten</td>
			<td>:</td>
			<td><select name="kabupaten">
				<option value="nama_kab">Kota Pontianak</option>
			</select></td>
		</tr>

		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><input type="radio" name="jk" value="laki-laki">laki-laki
				<input type="radio" name="jk" value="perempuan">Perempuan
			</td>
		</tr>
		<tr>
			<td>Prodi Pilihan</td>
			<td>:</td>
			<td><input type="checkbox"  name="pil_sisfo"></input>Sistem Informasi<br>
				<input type="checkbox"  name="pil_siskom"></input>Sistem Komputer<br>
				<input type="checkbox"  name="pil_info"></input>Informatika
			</td>
		</tr>

		<tr>
			<td></td>
			<td></td>
			<td><input name="simpan" type="submit" value="simpan"> </input>
				<input name="reset" type="reset" value="reset"> </input> 
			</td>
		</tr>
</table>
</body>
</html>
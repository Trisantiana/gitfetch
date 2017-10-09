<html>
	<head>
		<title> Contoh Form</title>
	</head>
	<body>
	<center>
		<h1> Fungsi Aritmatika </h1>
		<table border="1" style="border-collapse: collapse;">
			<form action="tampil.php" method="get">
			<tr bgcolor="#cccccc">
				<td> Bilangan 1</td>
				<td> : </td>
				<td> <input type="double" name="txtBil1" width='50'></td>
			</tr>
			<tr>
				<td> Bilangan 2 </td>
				<td> : </td>
				<td> <input type="double" name="txtBil2"></td>
			</tr>
			<tr bgcolor="#cccccc">
				<td> Operasi </td>
				<td> : </td>
				<td>
					<select name="operasi">
						<option value="0"> -Pilih- </option>
						<option value="kali"> Perkalian </option>
						<option value="bagi"> Pembagian </option>
						<option value="tambah"> Penjumlahan</option>
						<option value="kurang"> Pengurangan</option>
					</select>
			<tr>
				<td> </td>
				<td> </td>
				<td> <input type="submit" value="Hitung"></td>
			</tr>
			</form>
		</table>
</center>
	</body>
</html>
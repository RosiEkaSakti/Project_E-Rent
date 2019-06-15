<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>
<body>
	<center>
		<h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1>
		<h3>Tambah data baru</h3>
	</center>
	<form action="<?php echo base_url(). 'crud/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Delete"></td>
			</tr>
		</table>
	</form>	
</body>
</html>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $judul;?></title>
</head>
<body>

<!--$data_provinsi_single['id'] : perlu diletakan di url agar bisa diterima/tangkap pada controller (sbg penanda id yang akan diupdate) -->
<form method="post" action="<?php echo site_url('provinsi/update_submit/'.$data_provinsi_single['id']);?>">
	<table>
		<tr>
			<td>Nama</td>
			<!--$data_provinsi_single['nama'] : menampilkan data provinsi yang dipilih dari database -->
			<td><input type="text" name="nama" value="<?php echo $data_provinsi_single['nama'];?>" required="" class="form-control"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="submit" value="Simpan"></td>
		</tr>
	</table>
</form>

</body>
</html>
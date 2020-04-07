<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $judul?></title>
</head>
<body>

<h1><?php echo $judul?></h1>


<form method="post" action="<?php echo site_url('kota/insert_submit/');?>">
	<table>
		<tr>
			<td>Provinsi</td>
			<!--$data_kota_single['nama'] : menampilkan data kota yang dipilih dari database -->
			<td>
				<select name="id_provinsi">
				<?php foreach($data_provinsi as $provinsi):?>
				<option value="<?php echo $provinsi['id'];?>">
					<?php echo $provinsi['id'];?> 
					<?php echo $provinsi['nama'];?>
				</option>
				<?php endforeach;?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" value="" required=""></td>
		</tr>
		<tr>
			<td>Penduduk</td>
			<td><input type="text" name="penduduk" value="" required=""></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="submit" value="Simpan"></td>
		</tr>
	</table>
</form>

</body>
</html>
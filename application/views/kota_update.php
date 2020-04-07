<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $judul?></title>
</head>
<body>

<h1><?php echo $judul?></h1>

<!--$data_kota_single['id'] : perlu diletakan di url agar bisa diterima/tangkap pada controller (sbg penanda id yang akan diupdate) -->
<form method="post" action="<?php echo site_url('kota/update_submit/'.$data_kota_single['id']);?>">
	<table>
		<tr>
			<td>Provinsi</td>
			<!--$data_kota_single['nama'] : menampilkan data kota yang dipilih dari database -->
			<td>
				<select name="id_provinsi">
				<?php foreach($data_provinsi as $provinsi):?>
					<?php if($provinsi['id'] == $data_kota_single['id_provinsi']):?>
					<option value="<?php echo $provinsi['id'];?>" selected><?php echo $provinsi['nama'];?></option>
					<?php else:?>
					<option value="<?php echo $provinsi['id'];?>"><?php echo $provinsi['nama'];?></option>
					<?php endif;?>
				<?php endforeach;?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Nama Kota</td>
			<!--$data_kota_single['nama'] : menampilkan data kota yang dipilih dari database -->
			<td><input type="text" name="nama" value="<?php echo $data_kota_single['nama'];?>" required=""></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="submit" value="Simpan"></td>
		</tr>
	</table>
</form>

</body>
</html>
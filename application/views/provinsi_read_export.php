<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $judul;?></title>
</head>
<body>

<!--link tambah data-->
<a href="<?php echo site_url('provinsi/insert');?>">Tambah</a>
<br /><br />

<table border="1">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<!--looping data provinsi-->
		<?php foreach($data_provinsi as $provinsi):?>

		<!--cetak data per baris-->
		<tr>
			<td><?php echo $provinsi['id'];?></td>
			<td><?php echo $provinsi['nama'];?></td>
			<td>
				<!--link ubah data (menyertakan id per baris untuk dikirim ke controller)-->
				<a href="<?php echo site_url('provinsi/update/'.$provinsi['id']);?>">
				Ubah
				</a>

				<!--link hapus data (menyertakan id per baris untuk dikirim ke controller)-->
				<a href="<?php echo site_url('provinsi/delete/'.$provinsi['id']);?>" onClick="return confirm('Apakah anda yakin?')">
				Hapus
				</a>
				
			</td>
		</tr>
		<?php endforeach?>		
	</tbody>
</table>

<br /><br />
<a href="<?php echo site_url('provinsi/data_export');?>">Export Excel</a>

</body>
</html>
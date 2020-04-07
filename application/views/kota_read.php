<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $judul?></title>
</head>
<body>

<h1><?php echo $judul?></h1>

<a href="<?php echo site_url('kota/insert');?>">Tambah</a>
<br /><br />

<table border="1">
	<thead>
		<tr>
			<th>ID</th>
			<th>Provinsi</th>
			<th>Nama</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($data_kota as $kota):?>
		<tr>
			<td><?php echo $kota['id'];?></td>
			<td><?php echo $kota['nama_provinsi'];?></td>
			<td><?php echo $kota['nama'];?></td>
			<td>
				<a href="<?php echo site_url('kota/update/'.$kota['id']);?>">
				Ubah
				</a>
				|
				<a href="<?php echo site_url('kota/delete/'.$kota['id']);?>">
				Hapus
				</a>
			</td>
		</tr>
		<?php endforeach?>		
	</tbody>
</table>

</body>
</html>
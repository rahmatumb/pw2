<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $judul?></title>
</head>
<body>

<h1><?php echo $judul?></h1>

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
		<?php foreach($data_provinsi as $provinsi):?>
		<tr>
			<td><?php echo $provinsi['id'];?></td>
			<td><?php echo $provinsi['nama'];?></td>
			<td>
				<a href="<?php echo site_url('provinsi/update/'.$provinsi['id']);?>">
				Ubah
				</a>
				|
				<a href="<?php echo site_url('provinsi/delete/'.$provinsi['id']);?>">
				Hapus
				</a>
			</td>
		</tr>
		<?php endforeach?>		
	</tbody>
</table>

</body>
</html>
<?php
	header( "Content-Type: application/vnd.ms-excel" );
	header( "Content-disposition: attachment; filename=export_data_provinsi.xls" );
?>

<table border="1">
	<thead>
		<tr>
			<th>ID</th>
			<th>Provinsi</th>
			<th>Nama</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($data_kota as $kota):?>
		<tr>
			<td><?php echo $kota['id'];?></td>
			<td><?php echo $kota['nama_provinsi'];?></td>
			<td><?php echo $kota['nama'];?></td>
		</tr>
		<?php endforeach?>		
	</tbody>
</table>
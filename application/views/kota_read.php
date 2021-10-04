<a href="<?php echo site_url('kota/insert');?>">Tambah</a>
<br /><br />

<table border="1">
	<thead class="thead-dark">
		<tr>
			<th>ID</th>
			<th>Provinsi</th>
			<th>Nama</th>
			<th>Penduduk</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($data_kota as $kota):?>
		<tr>
			<td><?php echo $kota['id'];?></td>
			<td><?php echo $kota['nama_provinsi'];?></td>
			<td><?php echo $kota['nama'];?></td>
			<td><?php echo number_format($kota['penduduk']);?></td>
			<td>
				<a href="<?php echo site_url('kota/update/'.$kota['id']);?>">
				Ubah
				</a>
				
				<a href="<?php echo site_url('kota/delete/'.$kota['id']);?>" onClick="return confirm('Apakah anda yakin?')">
				Hapus
				</a>
			</td>
		</tr>
		<?php endforeach?>		
	</tbody>
</table>

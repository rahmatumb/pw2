<a href="<?php echo site_url('kota/insert');?>" class="btn btn-primary">Tambah</a>
<br /><br />

<table class="table table-striped" id="datatables">
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
				<a href="<?php echo site_url('kota/update/'.$kota['id']);?>" class="btn btn-warning">
				Ubah
				</a>
				
				<a href="<?php echo site_url('kota/delete/'.$kota['id']);?>" class="btn btn-danger">
				Hapus
				</a>
			</td>
		</tr>
		<?php endforeach?>		
	</tbody>
</table>

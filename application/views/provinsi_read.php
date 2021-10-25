<!--link tambah data-->
<a href="<?php echo site_url('provinsi/insert');?>">Tambah</a>
<br /><br />

<table class="table table-striped">
	<thead class="thead-dark">
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
				<a href="<?php echo site_url('provinsi/update/'.$provinsi['id']);?>" class="btn btn-primary">
				Ubah
				</a>

				<!--link hapus data (menyertakan id per baris untuk dikirim ke controller)-->
				<a href="<?php echo site_url('provinsi/delete/'.$provinsi['id']);?>" onClick="return confirm('Apakah anda yakin?')" class="btn btn-danger">
				Hapus
				</a>
				
			</td>
		</tr>
		<?php endforeach?>		
	</tbody>
</table>

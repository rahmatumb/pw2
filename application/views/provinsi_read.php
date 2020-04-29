<!--link tambah data-->
<a href="<?php echo site_url('provinsi/insert');?>" class="btn btn-primary">Tambah</a>
<br /><br />

<table class="table table-striped">
	<thead class="thead-dark">
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>Gambar</th>
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
				<?php if(!empty($provinsi['gambar'])):?>
				<img src="<?php echo base_url('upload_folder/'.$provinsi['gambar']);?>" style="width:50px;">
				<?php endif;?>
			</td>
			<td>
				<!--link ubah data (menyertakan id per baris untuk dikirim ke controller)-->
				<a href="<?php echo site_url('provinsi/update/'.$provinsi['id']);?>" class="btn btn-warning">
				Ubah
				</a>

				<!--link hapus data (menyertakan id per baris untuk dikirim ke controller)-->
				<a href="<?php echo site_url('provinsi/delete/'.$provinsi['id']);?>" class="btn btn-danger" onClick="return confirm('Apakah anda yakin?')">
				Hapus
				</a>
				
			</td>
		</tr>
		<?php endforeach?>		
	</tbody>
</table>
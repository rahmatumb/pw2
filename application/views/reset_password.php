<form method="post" action="<?php echo site_url('provinsi/insert_submit/');?>">
	<table class="table table-striped">
		<tr>
			<td>Password Lama</td>
			<td><input type="text" name="password_lama" value="" required="" class="form-control"></td>
		</tr>
		<tr>
			<td>Password Baru</td>
			<td><input type="text" name="password_baru" value="" required="" class="form-control"></td>
		</tr>
		<tr>
			<td>Ulangi Password Baru</td>
			<td><input type="text" name="password_baru_ulangi" value="" required="" class="form-control"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="submit" value="Simpan" class="btn btn-primary"></td>
		</tr>
	</table>
</form>


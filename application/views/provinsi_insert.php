<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $judul?></title>
</head>
<body>

<h1><?php echo $judul?></h1>


<form method="post" action="<?php echo site_url('provinsi/insert_submit/');?>">
	<table>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" value="" required=""></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="submit" value="Simpan"></td>
		</tr>
	</table>
</form>

</body>
</html>
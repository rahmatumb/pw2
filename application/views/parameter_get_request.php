<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $judul;?></title>
</head>
<body>

<h3><?php echo $judul;?></h3>

<table border="1">
	<?php foreach($link as $arti => $warna):?>
	<tr>
		<td>
			<a href="<?php echo site_url('parameter/get_response/'.$arti.'/'.$warna);?>">
				<input type="button" style="background-color:<?php echo $warna;?>">
			</a>
		</td>
	</tr>
	<?php endforeach;?>
</table>

</body>
</html>
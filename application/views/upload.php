<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $judul?></title>
</head>
<body>

<h1><?php echo $judul?></h1>

<!--form perlu di tambahkan enctype="multipart/form-data" agar bisa melakukan upload file-->
<form method="post" action="<?php echo site_url('upload/submit/');?>" enctype="multipart/form-data">
	<table>
		<tr>
			<td>File</td>
			<td>
				<!--input untuk memilih file yang akan diupload-->
				<input type="file" name="userfile" size="20" />
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="submit" value="Upload"></td>
		</tr>
	</table>
</form>

<!--response setelah upload-->
<?php if(!empty($response)):?>
	<?php echo $response;?>
<?php endif;?>

</body>
</html>
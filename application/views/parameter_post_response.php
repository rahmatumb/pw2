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

<ul>
	<li>Nama : <?php echo $post['nama'];?></li>
	<li>Umur : <?php echo $post['umur'];?></li>
	<li>Umur : <?php echo $post['rentang'];?></li>
</ul>

</body>
</html>
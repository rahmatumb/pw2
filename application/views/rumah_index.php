<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>
<body>

<h1><?=$judul?></h1>

<h2><?=$kategori['nama']?></h2>

<?php foreach($kategori as $index=>$value):?>
	<p><?=$index?> : <?=$value?></p>
<?php endforeach?>

</body>
</html>
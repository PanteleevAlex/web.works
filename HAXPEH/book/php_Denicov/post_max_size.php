<!--Урок Борисова получение данных из фала php "post_max_size" -->
<!DOCTYPE html>

<title>Переменные и вывод</title>
<meta charset=utf-8">
<link href="style.css" rel="stylesheet" type="text/css">

<div class="body">
	<h1>Переменные и вывод</h1>

	<div class="php">

<?php
$size = ini_get('post_max_size');
$letter = $size{strlen($size)-1};
$size = (integer)$size;

switch($letter):
	case 'T': $size *= 1024;
	case 'G': $size *= 1024;
	case 'M': $size *= 1024;
	case 'K': $size *= 1024;
endswitch;
echo 'POST_MAX_SIZE = ' .$size.' bytes';
?>
	</div><!--end div body-->
</div><!--end div php-->


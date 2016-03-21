<!DOCTYPE html>

<title>Переменные и вывод</title>
<meta charset=utf-8">
<link href="style.css" rel="stylesheet" type="text/css">

<div class="body">
	<h1>Переменные и вывод</h1>

	<div class="php">

<?php
include "kw.php";
	echo '<br>' . 'результат вывода include: ';
include "kw1.php";
	echo '<hr>';
	echo kw\cube(1000);
?>
	</div><!--end div body-->
</div><!--end div php-->


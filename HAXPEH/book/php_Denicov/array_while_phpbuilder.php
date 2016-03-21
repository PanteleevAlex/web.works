<!DOCTYPE html>

	<head>
		<title>Переменные и вывод</title>
		<meta charset=utf-8">
		<link href="style.css" rel="stylesheet" type="text/css">
	</head>
<body>
	<div class="body">
	<h1>Переменные и вывод</h1>

<div class="php">

<?php
$city = array ("Токио", "Пекин", "Москва", "English");
$index = 0;
$elements = count ($city);
while($index < $elements){
	echo $index+1 . '.' . $city[$index] . '<br>';
$index++;
} //end while
?>
	</div><!--end div body-->
</div><!--end div php-->

</body>
</html>

<?php
namespace arr;
?>
<!--/*http://goo.gl/uu6Gg -  многомерный масив (вывод таблицей)*/-->
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
$polzovateli = array(
0 => array(
	'login'     => 'Admin',
	'paswd'     => '111',
	'email'     => 'aaa@aaa.ru',
	'professin' => 'php programmer'
   ), //end 0 array

1 => array(
	'login'     => 'Alex',
	'paswd'     => '222',
	'email'     => 'bbb@bbb.ru',
	'professin' => 'engineer'
   ), //end 1 array

2 => array(
	'login'     => 'James',
	'paswd'     => '333',
	'email'     => 'ccc@ccc.ru',
	'professin' => 'dancer'
   ), //end 0 array

); //end $polzovateli

	echo '<table border=2>';
	echo '<tr><td>Логин</td><td>Пароль</td><td>E-mail</td><td>Профессия</td></tr>';
for($index = 0; $index < count ($polzovateli); $index++){
	echo '<tr>';
foreach($polzovateli[$index] as $value){
	echo '<td>' . $value . '</td>';
} //end foreach
	echo '</tr>';
} //end for $index
	echo '</table>';
?>
	</div><!--end div body-->
</div><!--end div php-->

</body>
</html>

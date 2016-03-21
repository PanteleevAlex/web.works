<!-- 
	/* Готовая форма. Полезный пример с встроенными функциями. Урок 2010-11-30
<?php
	//header("Refresh:10");
?>
	*/
	//<h1><?=date("H:i:s")?></h1>
-->

<!DOCTYPE html>

<title>Переменные и вывод</title>
<meta charset=utf-8">
<link href="style.css" rel="stylesheet" type="text/css">

<div class="body">

	<h1>Переменные и вывод</h1>
<?php
   echo '<center>';
	echo '<h3>';
		echo __FILE__;
	echo '</h3>';
   echo '</center>';
?>

<hr width='50%'>
	<div class="php">

<?php
	header ("Cache-Control: no-cache");
?>
<h1><?=date("H:i:s")?></h1>

<?php

if($_SERVER['REQUEST_METHOD']=="POST")
{
	$name = trim(strip_tags($_POST['name']));
	$age = abs((int) $_POST['age']);
}

?>

 <form action="<?=$_SERVER['PHP_SELF']?>"method='post'>
	<input type='text' name='name' value='<?=$name?>'><br>
	<input type='text' name='age' value='<?=$age?>'><br>
	<input type='submit'>
 </form>

<hr>

<?php

if($name and $age)
{
	echo '<p>Ваше имя:' . $name;
	echo '<p>Ваш возраст:' . $age;
}

mysql_connect("localhost","Xubuntu","12345") or die("Ошибка");
mysql_select_db("db_shop") or die(mysql_error());
$sql = "SELECT * FROM shop" or die(mysql_error());
$result = mysql_query("$sql") or die(mysql_error());

$row = mysql_fetch_array($reslt);
	echo "<pre>";print_r($row);echo "</pre>";

mysql_close();
?>
	</div>  <!--end div body-->
</div>  <!--end div php-->


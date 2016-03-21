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

<?php
if($name and $age){
	echo '<p>Ваше имя:' . $name;
	echo '<p>Ваш возраст:' . $age;
}
?>
	</div>  <!--end div body-->
</div>  <!--end div php-->


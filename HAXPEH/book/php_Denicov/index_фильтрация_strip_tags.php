<!-- 
	/*
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


	 <form action="<?=$_SERVER['PHP_SELF']?>"method='post'>
		<input type='text' name='name'><br>
		<input type='text' name='age'><br>
		<input type='submit'>
	 </form>
<?php
$name = strip_tags($_POST['name']);
$age = $_POST['age'];
	echo '<p>Ваше имя:' . $name;
	echo '<p>Ваш возраст:' . $age;
?>
	</div>  <!--end div body-->
</div>  <!--end div php-->


<?php
namespace clook1;
?>
<!--"Живые часики". Издевательство над браузером. Перезагрузка каждую секунду - https://goo.gl/f5oatc (такие вещи делают JavaScrip_om)
 -->
<!DOCTYPE html>

		<title>Переменные и вывод</title>
		<meta charset=utf-8">
		<link href="style.css" rel="stylesheet" type="text/css">
<div class="body">
	<h1>Переменные и вывод</h1>

	<div class="php">

<?php
//header("Refresh:10");
?>
<h1><?=date("H:i:s")?></h1>
	</div><!--end div body-->
</div><!--end div php-->


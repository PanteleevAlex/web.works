<?php
	$id = $_GET['id'];
	$type = $_GET['type'];
?>
<!DOCTYPE html>

<head>
	<title>Главная</title>
	<meta charset=utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
   <div id="holder">
	  <div id="header">

	<h1>Сайт любителей афоризмов</h1>

	  </div> <!--end div header-->

	  <div id="menu">
		<a href="include/authors.php">Авторы</a>
		<a href="include/books.php">Книги</a>
		<a href="include/cycle.php">Циклы</a> 
	</div> <!--end div menu-->

  <div id="undermenu"></div>

  <div id="content">
    <!-- Document starts. -->
    <h1>Самое лучшее, интересное из книг которые я прочел!</h1>

        <p class="text">На этом сайте я собираюсь выкладывать цитаты книги которые я прочел.</p>

<table class='tab_author'>
<?php
	include "include/author_db.php";	

	$result = mysql_query ("SELECT * FROM $type WHERE id=$id")or die(mysql_error());
  	$myrow = mysql_fetch_array($result);
mysql_close();
?>

<tr>
	<th>Автор</th>
	<td><?php echo $myrow['books_title']?></td>
</tr>


<tr>
	<th>Книги</th>
	<td><?php echo $myrow['books_cycle']?></td>
</tr>

<tr>
	<th>Циклы</th>
	<td><?php echo $myrow['books_img']?></td>
</tr>



</table>
    <!-- Document ends. -->
		  </div> <!--end div content-->
	</div> <!--end div holder-->
   </body>
</html>

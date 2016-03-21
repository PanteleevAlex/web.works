<!DOCTYPE html>
<head>
	<title>Книги</title>
	<meta charset=utf-8">
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
   <div id="holder">
	  <div id="header">

	<h1>Сайт любителей афоризмов</h1>

	  </div> <!--end div header-->

	  <div id="menu">
		<a href="../index.php">Главная</a>
		<a href="authors.php">Авторы</a>
		<a href="books.php">Книги</a>
		<a href="cycle.php">Циклы</a> 
	</div> <!--end div menu-->

  <div id="undermenu"></div>

  <div id="content">
    <!-- Document starts. -->
    <h1>Самое лучшее, интересное из книг которые я прочел!</h1>
    <h3>Книги:</h3>
	
	<?php include "author_db.php";?>

<?php
	$result = mysql_query("SELECT * FROM books LIMIT 6")or die(mysql_error()); 
   while($myrow = mysql_fetch_array($result))
   {
echo<<<HERE
<table class='tab_author'>
   <tr>
	<td class='td_author_tite'><a href='#'>$myrow[books_title]</a></td>
   </tr>
<tr>
	<td class='padding'></td>
</tr>


</table>
HERE;
}
?>

    <h3>ЦИКЛЫ</h3>
    <p class="text"> </p>
    <!-- Document ends. -->
  </div> <!--end div content-->

</div>
</body>
</html>

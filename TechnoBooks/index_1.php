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

   <h3>Авторы</h3>
	<?php include "include/author_db.php";?>
<?php
	$result = mysql_query("SELECT * FROM authors");
	$myrow = mysql_fetch_array($result);
   echo "<p>";
   echo $myrow['surname'];
   echo "</p>";
mysql_close();
?>
   <h3>ЦИКЛЫ</h3>

	<?php include "include/author_db.php";?>
<?php
	$result = mysql_query ("SELECT * FROM books")or die(mysql_error());
        $myrow = mysql_fetch_array($result);
	echo '<h3>';
	echo $myrow['books_cycle'];
	echo '</h3>';
mysql_close();
?>
    <h3>КНИГИ</h3>


	<?php include "include/author_db.php";?>
<?php
	$result = mysql_query ("SELECT * FROM books LIMIT 2")or die(mysql_error());
 while ($myrow = mysql_fetch_array($result))
 {
mysql_close();
echo <<<HERE
<table class='tab_author'>
<tr>
    <td class='padding'></td>
</tr>
         <tr>
            <td class='td_author_text'>$myrow[books_title]</td>
         </tr>
<td class='td_img'><img class='img' src='img/Shards_of_Honor.jpg'></td>
</table>
HERE;
}
?>

    <!-- Document ends. -->
		  </div> <!--end div content-->
	</div> <!--end div holder-->
   </body>
</html>

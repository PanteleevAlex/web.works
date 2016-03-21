<?php
        $db = mysql_connect('localhost','Xubuntu','12345');:
	 mysql_select_db('author_db',$db);
	 mysql_query ("set_client='utf8'");
	 mysql_query ("set character_set_results='utf8'");
	 mysql_query ("collation_connection='utf8_general_ci'");
	 mysql_query ("SET NAMES utf8");
 ?>

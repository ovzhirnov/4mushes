<?php
$conn = Mysql_connect("localhost", "mushes_oleg", "J1Obza28qs")
or die("РќРµРІРѕР·РјРѕР¶РЅРѕ СѓСЃС‚Р°РЅРѕРІРёС‚СЊ СЃРѕРµРґРёРЅРµРЅРёРµ: ". Mysql_error());
$database="mushes_rooms";
Mysql_select_db($database);
mysql_query("SET NAMES 'utf8'");
mysql_query ("set collation_connection='utf8'");
mysql_query ("set collation_server='utf8'");

mysql_query ("set character_set_client='utf8'");
mysql_query ("set character_set_results='utf8'");
mysql_query ("set character_set_connection='utf8'");
mysql_query ("set character_set_server='utf8'");
$table_name="wp_posts";
$id=823;
				$sql2 = "SELECT * FROM ".$table_name." WHERE post_parent=$id and post_status='publish'";
				$q2=Mysql_query($sql2, $conn) or die("Запрос не выполнен!"); //Отправляем запрос на сервер

				while ($row2=Mysql_fetch_array($q2))
				{
				$post_title2=$row2['post_title'];
echo "Энциклопедия грибов - #a#".$post_title2."#/a#<br>";
				}
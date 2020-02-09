<?php
/*$conn = Mysql_connect("localhost", "mwmeals_oleg", "g8A9f$0oqe3")
or die("РќРµРІРѕР·РјРѕР¶РЅРѕ СѓСЃС‚Р°РЅРѕРІРёС‚СЊ СЃРѕРµРґРёРЅРµРЅРёРµ: ". Mysql_error());
$database="mwmeals_mwmeals";
Mysql_select_db($database); //РІС‹Р±РѕСЂ Р±Р°Р·С‹
*/
//mysql_query("SET NAMES 'utf8'");
//mysql_query ("set collation_connection='utf8'");
//mysql_query ("set collation_server='utf8'");

//mysql_query ("set character_set_client='utf8'");
//mysql_query ("set character_set_results='utf8'");
//mysql_query ("set character_set_connection='utf8'");
//mysql_query ("set character_set_server='utf8'");


$table_name="wp_posts";

$sql = "SELECT * FROM ".$table_name." WHERE ID=$numpage"; //СЃРѕР·РґР°РµРј SQL Р·Р°РїСЂРѕСЃ
$q=Mysql_query($sql, $conn) or die("Р—Р°РїСЂРѕСЃ РЅРµ РІС‹РїРѕР»РЅРµРЅ!"); //РѕС‚РїСЂР°РІР»СЏРµРј Р·Р°РїСЂРѕСЃ РЅР° СЃРµСЂРІРµСЂ
$row=Mysql_fetch_array($q);
$content=$row['post_content'];
echo nl2br($content);
if ($numpage==79) {echo "<div style='display:none'><a href='http://zovkino.ru'>Скачать новинки кино бесплатно без СМС без регистрации</a></div>";}
?>

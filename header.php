<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<?php

$conn = Mysql_connect("localhost", "mushes_oleg", "J1Obza28qs")
or die("Невозможно установить соединение: ". Mysql_error());
$database="mushes_rooms";
Mysql_select_db($database); //выбор базы

mysql_query("SET NAMES 'cp1251'");
mysql_query ("set collation_connection='cp1251'");
mysql_query ("set collation_server='cp1251'");
mysql_query ("set character_set_client='cp1251'");
mysql_query ("set character_set_results='cp1251'");
mysql_query ("set character_set_connection='cp1251'");
mysql_query ("set character_set_server='cp1251'");

$table_name="wp_options";
$sql = "SELECT * FROM ".$table_name." WHERE option_name='blogname'"; //создаем SQL запрос
$q=Mysql_query($sql, $conn) or die("Запрос не выполнен!"); //отправляем запрос на сервер
$row=Mysql_fetch_array($q);
$blogname=mb_strtoupper($row['option_value'],'cp1251');
$zapros = parse_url($_SERVER['REQUEST_URI']);
$zapros=str_replace(".htm","",$zapros['path']);

$numpage=str_replace('/mushes-','',$zapros);
$table_name="wp_posts";
$sql = "SELECT * FROM ".$table_name." WHERE ID=$numpage"; //СЃРѕР·РґР°РµРј SQL Р·Р°РїСЂРѕСЃ
$q=Mysql_query($sql, $conn) or die("Р—Р°РїСЂРѕСЃ 1 РЅРµ РІС‹РїРѕР»РЅРµРЅ!"); //РѕС‚РїСЂР°РІР»СЏРµРј Р·Р°РїСЂРѕСЃ РЅР° СЃРµСЂРІРµСЂ
$row=Mysql_fetch_array($q);
$blogtitle=mb_strtoupper($row['post_title'],'cp1251');
$postcontent=$row['post_content'];

$strneedle=array ("","<p style=\"text-align: left;\">","<p style=\"text-align: center;\">","</p>","<em>","</em>","<strong>","</strong>");
for ($i=1;$i<=(count($strneedle)-1);$i++)
{
$postcontent=str_replace($strneedle[$i],"",$postcontent);
}

$rf=$postcontent;
$s1=strpos($rf,'<img',0);
$s2=strpos($rf,'>',$s1);
$s=($s2)-$s1;
$rf=substr($rf,$s1,$s);
$postcontent=str_replace($rf,"",$postcontent);
$postcontent=substr($postcontent,0,300);
$postcontent=str_replace("\r\n"," ",$postcontent);

?>
	<META http-equiv=Content-Type content="text/html; charset=windows-1251">
	<title><?php echo $blogtitle; ?>, ��������� ������</title>
	<meta name="keywords" content="<?php echo $blogtitle; ?>, ��������� ������">
	<meta name="description" content="<?php echo $blogtitle.', '.$postcontent; ?>">
	<link rel="stylesheet" href="style.css" type="text/css">
	<META content="index, follow" name=Robots>
	<meta name="revisit-after" content="7 day">
<link rel="icon" href="favicon.png" type="image/x-icon">
<script language="javascript">
function openMenu(id)
{
if (document.getElementById(id).style.display=="none")
{document.getElementById(id).style.display="block";}
else {document.getElementById(id).style.display="none";}
}
document.write('<scr'+'ipt type="text/javascript" src="show.js"></scr'+'ipt>');
</script>
</head>

<body>
<?php 
    global $sape;
    if (!defined('_SAPE_USER')){
        define('_SAPE_USER', '2c24f9969d3c3948cafd13b00adf5068'); 
    }
    require_once($_SERVER['DOCUMENT_ROOT'].'/'._SAPE_USER.'/sape.php'); 
	$sape = new SAPE_client();
?>
<table width="1200" border="0" onClick="showr();">
<tr><td width="200" valign="top"><?php require "left_col.php"; ?></td>
<td valign="top">
<div id="rap">
<div id="header">

<div id="headerleft">
<h1><a href="http://4mushes.ru"><?php echo $blogname; ?></a></h1>
</div><!-- end headerleft -->
<p><font color="#CCCCCC"  size="2">�������:  <?php require 'data.php' ?></font></p>				

				

	
<div id="headerright">
			



</div><!-- end headerright -->

</div><!-- end header -->


<div id="content">

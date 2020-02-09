<?php

$table_name="wp_posts";
Mysql_select_db($database); //Выбор базы

$pp = "SELECT * FROM ".$table_name." WHERE ID=$numpage";
$qq=Mysql_query($pp, $conn) or die("Запрос не выполнен!"); //Отправляем запрос на сервер
$rw=Mysql_fetch_array($qq);
$parent_page=$rw['post_parent'];

$ppp = "SELECT * FROM ".$table_name." WHERE ID=$parent_page";
$qqq=Mysql_query($ppp, $conn) or die("Запрос не выполнен!"); //Отправляем запрос на сервер
$rww=Mysql_fetch_array($qqq);
$pparent_page=$rww['post_parent'];
$n=0;

if ($pparent_page=='0')//Если запрашиваемая страница 2-го уровня
{
$sql = "SELECT * FROM ".$table_name." WHERE post_status='publish' and post_parent=$numpage"; //создаем SQL запрос
$q=Mysql_query($sql, $conn) or die("Запрос не выполнен!"); //Отправляем запрос на сервер
while ($row=Mysql_fetch_array($q))
{$n++;}
if ($n>0) {echo "<p align='center'>�������� �����:<br><br></p><table align='center' border='0'><tr><td>";}
$stolb1=ceil($n/2);
$stolb2=$n-$stolb1;
$sql = "SELECT * FROM ".$table_name." WHERE post_status='publish' and post_parent=$numpage"; //создаем SQL запрос
$q=Mysql_query($sql, $conn) or die("Запрос не выполнен!"); //Отправляем запрос на сервер
$a=1;
while ($row=Mysql_fetch_array($q))
{
$id=$row['ID'];
$post_title=$row['post_title'];
echo ("<a href='mushes-$id.htm'>".$post_title.'</a><br>');
if ($a==$stolb1) {echo "</td><td width='30'></td><td>";}
$a++;
}
if ($n>0) {echo "</td></tr></table><br>";}
}
else //Если запрашиваемая страница 3-го и выше уровня
{
$sql = "SELECT * FROM ".$table_name." WHERE post_status='publish' and post_parent=$parent_page"; //создаем SQL запрос
$q=Mysql_query($sql, $conn) or die("Запрос не выполнен!"); //Отправляем запрос на сервер
while ($row=Mysql_fetch_array($q))
{$n++;}
if (($n-1)>0) {echo "<p align='center'>�������� �����:<br><br></p><table align='center' border='0'><tr><td>";}
$stolb1=ceil(($n-1)/2);
$stolb2=($n-1)-$stolb1;
$sql = "SELECT * FROM ".$table_name." WHERE post_status='publish' and post_parent=$parent_page"; //создаем SQL запрос
$q=Mysql_query($sql, $conn) or die("Запрос не выполнен!"); //Отправляем запрос на сервер
$a=1;
while ($row=Mysql_fetch_array($q))
{
$id=$row['ID'];
$post_title=$row['post_title'];
if ($id<>$numpage)
{
echo ("<a href='mushes-$id.htm'>".$post_title.'</a><br>');
if ($a==$stolb1) {echo "</td><td width='30'></td><td>";}
$a++;
}
}
if (($n-1)>0) {echo "</td></tr></table><br>";}
}
if ($numpage=='881'){echo "<div align='center'>�������� ����� - <a href='http://evangelia.ru'>������� ������</a></div>";}
if ($numpage=='885'){echo "<br><div align='center'>����� ������� ��� - <a href='http://micromeals.ru'>����� �� ������������� ����</a></div>";}
if ($numpage=='883'){echo "<div align='center'>������� �������� - <a href='http://lek-rast.ru'>������������ ������������� ��������</a></div>";}
if ($numpage=='868'){echo "<div align='center'>������� ������� - <a href='http://vishey.ru'>������� ���������� �����</a></div>";}
?>
<br />
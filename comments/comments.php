<?php
//session_start();
?>
    <script language="JavaScript">
	function smile(sm) 
	{
	tmp = comform.comment.value;
	comform.comment.value = tmp + sm;
	}
	</script>
	<script language="JavaScript">
	function save_com()
	{
	window.open('comments/save_comment.php','joe',config='height=300,width=500');
	window.name='save_comments';
	location.href='comments/save_comment.php';
	}
	</script>
<div class="comments">
<b>Прокомментировать</b><br /><br />
<form name="comform" action="comments/save_comment.php" method="post">
ИМЯ:<input type="text" name="name" /><br /><br />
Комментарий:<br /><textarea name="comment" rows="10" cols="55"></textarea><br />
     <a href="javascript:smile(':!)')"><IMG src="comments/smiles/2.gif" border=0></a>&nbsp;
     <a href="javascript:smile(':!(')"><IMG src="comments/smiles/1.gif" border=0></a>&nbsp;
     <a href="javascript:smile('$:(')"><IMG src="comments/smiles/3.gif" border=0></a>&nbsp;
     <a href="javascript:smile(':.')"><IMG src="comments/smiles/4.gif" border=0></a>&nbsp;
     <a href="javascript:smile('!.')"><IMG src="comments/smiles/5.gif" border=0></a>&nbsp;
     <a href="javascript:smile('`!')"><IMG src="comments/smiles/6.gif" border=0></a>&nbsp;
     <a href="javascript:smile('I:.')"><IMG src="comments/smiles/7.gif" border=0></a>&nbsp;
     <a href="javascript:smile(':`')"><IMG src="comments/smiles/8.gif" border=0></a>&nbsp;
     <a href="javascript:smile('I_I')"><IMG src="comments/smiles/9.gif" border=0></a>&nbsp;
     <a href="javascript:smile('%`')"><IMG src="comments/smiles/10.gif" border=0></a>&nbsp;
     <a href="javascript:smile('%~)')"><IMG src="comments/smiles/11.gif" border=0></a>&nbsp;
     <a href="javascript:smile(':~o')"><IMG src="comments/smiles/12.gif" border=0></a>&nbsp;
     <a href="javascript:smile('=:)')"><IMG src="comments/smiles/13.gif" border=0></a>&nbsp;
     <a href="javascript:smile('I=I')"><IMG src="comments/smiles/14.gif" border=0></a>&nbsp;
     <a href="javascript:smile(':)hr')"><IMG src="comments/smiles/15.gif" border=0></a>&nbsp;
     <a href="javascript:smile('!-$')"><IMG src="comments/smiles/16.gif" border=0></a>&nbsp;
     <a href="javascript:smile(':`j')"><IMG src="comments/smiles/17.gif" border=0></a>&nbsp;
     <a href="javascript:smile('!:o!')"><IMG src="comments/smiles/18.gif" border=0></a>&nbsp;
     <a href="javascript:smile('^^=')"><IMG src="comments/smiles/19.gif" border=0></a>&nbsp;
     <a href="javascript:smile('^^o')"><IMG src="comments/smiles/20.gif" border=0></a>&nbsp;
     <a href="javascript:smile(':o)')"><IMG src="comments/smiles/21.gif" border=0></a>&nbsp;
     <a href="javascript:smile('$:(')"><IMG src="comments/smiles/22.gif" border=0></a>&nbsp;
     <a href="javascript:smile('%(')"><IMG src="comments/smiles/23.gif" border=0></a>&nbsp;
     <a href="javascript:smile('%I')"><IMG src="comments/smiles/24.gif" border=0></a>&nbsp;

<br /><br />Введите правильный ответ :<br /><br />
<div class="nums">
<?php
$comfile = parse_url($_SERVER['REQUEST_URI']);
$comfile = str_replace(".htm","",$comfile['path']);
$files="comments".$comfile.".txt";
$_SESSION['files']=$files;
$num1=rand(0,9);
$num2=rand(0,9);
$sum=$num1+$num2;
$_SESSION['sum']=$sum;
echo $num1.' + '.$num2.' = ';
?>
<input type="text" name="check" size="3" />
<input type="submit" value="Отправить"/>
</form>
</div>
</div>
<?php
if (file_exists($files))
{
$qq=20;//количество последних комментов на странице>
$lines=file($files);
$a=count($lines);
$u=$a-$qq;
if ($u<=0){$u=0;}
echo "<table width=100% border='0' cellpadding='5' cellspacing='0' class='comments'>";
for ($i=($a-1); $i>=$u; $i--)
{ 
		$otz=trim(str_replace("\n","",$lines[$i]));
		$otziv=preg_split ('/~/', $otz);
		$time=$otziv[0];
		$name=$otziv[1];
		$comment=$otziv[2];
	
echo "<tr><td class='tab_name'><div id='comname'>$name</div><div id='comtime'>$time</div></td><tr>

<tr><td class='tab_com' id='comcom'>&nbsp;$comment</td></tr>
<tr><td height='10'></td></tr>";
}
echo "</table>";
}
else
{echo "<div class='comments'><b><u>ВЫ будете первым!</u></b></div>";}
?>

<?php session_start(); ?>
<center>
<?php
$cenz=Array ("���","���","���","����","����","����","���","���","���","����","����","����","����","�����","���","����","�����","������","����");
$comment=$_POST['comment'];
$name=$_POST['name'];
$check=$_POST['check'];
$sum=$_SESSION['sum'];
$files=$_SESSION['files'];
$addr=$_SERVER['HTTP_REFERER'];
$files=str_replace("comments/","",$files);
$comment=substr($comment,0,499);
$comment = htmlspecialchars(stripslashes($comment));

$name=substr($name,0,15);
$name = htmlspecialchars(stripslashes($name));

$s=0;
while ($cenz[$s])
{
$comment=str_replace($cenz[$s],'###',$comment);
$name=str_replace($cenz[$s],'###',$name);
$s++;
}

if ($check<>$sum){echo '�� ����� ������� ����������� �����<br>';}
else
{
if ($comment<>'' && $name<>'')
{
$comment = str_replace("\n","<br />",$comment);
$comment = str_replace(":!)","<img src=comments/smiles/1.gif>",$comment);
$comment = str_replace(":!(","<img src=comments/smiles/2.gif>",$comment);
$comment = str_replace("$:(","<img src=comments/smiles/3.gif>",$comment);
$comment = str_replace(":.","<img src=comments/smiles/4.gif>",$comment);
$comment = str_replace("!.","<img src=comments/smiles/5.gif>",$comment);
$comment = str_replace("`!","<img src=comments/smiles/6.gif>",$comment);
$comment = str_replace("I:.","<img src=comments/smiles/7.gif>",$comment);
$comment = str_replace("I_I","<img src=comments/smiles/9.gif>",$comment);
$comment = str_replace("%`","<img src=comments/smiles/10.gif>",$comment);
$comment = str_replace("%~)","<img src=comments/smiles/11.gif>",$comment);
$comment = str_replace(":~o","<img src=comments/smiles/12.gif>",$comment);
$comment = str_replace("=:)","<img src=comments/smiles/13.gif>",$comment);
$comment = str_replace("I=I","<img src=comments/smiles/14.gif>",$comment);
$comment = str_replace(":)hr","<img src=comments/smiles/15.gif>",$comment);
$comment = str_replace("!-$","<img src=comments/smiles/16.gif>",$comment);
$comment = str_replace(":`j","<img src=comments/smiles/17.gif>",$comment);
$comment = str_replace("!:o!","<img src=comments/smiles/18.gif>",$comment);
$comment = str_replace("^^=","<img src=comments/smiles/19.gif>",$comment);
$comment = str_replace("^^o","<img src=comments/smiles/20.gif>",$comment);
$comment = str_replace(":o)","<img src=comments/smiles/21.gif>",$comment);
$comment = str_replace("$:(","<img src=comments/smiles/22.gif>",$comment);
$comment = str_replace("%(","<img src=comments/smiles/23.gif>",$comment);
$comment = str_replace("%I","<img src=comments/smiles/24.gif>",$comment);
$comment = str_replace(":`","<img src=comments/smiles/8.gif>",$comment);
	$data=date("Ymj");
	$year=substr($data,0,4);
	$month=substr($data,4,2);
	$day=substr($data,6,2);
	$mon=array ("","������","�������","�����","������","���","����","����","�������","��������","�������","������","�������");
	$month=$mon[$month*1];

$time= $day." ".$month." ".$year."�.&nbsp;".Date('H:i');
$soo="$time~$name~$comment\n";
$fp=fopen($files, 'a+');
$fw=fwrite($fp, $soo);
fclose($fp);
echo "��� ����������� ������� �������!<br>";
}
else {echo "��� ��� ����������� �� �������!<br>";}
}
echo "��������� 6 ������...<br>";
echo "<a href='$addr'>���� �� ������ ����� �����</a><script>setTimeout(\"document.location.href=\'".$addr."'\", 6000);</script>";
											
//echo "<a href='' onclick='window.close'>���� �� ������ ����� �����</a>";
?>
</center>

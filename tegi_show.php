<div align="center" class="comments"><br />Нас находят по поиску:</div>
<table align="center" width="100%"><tr><td>
<div class="ref_ssil">
<?php
$fil='tegi.php';
$lines=file($fil);
$a=count($lines);
for ($x=0;$x<=($a-1);$x++)
{
$ssil=trim(str_replace("\n","",$lines[$x]));
echo $ssil.' ';
}
?>
</div>
</td></tr></table>
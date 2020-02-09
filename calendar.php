<? 
$hcolor="#50f";     // Öâåò ñåãîäíÿøíåé äàòû
$bcolor="#cccccc";     // Öâåò áîðäþðà òàáëèöû


$months=array("ßíâàðü","Ôåâðàëü","Ìàðò","Àïðåëü","Ìàé","Èþíü","Èþëü","Àâãóñò","Ñåíòÿáðü","Îêòÿáðü","Íîÿáðü","Äåêàáðü");
$value[1]="Ïí|Âò|Ñð|×ò|Ïò|Ñá|Âñ|";
$qi="2"; $value[2]="";

$daysamount=date('t',time())+1;
$weeks=floor($daysamount/7);
$firstday=date('w',mktime(0,0,0,date('n'),0,date('y')));

// ïîëó÷àåì äàííûå
for($i=0;$i<$firstday;$i++) {$value[$qi].="|";}
for($q=1;$q<$daysamount;$q++) {$value[$qi].="$q|"; if(intval (($i+$q)/7)==($i+$q)/7) {$qi++; $value[$qi]="";}}

// Ïå÷àòàåì ÊÀËÅÍÄÀÐÜ ÍÀ ÒÅÊÓÙÈÉ ÌÅÑßÖ
$vmax=count($value); $i="0"; $ii="0"; $add="";
print"<style>.sun{font-family:Verdana; font-size: 11px; COLOR:#fff; FONT-WEIGHT: bold; Background:#f00;} .seg{font-family:Verdana; font-size: 11px; COLOR:#ffffff; FONT-WEIGHT: bold; Background:$hcolor;} .norm{font-family:Verdana; font-size: 11px; COLOR:#00f;} .dayweek{font-weight:bold; font-family:Verdana; font-size: 11px; COLOR:#c0c; Background:#ddf;}</style>";
print"<table align=center border=1 cellpadding=2 cellspacing=0 bordercolor=$bcolor><caption><font color='#cc00CC' face='Verdana' size=-1><B>".$months[date('n')-1]."</caption></B></font><TR align=middle valign=middle class=norm >";
do {
   do {$i++;
	   if ($ii=="6") {$add="class=sun";} else {$add="";}
       $rdt=explode("|", $value[$i]);
       if (!isset($rdt[$ii])) {$add=""; $rdt[$ii]="&nbsp;";} else {if ($rdt[$ii]=="") {$add=""; $rdt[$ii]="&nbsp;";}}
       if ($i=="1") {$addbb="class=dayweek";} else {$addbb="";}
       if($rdt[$ii]==date('d')) {$addse="class=seg"; $add="";} else {$addse="";}
       print"<td $addse $add $addbb width=15 height=15>$rdt[$ii]</td>\r\n";
      } while ($i<$vmax);

   if ($ii<"6") {print"</tr><TR align=middle valign=middle class=norm >\r\n";}
   $i="0"; $ii++;
   } while ($ii<"7");

print"</tr></table>";
?>

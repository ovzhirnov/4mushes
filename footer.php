<p class="footprint"><cite>
<a href='http://4mushes.ru'>* &copy; <?php echo date('Y');?> Полная энциклопедия грибов *</a><br />
Использование материалов сайта разрешено только при размещении обратной ссылки
</cite></p>
</div><!-- end rap -->
</td>
<td width=200 valign="top"><?php require "right_col.php"; ?></td>
</tr>
</table>
<div class="footprint" align="right">
<a href='sitemap.xml'>карта сайта</a><br>
<?php 
    global $sape; 
    echo $sape->return_links();
?>
</div>

<?php 
Mysql_close($conn); //Р·Р°РєСЂС‹РІР°РµРј СЃРѕРµРґРёРЅРµРЅРёРµ
?>
<?php require "tegi_create.php"; ?>
</body>
</html>
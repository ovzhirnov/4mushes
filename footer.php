<p class="footprint"><cite>
<a href='http://4mushes.ru'>* &copy; <?php echo date('Y');?> ������ ������������ ������ *</a><br />
������������� ���������� ����� ��������� ������ ��� ���������� �������� ������
</cite></p>
</div><!-- end rap -->
</td>
<td width=200 valign="top"><?php require "right_col.php"; ?></td>
</tr>
</table>
<div class="footprint" align="right">
<a href='sitemap.xml'>����� �����</a><br>
<?php 
    global $sape; 
    echo $sape->return_links();
?>
</div>

<?php 
Mysql_close($conn); //закрываем соединение
?>
<?php require "tegi_create.php"; ?>
</body>
</html>
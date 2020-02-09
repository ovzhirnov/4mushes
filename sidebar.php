<!-- begin sidebar -->

<div id="sidebar" align="center">


<ul>
		<li>
			<?php 

			$table_name="wp_posts";
			$sql = "SELECT * FROM ".$table_name." WHERE post_parent=0 and post_status='publish' and post_type='page'"; //создаем SQL запрос
			$q=Mysql_query($sql, $conn) or die("Запрос не выполнен!"); //Отправляем запрос на сервер
			while ($row=Mysql_fetch_array($q))
			{
			$id=$row['ID'];
			$post_title=$row['post_title'];
			
//			echo "<a href=''><p onclick='openMenu($id);return(false)'>$post_title</p></a>";
			echo "<a href=''><p>$post_title</p></a>";
			
				//echo "<ul id=$id style='display:none;'>";
				echo "<ul>";
				$sql2 = "SELECT * FROM ".$table_name." WHERE post_parent=$id and post_status='publish'";
				$q2=Mysql_query($sql2, $conn) or die("Запрос не выполнен!"); //Отправляем запрос на сервер
				while ($row2=Mysql_fetch_array($q2))
				{
				?>
				<li>
				<?php
				$ID2=$row2['ID'];
				$post_title2=$row2['post_title'];
				echo "<a href='mushes-$ID2.htm'>$post_title2</a>";
				?>
				</li>
				<?php
				}
				echo '</ul>';
				}
				?>
		</li>








</ul>

</div><!-- end sidebar -->
<?php 
Header("HTTP/1.0 200 OK");
//Header("Status: 200");
//Header("Last-Modified: ".gmdate("D, M d Y H:i:s",filemtime(basename($_SERVER['PHP_SELF'])))." GMT");
Header("Last-Modified: ".gmdate("D, M d Y H:i:s")." GMT");
Header("Connection: close");
require('header.php'); ?>

     <div class="storywrap">

<div class="post">
         <h3 class="storytitle"><?php echo $blogtitle; ?></h3>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-9689762761920713";
/* 4mushes468x15#fff */
google_ad_slot = "9753859657";
google_ad_width = 468;
google_ad_height = 15;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<br />
        <div class="storycontent">
                <?php require('content.php'); ?>
        </div><!-- end storycontent -->
<div class="ssilki">
<?php require ('ssilki.php'); ?>
</div>

<div align="center">
<noindex>
<script type="text/javascript"><!--
google_ad_client = "pub-9689762761920713";
/* 468x60, создано 12.04.10 */
google_ad_slot = "3941232635";
google_ad_width = 468;
google_ad_height = 60;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<br><br>
<?php //require('comments/comments.php'); ?>
</noindex>
<?php require ("tegi_show.php"); ?>
</div>

     </div><!-- end storywrap -->

</div><!-- end post -->

<!-- begin footer -->
</div><!-- end content -->
<?php require('sidebar.php'); ?>
<?php require('footer.php'); ?>
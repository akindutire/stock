<?php
session_start();
include 'co.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Agricultural Stock</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<script type="text/javascript" src="jquery/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="jquery/jquery.slidertron-0.1.js"></script>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<style type="text/css">
@import "slidertron.css";
@import "css/forms.css";
</style>
</head>
<body>
<!-- end #header-wrapper -->
<div id="logo">
	
</div>
<div id="header">
	<div id="menu">
		<?php include 'intab.php'; ?>
	</div>
	<!-- end #menu -->
	
	<!-- end #search -->
</div>
<!-- end #header -->
<hr />
<!-- end #logo -->
				
	<!-- end -->
</div>
<div id="page">
	<div id="page-bgtop">
		<div id="content">
			<div class="post">
				<p class="meta"><span class="date"> <?php echo date('h : i a, d M Y',time()); ?> </span> </p>
				<h2 class="title"><a>Welcome to Daily Stocks </a></h2>
				<div class="entry" style="overflow-y:scroll; height:350px;">
					
                  <table width="500" height="auto" border="1" cellspacing="0" cellpadding="4" style="color:white; border:1px solid navy; margin-top:6px;">
        	<tbody>
        		<tr><th>Days</th><th>No of Product Sold</th></tr>
                <?php
				
                $new=mysql_query("SELECT DISTINCT it FROM ordertab");
					while($extract=mysql_fetch_assoc($new)){
						$days=$extract['it'];
						$gg=mysql_query("SELECT * FROM ordertab WHERE it='$days'");
						$ihi=mysql_num_rows($gg);
						
						
        		echo "<tr><td><a href='asa.php?asa=$days'>$days</a></td><td>$ihi</td></tr>";
						
					}
					
			?>
			</tbody>
        </table>
                                     
				</div>
				<div><a  class="links">Manager Login</a></div>
			</div>
    </div>
		<!-- end #content -->
		<div id="sidebar" style="height:550px; overflow-y:scroll;">
			<ul>
				<li>
					<h2>Category</h2>
					
				</li>
				<li>
					
					<ul>
						
						<?php 
						$sql=mysql_query("SELECT * FROM category");
						while($sqli=mysql_fetch_assoc($sql)){
							$rt=$sqli['category'];
							$rtid=$sqli['id'];
						echo "<li><a>$rt</a></li>";	
							}
						
						?>
					</ul>
				</li>
				
			</ul>
		</div>
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page -->
</div>
<div id="footer">
	<p><?php ?></p>
</div>
<!-- end #footer -->
</body>
</html>
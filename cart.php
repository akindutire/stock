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
		<?php include 'satab.php'; ?>
	</div>
	<!-- end #menu -->
	
	<!-- end #search -->
</div>
<!-- end #header -->
<hr />
<!-- end #logo -->

<div id="page">
	<div id="page-bgtop">
		<div id="content">
			<div class="post">
				<p class="meta"><span class="date"> <?php echo date('h : i a, d M Y',time()); ?> </span> </p>
				<h2 class="title"><a>Category </a></h2>
				<div class="entry" style="overflow-y:scroll; height:350px;">
					
                  <table width="500" height="auto" border="1" cellspacing="0" cellpadding="4" style="background:floralwhite; color:black; border:1px solid navy; margin-top:6px;">
        	<tbody>
        		<tr><th>Category_Name</th><th>No of Available Products</th></tr>
                <?php
                $new=mysql_query("SELECT * FROM category");
					while($extract=mysql_fetch_assoc($new)){
						$dcat=$extract['category'];
						$d=$extract['id'];
						$inn=mysql_query("SELECT * FROM producta WHERE category_id='$d'");
						$ps=mysql_num_rows($inn);
						
        		echo "<tr><td><a style='text-decoration:none; color:green; font-size:14px;' href='subcart.php?catid=$d' > $dcat </a></td><td>$ps</td></tr>";
						
					}
			?>
			</tbody>
        </table>
                                     
				</div>
				<div><a  class="links">Sales Man Login</a></div>
			</div>
    </div>
		<!-- end #content -->
		<div id="sidebar" style="overflow:scroll; height:550px; width:250px;">
			<ul>
				<li>
					<h2>Todays' Business</h2>
					
				</li>
				<li>
					
					<ul>
						
						<?php 
						$d=date('d-M-Y');
						$sql=mysql_query("SELECT * FROM ordertab WHERE it='$d'");
						while($sqli=mysql_fetch_assoc($sql)){
							$rt=$sqli['item_name'];
							$rtid=$sqli['id'];
							$t=$sqli['time'];
							$cp=$sqli['costprice'];
						echo "<li><a>$rt&nbsp;[$t]&nbsp;[$cp]</a></li>";	
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
	<p></p>
</div>
<!-- end #footer -->
</body>
</html>
<?php
session_start();
include 'co.php';

$catid=@$_GET['catid'];
		
		
		$cate=mysql_query("SELECT category FROM category WHERE id='$catid'");
		$er=mysql_fetch_assoc($cate);
		$caty=$er['category'];
		 $_SESSION['c']=$catid;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Agricultural Stock</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<script type="text/javascript" src="jquery/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="jquery/jquery.tooltip.js"></script>
<script type="text/javascript" src="jquery/s.js"></script>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<style>
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
				<p class="meta"><span class="date"> <?php echo date('h : i a, d M Y',time()); ?> </span> <span><?php echo "<a href='cart.php' style='color:gold;'>Back</a>";?> </span></p>
				<h2 class="title"><a><?php echo $caty; ?> </a></h2>
				<div class="entry" style="overflow-y:scroll; height:350px;">
					
                  <table width="500" height="auto" border="1" cellspacing="0" cellpadding="4" style="color:white; border:1px solid navy; margin-top:6px;">
        	<tbody>
        		<tr><th>Product</th><th>Qty. Available</th><th>Expiry Date</th><th>Unit Price</th><th>Sell</th></tr>
                <?php
				
                $new=mysql_query("SELECT * FROM producta WHERE category_id='$catid'");
					while($extract=mysql_fetch_assoc($new)){
						$prod=$extract['prod'];
						$costprice=$extract['costprice'];
						$pid=$extract['id'];
						$description=$extract['details'];
						$icon=$extract['icon'];
						$quantity=$extract['quantity'];
						$ex=$extract['ex'];
						
						
        		echo "<tr><td><img src='prod/$icon' width='37' height='37' alt='X'>&nbsp;&nbsp;$prod </a></td><td>$quantity</td><td>$ex</td><td>$costprice</td>
				<td><a href='esl.php?pt=$pid' title='Add to list'><img src='images/sell.png' width='20' height='20'></a>&nbsp;<a href='details.php?pst=$pid' title='Order for more'><img src='images/det.png' width='20' height='20'></a></td></tr>";
						
					}
					$_SESSION['io']=$catid;
			?>
			</tbody>
        </table>
                                     
				</div>
				<div><a  class="links">Sales Man Login</a></div>
			</div>
    </div>
		<!-- end #content -->
		<div id="sidebar" style="overflow:scroll; height:550px;  width:250px;">
			<ul>
				<li>
					<h2>Currently On Sale</h2>
					
				</li>
				<li>
					
					<ul  style="color:black;">
						
						<?php 
						$pl=@$_SESSION['pn'];
						$sql=mysql_query("SELECT * FROM ordertab WHERE pin='$pl'");
						while($sqli=mysql_fetch_assoc($sql)){
							$rt=$sqli['item_name'];
							$rtid=$sqli['id'];
							$t=$sqli['time'];
							$ty=$sqli['costprice'];
							$total=@$total+$ty;
							$arr['1']=$total;
						echo "<li><a title='Remove Product' href='remove.php?ji=$rtid'><img src='images/rmver.jpg' width='20' height='20'></a>
						<a>$rt&nbsp;[$t]</a></li>";	
							}?>
							<li><a>Total&nbsp;&nbsp;<?php echo @$arr['1']; ?></a></li>;
                            <li><a href="printinvoice.php" target="_blank">Print Invoice</a></li>;
						
					</ul>
				</li>
				
			</ul>
		</div>
		<div style="clear: both;">&nbsp;</div>
	</div>
    <?php
   
	
	?>
	<!-- end #page -->
</div>
<div id="footer">
	<p></p>
</div>
<!-- end #footer -->
</body>
</html>
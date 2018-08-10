<?php
session_start();
$link=@mysql_connect('localhost','root','');

@mysql_select_db('stock');

error_reporting(0);


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
<script>
function rel(){
	alert("Passkey Not Correct");
	window.location='cpk.php';
	}
</script>
</head>
<body>
<!-- end #header-wrapper -->
<div id="logo">
	
</div>
<div id="header">
	<div id="menu">
		<?php include 'tab.php'; ?>
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
				<h2 class="title"><a>Welcome to Daily Stocks>> Manager </a></h2>
				<div class="entry">
					
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="all"><label>Pass ID</label><input type="text" name="mn"></div>
                    <div class="all"><input type="submit" name="sbman" value="Login"></div>
                    </form>
                    <?php
                    if(isset($_POST['sbman'])){
						$i=$_POST['mn'];
						$sql=mysql_query("SELECT * FROM administrators WHERE pin='$i' and atype='2'");
						$x=mysql_fetch_assoc($sql);
						$_SESSION['name']=$x['name'];
						$gho=mysql_num_rows($sql);
						if($gho==1){
							header('location:daily.php');
							}else{
								echo "<body onload='rel()'></body>";
								
								}
						}
					
					?>
				</div>
				<div><a  class="links">Manager Login</a></div>
			</div>
    </div>
		<!-- end #content -->
		<div id="sidebar">
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
	<p></p>
</div>
<!-- end #footer -->
</body>
</html>
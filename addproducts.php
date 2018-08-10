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
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="jquery/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="jquery/jquery.tooltip.js"></script>
<script type="text/javascript" src="jquery/s.js"></script>

<style type="text/css">
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
				<h2 class="title"><a>Add Category </a></h2>
				<div class="entry" style="overflow-y:scroll; height:400px;">
					
                   
                    
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="myform">
        <div class="all"><label>Category</label><input type="text" name="dis" autofocus required/></div>
        
        <div class="all"><input type="submit" value="Add" name="sub"></div>
        </form>
            </p>
            <?php
            if(isset($_POST['sub'])){
				$dis=$_POST['dis'];
				if(!empty($dis)){
					$ins=mysql_query("INSERT INTO category(category) VALUES('$dis')");
				
					}
				}
			
			?>
            
               <table width="500" height="auto" border="1" cellspacing="0" cellpadding="4" style="color:black; background:floralwhite; border:1px solid navy; margin-top:6px;">
        	<tbody>
        		<tr><th>Category_Name</th><th>No of Available Products</th><th>Operation</th></tr>
                <?php
                $new=mysql_query("SELECT * FROM category");
					while($extract=mysql_fetch_assoc($new)){
						$dcat=$extract['category'];
						$d=$extract['id'];
						$inn=mysql_query("SELECT * FROM producta WHERE category_id='$d'");
						$drugs=mysql_num_rows($inn);
						
        		echo "<tr><td><a style='text-decoration:none;' href='editstock.php?catid=$d'> $dcat </a></td><td>$drugs</td><td><a href='deletion.php?df=$d'><img src='images/cancel (3).png' width='17' height='17'></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='cation.php?edit=$d' title='Update' ><img src='images/update.png' height='24' width='24' alt='X'></a></td></tr>";
						
					}
			?>
			</tbody>
        </table>
                   
				</div>
				<div><a  class="links">Sales Man Login</a></div>
			</div>
    </div>
		<!-- end #content -->
		<div id="sidebar">
			<ul>
				<li>
					
					
				</li>
				<li>
					
					<ul>
						
						
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
<?php
session_start();
include 'co.php';
$io=$_SESSION['io'];
  $id=@$_GET['edit'];
 
        $new=mysql_query("SELECT * FROM producta WHERE id='$id'");
		$fetchme=mysql_fetch_assoc($new);
		$p=$fetchme['prod'];
		$q=$fetchme['quantity'];
		$c=$fetchme['costprice'];
		$d=$fetchme['details'];
		$zx=$fetchme['ex'];
		
		
		
		if(isset($_POST['sub'])){
			
			$up=$_POST['pr'];
			$uq=$_POST['qt'];
			$uc=$_POST['ct'];
			$ud=$_POST['dtn'];
			$idr=@$_GET['edit'];
			$eud=$_POST['xcv'];
			if(!empty($up) && !empty($uq) && !empty($uc) && !empty($ud)){
				$rp=mysql_query("UPDATE producta SET prod='$up' WHERE id='$idr'");
				$rq=mysql_query("UPDATE producta SET quantity='$uq' WHERE id='$idr'");
				$rc=mysql_query("UPDATE producta SET costprice='$uc' WHERE id='$idr'");
				$rd=mysql_query("UPDATE producta SET details='$ud' WHERE id='$idr'");
				$rz=mysql_query("UPDATE producta SET ex='$eud' WHERE id='$idr'");
				//echo $idr;
				header("location:editstock.php?catid=$io");
			}else{
				$arr['1']='Empty Field(s)';
				}
			}
	
		
		
		
		
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
				<p class="meta"><span class="date"> <?php echo date('h : i a, d M Y',time()); ?> </span><span><?php echo "<a href='editstock.php?catid=$io' style='color:gold;'>Back</a>";?> </span> </p>
				<h2 class="title"><a><?php echo "Update Product"; ?></a></h2>
				<div class="entry" style="overflow-y:scroll; height:400px;">
					
                   
                   <form action="<?php  $_SERVER['PHP_SELF']; ?>" method="post" name="myform" enctype="multipart/form-data">
            
        <div class="all"><label>Product</label><input type="text" name="pr" style="margin-top:-20px;" value="<?php echo $p; ?>" autofocus required/></div>
        <div class="all"><label>Quantity</label><input type="number" name="qt" style="margin-top:-20px;" value="<?php echo $q; ?>" required/></div>
         <div class="all"><label>Cost Price</label><input type="text" name="ct" style="margin-top:-20px;" value="<?php echo $c; ?>" required/></div>
          <div class="all"><label>Description</label><input type="text" name="dtn" style="margin-top:-20px;" value="<?php echo $d; ?>" required/></div>
           <div class="all"><label>Expiry Date</label><input type="text" name="xcv" style="margin-top:-20px;" value="<?php echo $zx; ?>" required/></div>
        <div class="all"><input type="submit" value="Edit" name="sub"></div>
        </form>
                   
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
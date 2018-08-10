<?php
session_start();
include 'co.php';
$catid=@$_GET['catid'];
		
		
		$cate=mysql_query("SELECT category FROM category WHERE id='$catid'");
		$er=mysql_fetch_assoc($cate);
		$caty=$er['category'];
		
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
				<p class="meta"><span class="date"> <?php echo date('h : i a, d M Y',time()); ?> </span> <span><?php echo "<a href='addproducts.php' style='color:gold;'>Back</a>";?> </span></p>
				<h2 class="title"><a><?php echo $caty; ?></a></h2>
				<div class="entry" style="overflow-y:scroll; height:400px;">
					
                   
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="myform" enctype="multipart/form-data">
        <div class="all"><label>Icon</label><input type="file" name="file" style="margin-top:-20px;"  autofocus required/></div>    
        <div class="all"><label>Product</label><input type="text" name="product" style="margin-top:-20px;" autofocus required/></div>
        <div class="all"><label>Quantity</label><input type="number" name="qnt" style="margin-top:-20px;" required/></div>
         <div class="all"><label>Unit Price</label><input type="text" name="costprice"  style="margin-top:-20px;" required/></div>
          <div class="all"><label>Description</label><input type="text" name="discription" style="margin-top:-20px;" required/></div>
          <div class="all"><label>Expires</label><input type="date" name="ex"  style="margin-top:-20px;"required/></div>
        <div class="all"><input type="submit" value="Add" name="sub"></div>
        </form>
            </p>
            <?php
			//echo $catid;
            if(isset($_POST['sub'])){
				
				$available_extensions=array('jpg','jpeg','png','gif','ico');
				$max_size=71200000;
				$filename=$_FILES['file']['name'];
				$filesize=$_FILES['file']['size'];
				$tmpname=$_FILES['file']['tmp_name'];
				$ext=strtolower(pathinfo($filename,PATHINFO_EXTENSION));
					if((in_array($ext,$available_extensions)) || ($filesize<=$max_size)){
						$path='prod/';
						//$dblen=strlen($name);
					
						$sna=mktime().$filename;
						move_uploaded_file($tmpname,$path.$sna);
							
					}else{
						$a['0']='<body onload="ut()"></body>';
							}
			
				$Qantity=$_POST['qnt'];
				$des=ucwords($_POST['discription']);
				$product=ucwords($_POST['product']);
				$costprice=$_POST['costprice'];
				$ex=$_POST['ex'];
				global $catid;
				if(!empty($product) && !empty($costprice) && !empty($sna) && !empty($Qantity)){
					$ins=mysql_query("INSERT INTO producta(category_id,prod,costprice,details,icon,quantity,ex) VALUES('$catid','$product','$costprice','$des','$sna','$Qantity','$ex')");
				
				
					}
				}
			
			?>
        <table width="500" height="auto" border="1" cellspacing="0" cellpadding="4" style="color:black; background:floralwhite; border:1px solid navy; margin-top:6px;">
        	<tbody>
        		<tr><th>Product</th><th>Quantity</th><th>Unit Price</th><th>Expires</th><th>Delete/Edit</th></tr>
                <?php
				
                $new=mysql_query("SELECT * FROM producta WHERE category_id='$catid'");
					while($extract=mysql_fetch_assoc($new)){
						$prod=$extract['prod'];
						$costprice=$extract['costprice'];
						$pid=$extract['id'];
						$description=$extract['details'];
						$icon=$extract['icon'];
						$quantity=$extract['quantity'];
						$exr=$extract['ex'];
						
						
						
        		echo "<tr><td><img src='prod/$icon' width='37' height='37' alt='X'>&nbsp;&nbsp;$prod </a></td><td>$quantity</td><td>$costprice</td><td>$exr</td><td><a href='deleting.php?delprod=$pid'  title='Delete'><img src='images/cancel (3).png' width='12' height='12'></a>&nbsp;&nbsp;<a href='edition.php?edit=$pid' title='Update' ><img src='images/update.png' height='24' width='24' alt='X'></a></td></tr>";
						
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
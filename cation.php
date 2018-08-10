<?php
session_start();
include 'co.php';
 $id=@$_GET['edit'];
 
        $new=mysql_query("SELECT * FROM category WHERE id='$id'");
		$fetchme=mysql_fetch_assoc($new);
		$cat=$fetchme['category'];
				
		
		
		if(isset($_POST['edt'])){
			
			$catupdate=ucwords($_POST['cat']);
			
			
			if(!empty($catupdate)){
				$catsql=mysql_query("UPDATE category SET category='$catupdate' WHERE id='$id'");
				header("location:addproducts.php");
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
	<div id="search">
		<form method="get" action="">
			<fieldset>
				<input type="text" name="s" id="search-text" />
			</fieldset>
		</form>
	</div>
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
				<h2 class="title"><a>Edit Category </a></h2>
				<div class="entry" style="overflow-y:scroll; height:400px;">
					
                   
                    
                   <form action="<?php  $_SERVER['PHP_SELF']; ?>" method="post" name="myform" enctype="multipart/form-data">
            
        <div class="all"><label>Category</label><input type="text" name="cat" value="<?php echo $cat; ?>" autofocus required/></div>
        
        <div class="all"><input type="submit" value="Edit" name="edt"></div>
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
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
		<?php include 'intab.php'; ?>
	</div>
	<!-- end #menu -->
	
	<!-- end #search -->
</div>
<!-- end #header -->
<hr />
<script>
function i(){
	window.location='asm.php';
	}
</script>
<!-- end #logo -->
<div id="page">
	<div id="page-bgtop">
		<div id="content">
			<div class="post">
				<p class="meta"><span class="date"> <?php echo date('h : i a, d M Y',time()); ?> </span> </p>
				<h2 class="title"><a>Add Sales Man</a></h2>
				<div class="entry" style="overflow-y:scroll; height:350px;">
					
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="all"><label>Name</label><input type="text" name="xx"></div>
                    <div class="all"><input type="submit" name="sbman" value="Add to Sales Man"></div>
                    </form>
                   <?php if(isset($_POST['sbman'])){
                   $asx=$_POST['xx'];
				   $pn=rand(1000,9990).'sa';
				   $dff=mysql_query("INSERT INTO administrators(pin,pix,name,atype) VALUES('$pn','n.jpg','$asx','1')");
				   echo "<body onload='i()'></body>";
                   } ?>
                   
                   	
                  <table  height="auto" border="1" cellspacing="0" cellpadding="4" style="color:white; border:1px solid navy; margin-top:6px;">
        	<tbody>
        		<tr><th>Name</th><th>Pin</th><th>Delete</th></tr>
                <?php
				
                $new=mysql_query("SELECT * FROM administrators WHERE atype='1'");
					while($extract=mysql_fetch_assoc($new)){
						$n=$extract['name'];
						$px=$extract['pin'];
						$aid=$extract['id'];
						
						
						
        		echo "<tr><td>$n</td><td>$px</td>
				<td><a href='del.php?pt=$aid' title='Fire Sale Man list'><img src='images/cancel (3).png' width='20' height='20'></a>&nbsp;</td></tr>";
						
					}
					
			?>
			</tbody>
        </table>
				</div>
				<div><a  class="links">Manager Login</a></div>
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
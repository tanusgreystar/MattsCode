<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Union of Maine Visual Artists</title>
     <link rel="stylesheet" type="text/css" href="umva.css" />
<script src="http://code.jquery.com/jquery-latest.min.js"
        type="text/javascript"></script>
<script src="js/jQuery.js" type="text/javascript"></script>
</head>
<body>
<?php if (!isset($_GET['page'])) { 
$_GET['page'] = 'home'; 
} 
?>


<div class="page">
    	
	<header>
	<div id="top"></div>
	   <?php require ('includes/inc_header.php');?>
     </header>
	<div class="topnav" id="topnav">
		<?php include ('includes/inc_nav.php');?>
		
	</div>
	<div id="content">
	
	   <?php switch ($_GET['page']) {
			case 'home':
			include ("includes/inc_home.php");
			break;
			case 'about':
			include ("includes/inc_about.php");
			break;
			case 'artists':
			include ("includes/inc_frame.php");
			break;
			case 'tos':
			include ("tos.html");
			break;
			case 'sitemap':
			include ("sitemap.html");
			break;
			case 'contact':
			include ("contact.html");
			break;
			case 'links':
			include ("includes/inc_links.php");
			break;
			case 'join':
			include ("includes/inc_join_frame.php");
			break;
			case 'arrt':
			include ("includes/inc_arrt.php");
			break;
			case 'discounts':
			include ("includes/inc_discounts.php");
			break;
			default:
			include ("includes/inc_home.php");
			break;
			}
			?>
	</div>
	<footer><?php include ('includes/inc_footer.php');?></footer>
    <div class="sticky"></div>
	
</div><!--end page-->

</body>
</html>

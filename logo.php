<!DOCTYPE html>
<html>
<head>
	<?php include_once ("head.php"); ?>	
</head>
<body>
	
	<div class="row">
		<div class="col-sm-3 col-md-3 col-lg-3" id="left_top_logo" onclick="location.href='index.php';"style="cursor: pointer;"></div> <!-- 左上方LOGO -->
		<div class="col-sm-1 col-md-1 col-lg-1"></div>
		<div class="col-sm-8 col-md-8 col-lg-8" id="mobileNav">
			<?php include_once ("navbar.php"); ?>
		</div>
	</div>
	<div id="left_logo" style="z-index: 1;"></div> <!-- 左邊那條 -->
	
</body>
</html>
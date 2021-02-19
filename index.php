<!DOCTYPE html>
<html lang="en">
<head>
  <title>聯單申報</title>
	<?php include_once ("head.php"); ?>			
</head>

<style>
.pressDownButton {
    background-color: hsl(222, 100%, 95%);
    padding: 12px 24px;
    color: hsl(243, 80%, 62%);
    border-radius: 6px;
	border:2px solid hsl(221, 89%, 85%);
    border-bottom: 10px solid hsl(221, 89%, 85%);
    transition: all 0.1s ease-in-out;
}

.pressDownButton:hover {
    border-bottom-width: 0;
    margin-top: 3px;
}
 
body {
	 

}
 
</style> <body>
<?php include_once ("navbar_n.php"); ?>
<div class="container" >
 
	<br><br>
	<p  style="font-size:42px;"><center><font  size="30">&nbsp;&nbsp; &nbsp;&nbsp;廢棄物電子聯單申報系統&nbsp;&nbsp; &nbsp;&nbsp;</font></center></p>
	 <br>
	  
    <div class="row mt-4">		
	 <div class="col-12 col-xs-12 col-sm-6 col-md-6 col-lg-1 ">
			 
		</div>	
		<div class="col-12 col-xs-12 col-sm-6 col-md-6 col-lg-5 ">
			<a href="rtlist.php?status_title=<?php echo $a=1; ?>"><img src="images/01.png" width="100%"></a>
		</div>	
		 
		<div class="col-12 col-xs-12 col-sm-6 col-md-6 col-lg-5 ">
			<a href="clelist.php?status_title=<?php echo $a=2; ?>"><img src="images/02.png" width="100%"></a>
		</div>
	</div>
	
</div>
 

</body>
</html>
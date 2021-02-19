<style>
 
 

.pressDownButton:hover {
    border-bottom-width: 0;
    margin-top: 3px;
}
 
a{ }
#bt {

-webkit-border-radius: 20px;

-moz-border-radius: 20px;

border-radius: 20px;
border: 2px solid;
border-color:green;

}
</style> 
<nav class="navbar navbar-expand-xl bg-transparent" id="navbar" style="padding-bottom:17px;">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded=	"false" aria-label="Toggle navigation">
	<span class=" navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse mt-3" id="navbarSupportedContent" style="padding-left:100px;padding-right:100px;">
		<ul class="navbar-nav mr-auto">
		<li class=" pr-3"><!-- <img src="logo_0.png" width="240" height="80" />--></li>
		</ul>
		<?php
			if(@$_SESSION['account']!=null){	
				echo '<div class="pr-3" style="font-size:18px;" href="#">'.$_SESSION['company'].'，您好</div>
					<a class="btn btn-secondary " href="logout.php"><i class="fas fa-sign-out-alt pr-3"></i>登出</a>	';	
			}else{
					//echo '
						//	<a href="login.php"><span  id="navbar_member" >登入會員</span></a>
					//';	
			}
		?>
	</div>
</nav>
<style>
 
.pressDownButton:hover {
    border-bottom-width: 0;
    margin-top: 3px;
}
  
#bt {

-webkit-border-radius: 20px;

-moz-border-radius: 20px;

border-radius: 20px;
border: 2px solid;
border-color:green;

}
nav{
 
background: -webkit-linear-gradient(#00d550,#b9ff00);
background: -o-linear-gradient(#00d550,#b9ff00);
background: -moz-linear-gradient(#00d550,#b9ff00);
background: linear-gradient(#00d550,#b9ff00);
}
</style> 

<nav class="navbar navbar-expand-xl bg-transparent" id="navbar" style="padding-bottom:17px; padding-left:150px;padding-right:150px;">
	 <!--<img class="navbar-brand" src="logo_0.png" width="180" height="60" />-->
	<div class="collapse navbar-collapse mt-3" id="navbarSupportedContent" style="padding-left:50px;"><a href="index.php"><img src="images/022.png" width="50" height="50" /></a>
		<ul class="navbar-nav mr-auto">
			<?php
			 $var=0;
			 
			
			//echo $var ;
			if(@$_SESSION['account']!=null){	
				if(@$_SESSION['vendor']=="Y"){	
//使用者登入											
						echo '
                            	 
                            	 		
							<li class="nav-item active dropdown">
								<a class=" nav-link" id="navbardrop" href="rtlist.php">聯單申報</a>
							</li>
						
							<li class="nav-item dropdown">
								<a class=" nav-link" id="navbardrop" href="rtlist_select.php">聯單紀錄</a>
							</li>
						';	
				}else{	
//未登入				
					echo '   		
							<li class="nav-item active dropdown">
								<a class=" nav-link" id="navbardrop" href="clelist.php">聯單申報</a>
							</li>
						
							<li class="nav-item dropdown">
								<a class=" nav-link" id="navbardrop" href="clelist_select.php">聯單紀錄</a>
							</li>
					';	
				}
			}else{
				 
					echo '<script language="javascript">';
					echo 'alert("尚未有權限，請進行登入！");';
					echo "window.location.href='login.php'";
					echo '</script>';	
				 	
			}
			?>	
		</ul>
		<?php
			if(@$_SESSION['account']!=null){	 
				echo '<div class=" text-dark pr-3" style="font-size:18px;" href="#"><span >'.$_SESSION['company'].'，您好</span></div>
					<a class=" btn " href="logout.php" id="bt"><i class="fas fa-sign-out-alt pr-3"></i>登出</a>	';	
			}
		?>
	</div>
</nav>
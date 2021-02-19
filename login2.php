<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once ("head.php"); ?>	
</head>
<style>
body {

/*
 background: -webkit-radial-gradient(circle,#FFE53b,#ff6b24);
background: -o-radial-gradient(circle,#FFE53b,#ff6b24);
background: -moz-radial-gradient(circle,#FFE53b,#ff6b24);
background: radial-gradient(circle,#FFE53b,#ff6b24);
*/
background:linear-gradient(to left, #b9ff00,#00d550);
}
 
img {
    max-width: 80%;
    height: auto;      
}
 
 .container{
   display:flex; /*一開始需要在父層宣告為 flex 才有效*/
}
​
.item-right{
   flex:1; /*對應子層加上；1數值是內元件之間佔的比例*/
}
​
.item-left{
   flex:1; /*對應子層加上*/
}
*{
  font-family:微軟正黑體;  
}
 

.form-control {
	 width: 300px;
  height: 50px;
margin: auto;
  color: #df5334;
  
-webkit-border-radius: 20px;

-moz-border-radius: 20px;

border-radius: 20px;
border: 2px solid;
border-color:green;
}

.submit{
  width: 300px;
  height: 50px;
  margin: auto;
  color: white;
/*  
  background: -webkit-radial-gradient(circle,#FFE53b,#ff6b24);
background: -o-radial-gradient(circle,#FFE53b,#ff6b24);
background: -moz-radial-gradient(circle,#FFE53b,#ff6b24);
background: radial-gradient(circle,#FFE53b,#ff6b24);
*/
background:linear-gradient(to left, #b9ff00,#00d550);
  border-radius: 5px;
  border: 5px;
}
h3{
 margin: 10px;	
  color: #000;
}
h5{
  margin: 20px;
  color: #a3a2a3;
}

h5:hover{
  color: black;
}

#container1{
  
   padding: 10px;
  width: 450px;
  height: 530px;
  border-radius: 10px;
 /*
    background-color: white;
   
  border-top: 30px solid #FFE53B;
   border-right: 30px solid #FFE53B;
   border-bottom: 30px solid #FFE53B;
  
  */
  
  border-image:  linear-gradient(to left, #b9ff00,#00d550) 30 30;
   	border-image:  linear-gradient(to left, #b9ff00,#00d550) 30 30;
    border-image: linear-gradient(#b9ff00,#00d550) 30 30; 
	
	
 
  box-shadow: 0 0px 70px rgba(0, 0, 0, 0.1);
  /*定位對齊*/
  position:relative;   
  margin: auto;
  top: 20px;
  //text-align:center;  
}
.login { 
	width:100%; 
    height:100%; 
   border-radius: 10px;
    background:#fff; 
}
.system_name{
  /*定位對齊*/
  position:relative;   
  margin: auto;
  top: 100px;
  text-align:center; 
}

 .input-icons i { 
			position: absolute; 
		} 
		
		.input-icons { 
			width: 100%; 
			margin-bottom: 5px; 
		} 
		
		.icon { 
			padding: 10px; 
			color: green; 
			min-width: 80px; 
			text-align: center; 
		} 
		
		.input-field { 
			width: 100%; 
			padding: 5px; 
			text-align: center; 
		} 


</style>
<body><?php include_once ("back.php"); ?>
		 
	 
&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<div class="container">
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    <div class="item">
	 <br><br><br> 
	<img src="images/021.png"style="width:600px;  "/>
	
	</div>     &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
	&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
	&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 
    <div class="item-left">
	   
    
  
    <div class="login_page">
      <div id="container1">

        <div class="login">  
          <br>
          <h3><b>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  系統登入</b></h3>

          <form method="post" action="login_connect.php" id="login_index"  >
           
				<div class="form-group mt-5 input-icons">
					<!--<i class="fa fa-key icon"> </i> -->
			<input type="text" class="form-control "  placeholder="帳號" name="account" id="login_input" required> 
                    				  
				</div>
				<div class="form-group mt-4">
					<input type="password" class="form-control" placeholder="密碼" name="passwd" id="login_input" required>
				</div>
				<div class="form-group mt-4">
				<center><button type="submit" class="submit"   >登入</button> 
				</div>
				 
          </form>  

          
          
        </div><!-- login end-->
      </div><!-- container1 end-->
    </div><!-- login_page end-->
    
     
  	</div>
</div>
 
		 			
		 
</body>
 
</html>
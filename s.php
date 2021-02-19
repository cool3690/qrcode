<!DOCTYPE html>
<html lang="en">
<head>
  
	 
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.9.2/i18n/jquery.ui.datepicker-zh-TW.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/dmuy/MDTimePicker/mdtimepicker.css">
	<script src="https://cdn.jsdelivr.net/gh/dmuy/MDTimePicker/mdtimepicker.js"></script>	
		<script>
		$( function() {
			$( ".sdate" ).datepicker({
				changeMonth:true,
				changeYear:true,
				dateFormat:"yymmdd"	
			});
		} );
		$(document).ready(function(){
			$('.stime').mdtimepicker({ 
				format: 'hh:mm' 
			}).data('mdtimepicker');
		});
	</script>	
</head>
<body>
<div class="container">
	 

	<?php
		if(isset($_POST['submit'])){
			 
			$cle_date=$_POST['sdate'];
			$cle_time=$_POST['stime'];
			 
			$app_qty=$_POST['seat'];
			 
					
			require 'db_login.php';	
			 
						 # 將檔案移至指定位置
					 
						 
							ini_set('date.timezone','Asia/Taipei');	
							$sdate = date("Y/m/d");
							$sql = "INSERT INTO `clelist`( `cle_date`, `cle_time`, `cle_seat`) VALUES ('$cle_date', '$cle_time', '$cle_seat')";
							// echo $sql;
							if (mysqli_query($db, $sql)) {	
								echo '<div class="alert alert-info alert-dismissible">
										<button type="button" class="close" data-dismiss="alert">&times;</button>
										<i class="far fa-check-circle fa-lg pr-3" style="color:red;"></i><strong>新增成功</strong><br>
									  </div>';
						}
					 
				 

		}
			
?>	  
	  <form action="clelist.php" method="post" enctype="multipart/form-data">
		<div class="form-group row">		

		  <label>date & time：</label>
			<div class="row">	
				<div class="col-sm-12 col-md-12 col-lg-6 mt-2 mb-2">
					<input type="text" class="form-control sdate" name="sdate" required>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6 mt-2 mb-2">
					<input type="text" class="form-control stime" name="stime" required>
				</div>	
			</div>
				<div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-6 mt-2 mb-2">
		  <label>剩餘座位</label>
		   <input type="text" class="form-control" name="seat"  value="<?=$_POST['sdate']?>">
		</div>
		</div>	
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    
  </form>
  </div>
</body>
</html>

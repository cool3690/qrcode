<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once ("head.php"); ?>		
</head>
<body>
	<style>
		body {
			 
		}
		#searchInput{

-webkit-border-radius: 20px;

-moz-border-radius: 20px;

border-radius: 20px;
border-color:green;
}
	</style>
	<script>
		$(document).ready(function(){
			$("#searchInput").on("keyup", function() {
				var value = $(this).val().toLowerCase();
				$("#searchTable tr").filter(function() {
					$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
				});
			});
		});	
	</script>	
	
	<?php include_once ("navbar2.php"); ?>
	<div class="container" style="padding-bottom:100px;">
	
		<div class="row mt-5 mb-5">	
			<div class="col-12 col-xs-12 col-sm-12 col-md-3 col-lg-4"></div>
			<div class="col-12 col-xs-12 col-sm-12 col-md-3 col-lg-4">
				<h3 class=" d-flex  justify-content-center"><span class="backstage_title">聯單紀錄</span></h3>
			</div>
			<div class="col-12 col-xs-12 col-sm-12 col-md-3 col-lg-4">
				<input class="form-control" id="searchInput" type="text" placeholder="搜尋">
			</div>
		</div>
		<?php
			require 'db_login.php';	
?>			

	<?php		//設定分頁------------------------------------------------------------------------------
			$sql = "SELECT * FROM clelist order by clelist_id DESC";
			$query_sql = mysqli_query($db, $sql);
			$count_data = mysqli_num_rows($query_sql); //計算總數
			$per_num = 10; //每頁顯示筆數
			$totalpage = ceil($count_data/$per_num); //取得整數
			if (!isset($_GET["page"])){ 	
				$page=1; //設定起始頁
			} else {
				$page = intval($_GET["page"]); //確認頁數
			}
			$stacle_page = ($page-1) * $per_num; //每頁開始序號
		
			$result = mysqli_query($db, $sql.' LIMIT '.$stacle_page.', '.$per_num);
			$i=($page-1)*10+1;
			
			//------------------------------------------------------------------------------
			$result2 = mysqli_query($db, "SELECT * FROM clelist order by clelist_id DESC");
			$j=1;
		$file_dir2='temp/';
			$file_dir='images/photo/';
			echo "
				<table class='table table-bordered text-center max '>
					<tr class='table-active '>
						<th class='text-center align-middle '  > 聯單編號<hr size='1' noshade='noshade' style='border:1px #cccccc dashed;'/>清除者管編</th>
						
						<th class='text-center align-middle '  > 實際清運時間<hr size='1' noshade='noshade' style='border:1px #cccccc dashed;'/>頭車車號<hr size='1' noshade='noshade' style='border:1px #cccccc dashed;'/>尾車車號</th>
						<th class='text-center align-middle '  > 是否過磅<hr size='1' noshade='noshade' style='border:1px #cccccc dashed;'/>是否確認 </th>
						<th class='text-center align-middle '  > 不接受原因</th>
						<th class='text-center align-middle' > 廢棄物ID<hr size='1' noshade='noshade' style='border:1px #cccccc dashed;'/>廢棄物重量</th>
						<th class='text-center align-middle' style=' width:100px;'> 車頭照片</th>
						<th class='text-center align-middle ' style=' width:100px;'> 車尾照片</th>
						<th class='text-center align-middle' style='width:100px;'> QR-code紀錄</th>
					</tr>";

				while ($row = mysqli_fetch_array($result)) {
					$tmp=explode(":",$row['cle_date']); 
					 
					echo '
						<tbody id="searchTable">
						<tr>
							<td class="text-center align-middle" style="line-height:30px;"> 
								'.$row["DlistNO"].'<br>'.$row["cle_no"].'
							</td>
							 
							<td class="text-center align-middle" style="line-height:30px;"> 
								'.$row["cle_date"].'<br>
								'.$row["c_cle_car_no_head"].'<br>
								'.$row["c_cle_car_no_tail"].'
							</td>
							<td class="text-center align-middle" style="line-height:30px;"> 
								'.($row["C_weigh"]=="1"?"是":"否").'<br>
								'.($row["Cle_confirm"]=="1"?"是":"否").'
							</td>
							<td class="text-center align-middle" style="line-height:30px;"> 
								'.$row["Cle_back"].'
							</td>
							<td class="text-center align-middle" style="line-height:30px;"> 
								'.$row["WasteId"].'<br>
								'.$row["app_qty"].'
							</td>
							<td class="text-center align-middle" style="line-height:30px;"> 
								<a data-fancybox="gallery" href="'.$file_dir.''.$row['head_photo'].'">
									<img class="img-fluid text-center mb-3" src="'.$file_dir.''.$row['head_photo'].'" width="100%">
								</a>
							</td>
							<td class="text-center  align-middle" style="line-height:30px;"> 
								<a data-fancybox="gallery" href="'.$file_dir.''.$row['tail_photo'].'">
									<img class="img-fluid text-center mb-3" src="'.$file_dir.''.$row['tail_photo'].'" width="100%">
								</a>
							</td>';
							?>
							 <td class='text-center align-middle' style='line-height:30px;'> 
								 <a href ='<?=$file_dir2.$tmp[0].$tmp[1].".png"?>'    data-fancybox>	
										<img src='<?=$file_dir2.$tmp[0].$tmp[1].".png"?>'  class="img-fluid text-center" width='50%'>		
									</a>
								 
							</td>
						<tr>
					<?php	
					$i++;
				}
				echo "</tbody>
				</table>";

			
				//下方分頁程式------------------------------------------------------------------------------------------
				$spage=$page-1;
				$epage=$page+1;
				
					echo '
					<div>
						<ul class="pagination justify-content-center mt-5">
							<li class="page-item"><a class="page-link" href="?page=1"style="  color:#00d550;"><<</a></li>
				';
							
							if($spage<=1){
								echo '<li class="page-item disabled"><a class="page-link" href="?page='.$spage.'"style="color:#00d550;"><</a></li>';
							}else{    		
								echo '<li class="page-item" style="color:#00d550;"><a class="page-link" href="?page='.$spage.'"><</a></li>';
							}
							
							for( $page_loop=1 ; $page_loop<=$totalpage ; $page_loop++ ) {
								if ( $page-3 < $page_loop && $page_loop < $page+3 ) {
									if($page_loop==$page){
										echo '<li class="page-item active"><a class="page-link" href="?page='.$page_loop.'"style="background-color:green; color:white;">'.$page_loop.'</a></li>';
									}else{
										echo '<li class="page-item" ><a class="page-link" href="?page='.$page_loop.'"style="color:#00d550;">'.$page_loop.'</a></li>';
									}
								}
							}
							
							if($epage>=$totalpage){
								echo '<li class="page-item disabled" ><a class="page-link" href="?page='.$epage.'"style="color:#00d550;">></a></li>';
							}else{    		
								echo '<li class="page-item" ><a class="page-link" href="?page='.$epage.'"style="color:#00d550;">></a></li>';
							}
				echo '
							<li class="page-item"><a class="page-link" href="?page='.$totalpage.'"style="color:#00d550;">>></a></li>
						</ul>
					</div>
				';
				//-------------------------------------------------------------------------------------------------------------			
			mysqli_close($db);	
		?>
	</div>
	<?php //include_once ("footer2.php"); ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>聯單申報</title>
	<?php include_once ("head.php"); 
	include "./phpqrcode.php";
	
	 ?>	
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.9.2/i18n/jquery.ui.datepicker-zh-TW.min.js"></script>
	<script type="text/javascript" src="qrcode/lib/js/qrcanvas.js"></script>
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
<script>
$(document).ready(function(){
  $("#submit").click(function(){
    $("#qr").show();
  });
  
});
</script>
<style>
		body {
			 
			 
		}
#searchInput{
-webkit-border-radius: 20px;

-moz-border-radius: 20px;

border-radius: 20px;
border-color:green;
}
.switch {
  position: relative;
  display: inline-block;
  width: 90px;
  height: 34px;
}

.switch input {display:none;}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #aaa;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #ff6b24;
}

input:focus + .slider {
  box-shadow: 0 0 1px #ff6b24;
}

input:checked + .slider:before {
  -webkit-transform: translateX(55px);
  -ms-transform: translateX(55px);
  transform: translateX(55px);
}

/*------ ADDED CSS ---------*/
.on
{
  display: none;
}

.on, .off
{
  color: white;
  position: absolute;
  transform: translate(-50%,-50%);
  top: 50%;
  left: 50%;
  font-size: 10px;
  font-family: Verdana, sans-serif;
}

input:checked+ .slider .on
{display: block;}

input:checked + .slider .off
{display: none;}

/*--------- END --------*/

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;}
   /*-----------start--------*/
   
  	.radio-label {
  width:95px;
 // left:10px;
  margin-bottom: 1em;
  text-align: center;
}

.radio-pillbox {
  height: 50px;
  width:290px;
  font-size: 1em;
  border: 0;
  //border-radius: 75px;
  overflow: hidden;
  /*
  background: -webkit-linear-gradient(  100deg,  #0ef49b 0%,  #d2dc69 30%,  #faa04b 70%,  #ff5a64 100%  );
  background: -moz-linear-gradient(  100deg,  #0ef49b 0%,  #d2dc69 30%,  #faa04b 70%,  #ff5a64 100%  );
  background: -o-linear-gradient(  100deg,  #0ef49b 0%,  #d2dc69 30%,  #faa04b 70%,  #ff5a64 100%  );
  background: -ms-linear-gradient(  100deg,  #0ef49b 0%,  #d2dc69 30%,  #faa04b 70%,  #ff5a64 100%  );
  background: linear-gradient(  100deg,  #0ef49b 0%,  #d2dc69 30%,  #faa04b 70%,  #ff5a64 100%  );
  */
  background:#fff;
   color: #000;
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
}

.radio-pillbox radiogroup {
  height: 50px;
  width:  95px;
  display: flex;
}

.radio-pillbox radiogroup div {
  width:  95px;
  position: relative;
}

.radio-pillbox radiogroup div input {
  -webkit-appearance: inherit;
  width:  95px;
  height: 50px;
  transition: background 300ms ease-out;
  margin: 0;
  outline: 0;
  border-left: 1px solid rgba(0, 0, 0, 0.05);
}

.radio-pillbox radiogroup div input:checked {
   color: #fff;
  border: none;
 // box-shadow: inset 0 10px 50px rgba(25, 25, 25, 0.1);
  
 box-shadow: inset 0 10px 50px 0px #FFE53B, 
            inset 0 66px 15px 0px #FF6b24,
            inset 0 99px 5px 0px #FF6b24;
			 
}

.radio-pillbox radiogroup .first {
 // border-radius: 75px 0 0 75px;
 // border-left: none;
}

.radio-pillbox radiogroup .last { 
//border-radius: 0 75px 75px 0;
 }

.radio-pillbox radiogroup div label {
	 
  position: absolute;
  top: 50%; /* top plus line-height centers text */
  line-height: 0;
  left: 0;
  width: 100px;
  height: 50px;
  text-align: center;
}
.radio-pillbox radiogroup div label:after+ input:checked  {
	 color: #fff;
  
}
.radio-pillbox input:focus { outline: 0;  color: #fff;}

.radio-pillbox label:after {
  content: "\2714";
  display: inline-block;
  -webkit-transform: scale(0);
  -moz-transform: scale(0);
  -o-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
    color: #fff;
  -webkit-transition: margin 250ms cubic-bezier(0.6, -0.28, 0.735, 0.045) 100ms,  -webkit-transform 250ms cubic-bezier(0.895, 0.03, 0.685, 0.22);
  -moz-transition: margin 250ms cubic-bezier(0.6, -0.28, 0.735, 0.045) 100ms,  -moz-transform 250ms cubic-bezier(0.895, 0.03, 0.685, 0.22);
  -o-transition: margin 250ms cubic-bezier(0.6, -0.28, 0.735, 0.045) 100ms,  -o-transform 250ms cubic-bezier(0.895, 0.03, 0.685, 0.22);
  transition: margin 250ms cubic-bezier(0.6, -0.28, 0.735, 0.045) 100ms,  transform 250ms cubic-bezier(0.895, 0.03, 0.685, 0.22);
 
}
 
.radio-pillbox  input:checked + label:after {
/*	 
  margin-left: 12px;
  
  -webkit-transform: scale(1.25);
  -moz-transform: scale(1.25);
  -o-transform: scale(1.25);
  -ms-transform: scale(1.25);
  transform: scale(1.25);
  */
 
  -webkit-transition: -webkit-transform 500ms  cubic-bezier(0.175, 0.885, 0.32, 1.275) 250ms,  margin 500ms,  -webkit-transform 500ms cubic-bezier(0.175, 0.885, 0.32, 1.275) 250ms;
  -moz-transition: -moz-transform 500ms cubic-bezier(0.175, 0.885, 0.32, 1.275)  250ms,  margin 500ms,  -moz-transform 500ms cubic-bezier(0.175, 0.885, 0.32, 1.275) 250ms;
  -o-transition: -o-transform 500ms cubic-bezier(0.175, 0.885, 0.32, 1.275)  250ms,  margin 500ms,  -o-transform 500ms cubic-bezier(0.175, 0.885, 0.32, 1.275) 250ms;
  transition: transform 500ms cubic-bezier(0.175, 0.885, 0.32, 1.275) 250ms,  margin 500ms, transform 500ms cubic-bezier(0.175, 0.885, 0.32, 1.275) 250ms;
  
}
 
.main {
    width: 50%;
    margin: 50px auto;
}

/* Bootstrap 4 text input with search icon */

.has-search .form-control {
    padding-left: 2.375rem;
}

.has-search .form-control-feedback {
    position: absolute;
    z-index: 2;
    display: block;
    width: 2.375rem;
    height: 2.375rem;
    line-height: 2.375rem;
    text-align: center;
    pointer-events: none;
    color: #000;
}
	</style>
<body><?php	include_once ("navbar.php"); ?>
<div class="container">
	
	<?php
		if(isset($_POST['submit'])){
			// $DlistNO=$_POST['DlistNO'];
			$DlistNO='E560119710901311';
			$rt_no=$_POST['rt_no'];
			$rec_date=$_POST['sdate'].'_'.$_POST['stime'];
			$cle_car_no_head=$_POST['cle_car_no_head'];
			$cle_car_no_tail=$_POST['cle_car_no_tail'];
			$weigh=$_POST['weigh'];
			$Confirm=$_POST['Confirm'];
			$back=$_POST['back'];
			$ActMode=$_POST['ActMode'];
			$RecType=$_POST['radio-group'];
			$WasteId=$_POST['WasteId'];
			$app_qty=$_POST['app_qty'];
			//echo $RecType;
			   /////////////
			   //GPS：
			   	ini_set('date.timezone','Asia/Taipei');	
							 //$tt=str_insert($_POST['sdate'],4,"~");
							 //$sdate=str_insert($tt,7,"~");
							 $sdate="2021~01~06";
							$stime= str_replace(":","~",$_POST['stime']) ;
		//----- 定義要擷取的網頁地址
		$url = 'http://211.23.243.109:6060/GetGpsHistoryTrack/100?DeviceId=1906270011&BeginTime='.$sdate.'~'.$stime.'~00&EndTime='.$sdate.'~'.$stime.'~59'; 
		$GPS="";
		$GPS2="";
		
		
		//////
		 $handle = curl_init($url);
		$httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
if($httpCode == 404) {
	 $GPS="N"; 
			$GPS2="N";
}
else{
	 $json=file_get_contents($url);
		$arr= json_decode($json, true);
		$arr2 =$arr["GpsHistoryTrackInfo"];
		$count=count($arr2)-1;
		if($count<0){
			$GPS="N"; 
			$GPS2="N";
		}
		 else{
			$GPS="Y"."\n".'緯度：'.$arr["GpsHistoryTrackInfo"][$count]["la"]."\n".'經度：'.$arr["GpsHistoryTrackInfo"][$count]["lo"];
			 $GPS2="Y"."<br>".'緯度：'.$arr["GpsHistoryTrackInfo"][$count]["la"]."<br>".'經度：'.$arr["GpsHistoryTrackInfo"][$count]["lo"];
		 }
}
		
		
		
		////
		
	  
		 
		 
	 //////////////////////////GPS finish
	 $time = explode(":",$_POST['stime']);
			  $url2= 'http://211.23.243.109:6061/vFile/KLE-5592/'.$_POST['sdate'].'/'. $time[0].'/CH1/Thumbnail/KLE-5592_'.$_POST['sdate'].'_'.$time[0].$time[1].'_CH1.jpg';
			  
			 $handle = curl_init($url2);
			 $pic="N";


/* Check for 404 (file not found). */
$httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
if($httpCode == 404) {
	 $pic="N";
    /* Handle 404 here. */
}
else{
	 $pic="Y";
	 curl_setopt($handle,  CURLOPT_RETURNTRANSFER, TRUE);

/* Get the HTML or whatever is linked in $url. */
$response = curl_exec($handle);
}
curl_close($handle);
			 ////////////////pic finish
			   
			      $FILE_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;
    
    //html PNG location prefix
    $FILE_WEB_DIR = 'temp/';

   // include "lib/full/qrlib.php";    
    
    //ofcourse we need rights to create temp dir
    if (!file_exists($FILE_TEMP_DIR))
        mkdir($FILE_TEMP_DIR);
	 
	$textData =  $textData = "收受者管編:".$DlistNO."\n"."進廠時間:".$rec_date."\n"."頭車車號:".$cle_car_no_head.
	"\n"."頭尾車號:".$cle_car_no_tail."\n"."廢棄物ID：".$WasteId."\n"."廢棄物重量：".$app_qty."\n"."GPS：".$GPS."\n"."圖片：".$pic."\n".
	"不接受原因: ".$back;
    if (isset($_REQUEST['data']) && (trim($_REQUEST['data']) != '')) { 
        $textData = $_REQUEST['data'];
    }
 
	 $time = explode(":",$_POST['stime']);
	 $pngFilename = $FILE_TEMP_DIR.$_POST['sdate'].'_'.$time[0].$time[1].'.png';
    QRcode::png($textData, $pngFilename, 'M', 4, 2);    
    
   // echo '<img src="'.$FILE_WEB_DIR.basename($pngFilename).'" /> ';
   ?>
  
		 <center>	   <div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-6 mt-2 mb-2">
		  <img src="images/03.png" width="35" height="35" />&emsp;&emsp;<label>申報紀錄</label>
			<div class="row">	
				<div class="col-sm-12 col-md-12 col-lg-6 mt-2 mb-2" style="text-align:left; ">
					<?php echo "收受者管編:".$DlistNO."</br>"."進廠時間:".$rec_date."</br>"."頭車車號:".$cle_car_no_head.
	"</br>"."頭尾車號:".$cle_car_no_tail."</br>"."廢棄物ID：".$WasteId."</br>"."廢棄物重量：".$app_qty."</br>"."GPS：".$GPS2."</br>"."圖片：".$pic."</br>".
	"不接受原因: ".$back;;?> 
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6 mt-2 mb-2">
					<img src="<?=$FILE_WEB_DIR.basename($pngFilename)?>" /> 
				</div>	
			</div>	
		</div>	</center>
			    
		<?php	   
			   
			   ////////////////////////
   
			// echo '聯單編號：'.$DlistNO.'<br>';
			// echo '收受者管編：'.$rt_no.'<br>';
			// echo '進廠時間：'.$rec_date.'<br>';
			// echo '頭車車號：'.$cle_car_no_head.'<br>';
			// echo '尾車車號：'.$cle_car_no_tail.'<br>';
			// echo '是否過磅：'.$weigh.'<br>';
			// echo '是否確認：'.$Confirm.'<br>';
			// echo '是否申報：'.$ActMode.'<br>';
			// echo '收受者類型：'.$RecType.'<br>';
			// echo '不接受原因：'.$back.'<br>';
			// echo '廢棄物ID：'.$WasteId.'<br>';
			// echo '廢棄物重量：'.$app_qty.'<br>';
			
			
			require 'db_login.php';	
			$str=$_POST['sdate'].'_'.$time[0].$time[1].'.png';
			$sql = "INSERT INTO `rtlist`(`DlistNO`, `rt_no`, `rec_date`, `cle_car_no_head`, `cle_car_no_tail`, `weigh`, `Confirm`, `ActMode`, `RecType`, `back`, `WasteId`, `app_qty`, `qrcode`) VALUES ('$DlistNO', '$rt_no', '$rec_date', '$cle_car_no_head', '$cle_car_no_tail', '$weigh', '$Confirm', '$ActMode', '$RecType', '$back', '$WasteId', '$app_qty','$str')";
			// echo $sql;
			if (mysqli_query($db, $sql)) {	
				echo '<div class="alert alert-info alert-dismissible">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<i class="far fa-check-circle fa-lg pr-3" style="color:red;"></i><strong>新增成功</strong><br>
					  </div>';
			}
		}


// post
// $url = "http://example.com/request/post/json";    
// $data = json_encode(["foo" => "bar"]);
// $curl = curl_init($url);
// curl_setopt($curl, CURLOPT_HEADER, false);
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-type: application/json"));
// curl_setopt($curl, CURLOPT_POST, true);
// curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
// curl_exec($curl);
// curl_close($curl);

// get
// $data = json_decode(file_get_contents('php://input'), true);

// $json = array();
  // $json = array("status" => 1, "msg" => "Request method not accepted");

// header('Content-type: application/json;charset=utf-8');
// echo json_encode($data);

?>
  <h2 class="mt-4 mb-2 text-center">廢棄物電子聯單申報系統</h2>
   
  <form action="rtlist.php?status_title=1" method="post"> 
    <div class="form-group row">		
	<!--
		<div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-3"></div>
		<div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-6 mt-2 mb-2">
		  <label>聯單編號：</label>
		  <input type="text" class="form-control" name="DlistNO">
		</div>	
		<div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-3"></div>
		-->
		<div class="col-12 col-xs-12 col-sm-4  col-md-10 col-lg-10">
		 	 <hr width="80%"  align="right"  style="border: 1px solid #C0C2CC; left:20px;">
		</div>
		<div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-4">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<b><font size="4px">進場資料</b></font></div> 
	 
	    	
		 
		<div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-6 mt-2 mb-2">
		  <label>收受者管編：</label>
		  <input type="text" class="form-control" name="rt_no" id="rt_no"  onchange="showSite(this.id)">
		</div>	
		<div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-4"></div> 
		<div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-6 mt-2 mb-2">
		  <label>進廠時間：</label>
			<div class="row">	
				<div class="col-sm-12 col-md-12 col-lg-6 mt-2 mb-2">
		 
				 
					  <div class="input-group">
						 <div class="input-group-append">
						  <button class="btn btn-secondary" type="button">
						 <i class="fa fa-calendar" aria-hidden="true"></i>
						  </button>
						</div>
							<input type="text" class="form-control sdate " name="sdate"  id="sdate" required>
					   
					  </div> 
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6 mt-2 mb-2">
				 <div class="input-group">
						 <div class="input-group-append">
						  <button class="btn btn-secondary" type="button">
						 <i class="fa fa-clock" aria-hidden="true"></i>
						  </button>
						</div>
						<input type="text" class="form-control stime" name="stime"  id="stime" required>
					   
					  </div> 
				 
				</div>	
			</div>	
		</div>	
		<div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-4"></div> 
		<div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-6 mt-2 mb-2">
			<div class="row">
				<div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-6 mt-2 mb-2" >
					<label>頭車車號：</label>
					<input type="text" class="form-control" name="cle_car_no_head" id="cle_car_no_head" >
				</div>
				<div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-6 mt-2 mb-2">
					<label>尾車車號：</label>
					<input type="text" class="form-control" name="cle_car_no_tail" id="cle_car_no_tail">
				</div>	
			</div>	
		</div>	
	  
	<div class="col-12 col-xs-12 col-sm-4  col-md-10 col-lg-10">
		 	 <hr width="80%"  align="right"  style="border: 1px solid #C0C2CC; left:20px;">
		</div>
		
		<div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-4">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<b><font size="4px">事業端確認</b></font></div>
		
		<div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-6 mt-2 mb-2">
			<div class="row">
				<div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-6 mt-2 mb-2">
					 過磅：
					  <label class="switch"><br>
			  <input type="checkbox" id="weigh" name="weigh"  checked>
			   
			  <span class="slider round">
			  <span class="on">是</span>
			  <span class="off">否</span>
			  </span>
			</label>
					 		
				</div>
				<div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-6 mt-2 mb-2">
					 確認：
					 
					 <label class="switch"><br>
			  <input type="checkbox" id="Confirm" name="Confirm"  checked>
			   
			  <span class="slider round">
				<span class="on">是</span>
				  <span class="off">否</span>
				  </span>
			</label>			
				</div>	
			</div>	
		</div>
		
		
		<div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-4"></div> 
		
		<div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-6 mt-2 mb-2">
			<div class="form-group">
			  <label for="comment">不接受原因：</label>
			  <textarea class="form-control" rows="5" id="comment" name="back"></textarea>
			</div>	
		</div>
		
	 	 
	<div class="col-12 col-xs-12 col-sm-4  col-md-10 col-lg-10">
		 	 <hr width="80%"  align="right"  style="border: 1px solid #C0C2CC; left:20px;">
		</div>
  
		 
		<div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-4">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<b><font size="4px">廢棄物資料</b></font></div>	
		<div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-6 mt-2 mb-2">
			<div class="row">
				<div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-5 mt-2 mb-2" style="top:10px;"> 
				  <label>申報：</label>
				  
				  
				  
					<label class="switch"><br>
					  <input type="checkbox" id="ActMode" name="ActMode" checked>
					   
					  <span class="slider round">
						<span class="on">是</span>
						 <span class="off">否</span>
						  </span>
					</label>	
				   
					
				</div>
				<div class="col-12 col-xs-12 col-sm-6 col-md-6 col-lg-7 mt-2 mb-2">
				 
									 
						<div class="radio-pillbox"id="RecType" name="RecType">
			  <radiogroup >
				<div>
				  <input type="radio" name="radio-group" id="T" value="T" class="first"  checked>
				  <label for="T" class="radio-label">處理</label>
				  </input>
				</div>
				<div>
				  <input type="radio" name="radio-group" id="R" value="R">
				  <label for="tricky">&emsp;再利用</label>
				  </input>
				</div>  
				
				<div>
				  <input type="radio" name="radio-group" id="FT" value="FT" class="last">
				  <label for="FT">&emsp;最終處置</label>
				  </input>
				</div>
			  </radiogroup>
			</div>
	
					 
				</div>	
			</div>	
		</div>	    
		<div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-4"></div>		
		 
		<div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-6 mt-2 mb-2">
			<div class="row">
				<div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-6 mt-2 mb-2">
				  <label>廢棄物ID：</label>
				  <input type="text" class="form-control" name="WasteId" id="WasteId">
				</div>
				<div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-6 mt-2 mb-2">
				  <label>廢棄物重量：</label>
				  <input type="text" class="form-control" name="app_qty" id="app_qty">
				</div>	
			</div>	
		</div>	    
		<div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-3">
    </div>
	<div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-12 text-center mt-5">
    <button type="submit" name="submit" id="submit" class="btn"  style='background-color: #FF6B24;color:white;'  >確認</button>
    </div>
	 
  </form>
</div>

</body>
</html>

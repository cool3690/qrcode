<!DOCTYPE html>
<html lang="en">
<head>
  <title>廢棄物電子聯單申報系統</title>
	<?php include_once ("head.php"); ?>		
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
				dateFormat:"yy/mm/dd"	
			});
		} );
		$(document).ready(function(){
			$('.stime').mdtimepicker({ 
				format: 'hh:mm' 
			}).data('mdtimepicker');
		});
	</script>	
	<script>
 
function showSite(str,str2)
{ 
 var result = document.getElementsByClassName('customRadio1')[0].checked ? 'yes' : 'no'
 alert(result);
str=document.getElementById('sdate').value;
 str2=document.getElementById('c_cle_car_no_head').value;
  
    if (str=="" ||str2=="")
    {
        document.getElementById("GPS").innerHTML="";
        return;
    } 
    if (window.XMLHttpRequest)
    {//
        // IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
        xmlhttp=new XMLHttpRequest();
    }
    else
    {
        // IE6, IE5 浏览器执行代码
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
			//alert(xmlhttp.responseText);
          //  document.getElementById('GPS').innerHTML=xmlhttp.responseText;
        }
    }//+"-"+str2
    xmlhttp.open("GET","search_sql.php?q="+str+"_"+str2,true);
    xmlhttp.send();
}
function showAns(a)
{    
var result=document.getElementById('customRadio1').checked;
//alert(result);
 a=document.getElementById('DlistNO').value;
 
  
  var words="";
    if (a=="")
    {
       //document.getElementById("GPS").innerHTML="";
        return;
    } 
    if (window.XMLHttpRequest)
    {//
        // IE7+, Firefox, Chrome, Opera, Safari  
        xmlhttp=new XMLHttpRequest();
    }
    else
    {
        // IE6, IE5  
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {    words =xmlhttp.responseText.split("\n");
			 
           var dt = words[1].split("_");
		  //document.getElementById('stime').innerHTML=words[1];
		 
		  document.forms['myform']['cle_no'].value =words[0];
		  document.forms['myform']['sdate'].value =dt[0];
		   document.forms['myform']['stime'].value =dt[1];
		  document.forms['myform']['c_cle_car_no_tail'].value =words[2];
		  document.forms['myform']['c_cle_car_no_head'].value =words[3];
		   document.forms['myform']['WasteId'].value =words[4];
		   document.forms['myform']['app_qty'].value =words[5];
		   document.forms['myform']['GPS'].value=words[6]+"__ "+words[7];
		    
		    document.forms['myform']['tail_photo'].value ="787-VG@HAA-7679尾-1124.jpg";
		  document.forms['myform']['head_photo'].value ="787-VG@HAA-7679頭-1124.jpg";
		
 
        }
    }//+"-"+str2
    xmlhttp.open("GET","sql_rlist.php?q="+a,true);
    xmlhttp.send();
}
</script>
</head>
<style>
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
  background-color: #00d550;
}

input:focus + .slider {
  box-shadow: 0 0 1px #00d550;
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
		</style>
<body><?php	include_once ("navbar2.php"); ?>
<div class="container">
	

	<?php
		if(isset($_POST['submit'])){
			$DlistNO=$_POST['DlistNO'];
			$cle_no = $_SESSION['cle_no'];
			$cle_date=$_POST['sdate'].'_'.$_POST['stime'];
			$c_cle_car_no_head=$_POST['c_cle_car_no_head'];
			$c_cle_car_no_tail=$_POST['c_cle_car_no_tail'];
			$C_weigh=$_POST['C_weigh'];
			$Cle_confirm=$_POST['Cle_confirm'];
			$Cle_back=$_POST['Cle_back'];
			$WasteId=$_POST['WasteId'];
			$app_qty=$_POST['app_qty'];
			// echo '聯單編號：'.$DlistNO.'<br>';
			// echo '清除者管編：'.$cle_no.'<br>';
			// echo '實際清運時間：'.$cle_date.'<br>';
			// echo '頭車車號：'.$c_cle_car_no_head.'<br>';
			// echo '尾車車號：'.$c_cle_car_no_tail.'<br>';
			// echo '是否過磅：'.$C_weigh.'<br>';
			// echo '是否確認：'.$Cle_confirm.'<br>';
			// echo '不接受原因：'.$Cle_back.'<br>';
			// echo '廢棄物ID：'.$WasteId.'<br>';
			// echo '廢棄物重量：'.$app_qty.'<br>';
					
			require 'db_login.php';	
			// echo $sql;
			
			/////////////////////////////////////
			$handle = opendir('110/1091215/'); //當前目錄
			while (false !== ($file = readdir($handle))) { //遍歷該php檔案所在目錄
			list($filesname,$kzm)=explode(".",$file);//獲取副檔名
			if( $kzm=="jpg" or $kzm=="JPG") { //檔案過濾
			if (!is_dir('./'.$file)) { //資料夾過濾
			$array[]=$file;//把符合條件的檔名存入陣列
			}
			}
			}
			$FD='110/1091215/';
			$file_dir='images/photo/';
			for($i=0;$i< count($array);$i++){
				if($array[$i]==$c_cle_car_no_tail."@".$c_cle_car_no_head."頭-1124.jpg"){
					 if ( copy($FD.$array[$i], $file_dir.$array[$i]) ){
						 $head_photo = $c_cle_car_no_head;
						 $head_photo =$c_cle_car_no_tail."@".$c_cle_car_no_head."頭-1124.jpg";
						 $tail_photo = $c_cle_car_no_tail."@".$c_cle_car_no_head."尾-1124.jpg";
						 	$file_dir='images/photo/';
				         $fileList = glob($file_dir.'*');
						 ini_set('date.timezone','Asia/Taipei');	
							$sdate = date("Y/m/d");
							/**/
							$sql = "INSERT INTO `clelist`(`DlistNO`, `cle_no`, `cle_date`, `c_cle_car_no_head`, `c_cle_car_no_tail`, `C_weigh`, `Cle_confirm`, `Cle_back`, `WasteId`, `app_qty`, `head_photo`, `tail_photo`) VALUES ('$DlistNO', '$cle_no', '$cle_date', '$c_cle_car_no_head', '$c_cle_car_no_tail', '$C_weigh', '$Cle_confirm', '$Cle_back', '$WasteId', '$app_qty', '$head_photo', '$tail_photo')";
							
							
							// echo $sql;
							if (mysqli_query($db, $sql)) {	
								echo '<div class="alert alert-info alert-dismissible">
										<button type="button" class="close" data-dismiss="alert">&times;</button>
										<i class="far fa-check-circle fa-lg pr-3" style="color:red;"></i><strong>新增成功</strong><br>
									  </div>';
						}
					 }
				
				}
			}
			echo $c_cle_car_no_tail."@".$c_cle_car_no_head."頭-1124.jpg";
			echo $array[5];
			
			/////////////////////////////////
			
			


				  # 檢查檔案是否上傳成功
					// if ($_FILES['head_photo']['error'] === UPLOAD_ERR_OK){
						/*
						 $head_photo = $_FILES['head_photo']['name'];
						 $head_file = $_FILES['head_photo']['tmp_name'];
						 $head_target = $file_dir.''. $_FILES['head_photo']['name'];
						 
						 
						 $tail_photo = $_FILES['tail_photo']['name'];
						 $tail_file = $_FILES['tail_photo']['tmp_name'];
						 $tail_target = $file_dir.''. $_FILES['tail_photo']['name'];
*/
						 # 將檔案移至指定位置
					//	if (move_uploaded_file($head_file, $head_target)) {
						//	move_uploaded_file($tail_file, $tail_target);
							
					 
				//}

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
 


	
				require 'db_login.php';	
				$cle_no = $_SESSION['cle_no'];
				$sql = mysqli_query($db, "SELECT * FROM rtlist");	
				$rt_no="";
?>				
			  
	  <h2 class="mt-4 mb-2 text-center">廢棄物電子聯單申報系統</h2>
	  <form  id="myform" name="myform" action="clelist.php?status_title=2" method="post" enctype="multipart/form-data">
	  <div class="left"></div>
	  <div class="container"> 
<div class="form-group row">		&emsp;&emsp;&emsp;&emsp;
		
  <div class="col-12 col-xs-12 col-sm-4  col-md-10 col-lg-11">
		 	 <hr width="75%"   style="border: 1px solid #C0C2CC; left:20px;">
		</div>
			<div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-4">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<b><font size="4px">事業端資料</b></font></div>
			<div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-6 mt-2 mb-2">
			  <label>聯單編號：</label> 
					<select class="form-control" name="DlistNO" id="DlistNO" onchange="showAns(this.id)">
				 <?php
						while ($row = mysqli_fetch_array($sql)) {
							$DlistNO=$row['DlistNO'];	
							$rt_no=$row['rt_no'];			
							echo "<option value='$DlistNO'>".$DlistNO." </option>";
						}
				 
			?>

</select>	
		</div>	
		 
		<div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-4"></div>
		<div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-6 mt-2 mb-2">
		  <label>清除者管編：</label>
		  <input type="text" class="form-control" name="cle_no" id="cle_no" value=" " disabled="disabled">
		    <!--<span id="cle_no"></span>　-->
		</div>	
		<div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-4"></div> 
		<div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-6 mt-2 mb-2">
		  <label>實際清運時間：</label> <!--<span id="stime"></span>-->
		 
			<div class="row">	
				<div class="col-sm-12 col-md-12 col-lg-6 mt-2 mb-2">
					<input type="text" class="form-control sdate" name="sdate" id="sdate" required>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6 mt-2 mb-2">
					<input type="text" class="form-control stime" name="stime"  id="stime" required>
				</div>	
			</div>	
			
		</div>	
		<div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-4"></div>
		<div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-6 mt-2 mb-2">
			<div class="row">
				<div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-6 mt-2 mb-2">
					<label>頭車車號：</label> 
					<input type="text" class="form-control" name="c_cle_car_no_head" id="c_cle_car_no_head"  >
					<!---->
				</div>
				<div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-6 mt-2 mb-2">
					<label>尾車車號：</label> 
					<input type="text" class="form-control" name="c_cle_car_no_tail" id="c_cle_car_no_tail" value="" ><!---->
				</div>	
			</div>	
		</div>	
		<div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-4"></div>
	 
		<div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-6 mt-2 mb-2">
			<div class="row">
				<div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-6 mt-2 mb-2">
			 
			 過磅： <label class="switch"><br>
			  <input type="checkbox" id="customRadio1" name="customRadio1"  checked>
			   
			  <span class="slider round">
			  <span class="on">是</span>
			  <span class="off">否</span>
			  </span>
			</label>
			  
			  	
				</div>
				<div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-6 mt-2 mb-2">
			 
			  確認：<label class="switch"><br>
			  <input type="checkbox" id="customRadio1" name="customRadio1"  checked>
			   
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
			
			
			  <label for="comment">GPS定位:</label>
			<input type="text" class="form-control" name="GPS" id="GPS" value="" >
			   <!-- <div id="GPS"><b>GPS定位……</b></div>-->
			</div>	
		</div> 
		<div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-4"></div>
		
		<div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-6 mt-2 mb-2">
			<div class="form-group">
			  <label for="comment">不接受原因：</label>
			  <textarea class="form-control" rows="5" id="comment" name="Cle_back"></textarea>
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




  <div class="col-12 col-xs-12 col-sm-4  col-md-10 col-lg-10">
		 	 <hr width="80%"  align="right"  style="border: 1px solid #C0C2CC; left:20px;">
		</div>
		<div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-4">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<b><font size="4px">清除端紀錄</b></font></div>
		<div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-6 mt-2 mb-2">
		  <label>車頭照片：</label>
		 <!-- <input type="file" name="head_photo" multiple class="form-control-file border mt-3">-->
			<input type="input" name="head_photo"  class="form-control-file border mt-3" id="head_photo" >
		</div>	
		<div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-4"></div>
		 
		<div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-6 mt-2 mb-2">
		  <label>車尾照片：</label>
			<!--<input type="file" name="tail_photo" multiple class="form-control-file border mt-3">-->
			  <input type="input" name="tail_photo" class="form-control-file border mt-3" id="tail_photo">
		</div>	
		<div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-4"></div>
    </div>
	  </div>
		
	<div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-12 text-center mt-5">
    <button type="submit" name="submit" class="btn "  style='background-color: #00D550; color:white;'>確認</button>
    </div>
  </form>
  </div>
  
</body>
</html>

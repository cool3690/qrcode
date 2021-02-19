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
	</head>
	<body  ><center>
<?php
  
$handle = opendir('110/11001/1091215'); //當前目錄
while (false !== ($file = readdir($handle))) { //遍歷該php檔案所在目錄
list($filesname,$kzm)=explode(".",$file);//獲取副檔名
if( $kzm=="jpg" or $kzm=="JPG") { //檔案過濾
if (!is_dir('./'.$file)) { //資料夾過濾
$array[]=$file;//把符合條件的檔名存入陣列
}
}
}
$FD='110/11001/1091215/';
$file_dir='images/photo/';
 if ( copy($FD.$array[3], $file_dir.$array[3]) )
    {}
?>
<img width="800" height="600" src="<?="110/11001/1091215/".$array[3]?>"/><br>
</body></html>
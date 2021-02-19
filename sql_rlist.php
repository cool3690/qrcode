<?php
require 'db_login.php';
//$q = isset($_GET["q"]) ? intval($_GET["q"]) : '';
 $q =  $_GET["q"] ;
if(empty($q)) {
    echo 'choose';
    exit;
}
 //$report = explode("_", $q);
 
 
//$sql="SELECT * FROM clsm_report where car = '".$report[1]."' and  date = '".$report[0]."'";
 $sql="SELECT * FROM rtlist where DlistNO='".$q."'";
$result = mysqli_query($db,$sql);
    $tt="";
 while($row = mysqli_fetch_array($result))
{
    
	echo $row['rt_no']."\n" ;
    echo $row['rec_date']."\n";
	 echo $row['cle_car_no_head']."\n";
    echo $row['cle_car_no_tail']."\n" ;
  echo $row['WasteId']."\n";
   echo $row['app_qty']."\n" ;
   
     $tt=$row['rec_date'];
      $dt= explode("_",$tt);
     	  
		$ti=substr_replace( $dt[0], "~", 4, 0 );
		$sdate=substr_replace( $ti, "~", 7, 0 );
		  
	 
   $stime= str_replace(":","~",$dt[1]) ;
   $url = 'http://211.23.243.109:6060/GetGpsHistoryTrack/100?DeviceId=1906270011&BeginTime='.$sdate.'~'.$stime.'~00&EndTime='.$sdate.'~'.$stime.'~59'; 
		 
		$json=file_get_contents($url);
		
		
		$arr= json_decode($json, true);
	  
		$arr2 =$arr["GpsHistoryTrackInfo"];
		 
		$count=count($arr2)-1;
		if($count<0){
			echo "無資料";
		}else{
		 
		echo '緯度：'.$arr["GpsHistoryTrackInfo"][$count]["la"]."\n";
		echo '經度：'.$arr["GpsHistoryTrackInfo"][$count]["lo"]."\n";
		}
}  

mysqli_close($db);
?>
<?php
require 'db_login.php';
//$q = isset($_GET["q"]) ? intval($_GET["q"]) : '';
 $q =  $_GET["q"] ;
if(empty($q)) {
    echo '请选择一个网站';
    exit;
}
 $report = explode("_", $q);
 
 
//$sql="SELECT * FROM clsm_report where car = '".$report[1]."' and  date = '".$report[0]."'";
 $sql="SELECT * FROM clsm_report";
$result = mysqli_query($db,$sql);
 /*
echo "<table border='1'> 
 <tr>
<th>地點</th>
<th>時間</th>
 
 
</tr>";
 
while($row = mysqli_fetch_array($result))
{
    echo "<tr>";
	echo "<td>" . $row['place'] . "</td>";
    echo "<td>" . $row['time'] . "</td>";
 
    
   
    
    echo "</tr>";
}
echo "</table>";
 */
 $tm="";
 while($row = mysqli_fetch_array($result))
{
    
echo   $row['place']  ;
    echo   $row['time']  ;
    
  
} echo $tm;
mysqli_close($db);
?>
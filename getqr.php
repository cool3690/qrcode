<?php
  include('qrcode/lib/full/qrlib.php');
    $param = $_GET['param']; // remember to sanitize that - it is user input!
 
  // $param = isset($_GET["param"]) ? intval($_GET["param"]) : '';
	   echo $param ;
	if(empty($param)) {
    echo '请选择';
    exit;
}
 else{
	  $codeText = $param;
    
    // end of processing here
    $debugLog = ob_get_contents();
    ob_end_clean();
    
    // outputs image directly into browser, as PNG stream
    QRcode::png($param);
 }
 //$param="ooj";
    // here DB request or some processing
   
?>
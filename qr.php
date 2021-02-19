<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
  
	<title>QRCODE</title>
	 
</head>
<body>
<?php
  include('phpqrcode/qrlib.php');
     include('phpqrcode/config.php');
    // how to save PNG codes to server
    
    $tempDir = EXAMPLE_TMP_SERVERPATH;
    
    $codeContents = 'This Goes From File';
    
    // we need to generate filename somehow, 
    // with md5 or with database ID used to obtains $codeContents...
    $fileName = '005_file_'.md5($codeContents).'.png';
    
    $pngAbsoluteFilePath = $tempDir.$fileName;
    $urlRelativeFilePath = EXAMPLE_TMP_URLRELPATH.$fileName;
    
    // generating
    if (!file_exists($pngAbsoluteFilePath)) {
        QRcode::png($codeContents, $pngAbsoluteFilePath);
        echo 'File generated!';
        echo '<hr />';
    } else {
        echo 'File already generated! We can use this cached file to speed up site on common codes!';
        echo '<hr />';
    }
    
    echo 'Server PNG File: '.$pngAbsoluteFilePath;
    echo '<hr />';
    $tmp="\\phpqrcode\\temp\\".$fileName;
    // displaying
   // echo '<img src="'.$tmp .'" />';
?>
 
<div class="container">
	 
	 <img src="phpqrcode/tmp/0.png"  style="width:500px;height:500px;">
    
</div>
</body>
</html>
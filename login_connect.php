<?php
	session_start();
	$account = $_POST['account'];
	$passwd = $_POST['passwd'];
	// $passwd_encrypted = $_POST['passwd'];
	
	// include("vendor/MCrypt.php");
	require 'db_login.php';	
	
	// $mcrypt = new MCrypt();
	// $passwd = $mcrypt->encrypt($passwd_encrypted);
	$vendor_cle_sql = mysqli_query($db, "SELECT * FROM vendor_cle where account = '$account' and passwd = '$passwd'");
	$vendor_rt_sql = mysqli_query($db, "SELECT * FROM vendor_rt where account = '$account' and passwd = '$passwd'");
	if (mysqli_num_rows($vendor_cle_sql) > 0) {		
			$_SESSION['vendor']="N";
			$_SESSION['account'] = $account;
			while ($row = mysqli_fetch_array($vendor_cle_sql)) {	
				$_SESSION['company'] = $row['company'];
				$_SESSION['cle_no'] = $row['cle_no'];
			}	
				header('Location:index.php');
	} else {
		if (mysqli_num_rows($vendor_rt_sql) > 0) {				
			$_SESSION['vendor']="Y";
			$_SESSION['account'] = $account;
			while ($row = mysqli_fetch_array($vendor_rt_sql)) {	
				$_SESSION['company'] = $row['company'];
				$_SESSION['rt_no'] = $row['rt_no'];
			}		
				header('Location:index.php');
		} else {
			$_SESSION['account'] = '';
			echo '<script language="javascript">';
			echo 'alert("登入失敗");';
			echo "window.location.href='login.php'";
			echo '</script>';	
		}
	}
	mysqli_close($db);		
?>
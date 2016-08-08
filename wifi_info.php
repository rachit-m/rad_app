<?php
	$conn =  mysql_connect('localhost','root','root') or die("cannot connect");
        mysql_select_db("radius_app");
	$user_contact = $_POST['user_contact'];
        $ssid = $_POST['ssid'];
        $bssid = $_POST['bssid'];
        $password = $_POST['password'];
	$bssid=str_replace("-",":","$bssid");
	$valid=filter_var($bssid, FILTER_VALIDATE_MAC);
	if($valid)
	{
        	$sql="INSERT INTO wifi_info VALUES ('$user_contact','$ssid','$bssid','$password',now())";
        	$retval=mysql_query($sql);
	}
	else
		echo "Invalid MAC address";
        mysql_close($conn);
?>


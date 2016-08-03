<?php
	$conn =  mysql_connect('localhost','root','root') or die("cannot connect");
        mysql_select_db("radius_app");
        $ssid = $_GET['ssid'];
        $bssid = $_GET['bssid'];
	$sql="SELECT password FROM wifi_info WHERE ssid='$ssid' and bssid='$bssid'";
	$retval=mysql_query($sql);
	$row=mysql_fetch_array($retval);
	if($row==NULL)
        {
                echo "unknown";
        }
        else
        {
		echo $row['password'];
	}
        mysql_close($conn);
?>


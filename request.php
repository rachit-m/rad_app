<?php
	$conn = mysql_connect('localhost','root','root') or die("cannot connect");
        mysql_select_db("radius_app");
        $timestamp2=date('Y-m-d H:i:s');
	$user_os = $_GET['user_os'];
        $req_id = $_GET['req_id'];
        $contact = $_GET['contact'];
        $sql1="SELECT timestamp FROM request_profile WHERE req_id='$req_id' and contact='$contact' and user_os='$user_os'";
        $retval1=mysql_query($sql1);
        $row1=mysql_fetch_array($retval1);
        if($row1==NULL)
        {
                $sql="SELECT ssid,bssid,password FROM wifi_info where user_contact='$contact'";
        }
        else
        {
                $timestamp1=$row1[0];
                $sql="SELECT ssid,bssid,password FROM wifi_info where user_contact='$contact' and timestamp BETWEEN '$timestamp1' AND '$timestamp2'";
        }
        $retval=mysql_query($sql,$conn);
        $row=mysql_fetch_array($retval);
        $num=mysql_num_rows($retval);
        printf("%s\n",$num);
        $i=0;
        while($i<$num)
        {
                printf("%s\n",$row[0]);
                printf("%s\n",$row[1]);
                printf("%s\n",$row[2]);
                $i++;
                $row=mysql_fetch_array($retval);
        }

        if($row1==NULL)
        {
                $sql2="INSERT INTO request_profile VALUES('$req_id','$contact','$user_os','$timestamp2')";
        }
        else
        {
                $sql2="UPDATE request_profile SET timestamp='$timestamp2' WHERE req_id='$req_id' and contact='$contact' and user_os='$user_os'";
        }
        $retval2=mysql_query($sql2);
        mysql_close($conn);


?>
                                                                                                  


<?php
	$conn =  mysql_connect('localhost','root','root') or die("cannot connect");
        mysql_select_db("radius_app");
        $contact=$_POST['contact'];
        $sql="SELECT user_contact FROM register_users WHERE user_contact='$contact'";
        $retval=mysql_query($sql);
	$row=mysql_fetch_array($retval);
        if($row==NULL)
        {
                echo "NO";
        }
        else
        {
		echo "YES";
	}
        mysql_close($conn);
?>


<?php
        $conn =  mysql_connect('localhost','root','root') or die("cannot connect");
        mysql_select_db("radius_app");
        $number = $_POST['user_contact'];
        $pass = $_POST['user_password'];
        $otp = $_POST['user_otp'];
        $sql="SELECT * FROM otp WHERE user_contact='$number' and otp=$otp";
        $check=mysql_query($sql);
        $row=mysql_fetch_array($check);
        if($row==NULL)
        {
                echo "incorrect";
        }
        else
        {
                $sql="INSERT INTO register_users VALUES ('$number','$pass','$otp')";
                $retval=mysql_query($sql);
		echo "registered";
        }
        mysql_close($conn);
?>




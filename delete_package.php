<?php

        $s=$_GET['sid'];

        $conn=mysql_connect('localhost','root','');
        mysql_select_db("tnt",$conn);

        $q=mysql_query("delete from holidays_packages where P_id='$s' ");

        header("location: all_package.php");
?>
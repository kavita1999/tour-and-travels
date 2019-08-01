<?php
    
$c=$_GET['c'];

echo $c;



$q=mysql_query(select * from emp where city='$c');

$arr=mysql_fetch_array($q);
?>
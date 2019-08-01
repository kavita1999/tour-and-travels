<?php

    $e=$_GET['sid'];
        $conn=mysql_connect('localhost','root','');
        mysql_select_db("tnt",$conn);

            $q=mysql_query("select * from holidays_packages where P_id='$e'");
        
            $w=mysql_fetch_assoc($q);



                 
        if(isset($_POST['submit']))
            {
                $n=$_POST['name'];
                $p=$_POST['price'];
                $c=$_POST['nights'];
                $i=$_POST['inclusion'];
            $s=mysql_query("update holidays_packages set Package_Name='$n',Price='$p',Nights='$c', Inclusions='$i' where P_id='$e'");
                    
                    header("location: all_package.php");
            }
    
?>

<html>
    <head>
        <body>
            <form action="#" method="post">
            <div style="height:600px;width:1540px;background-image:url(./imgs/jaislmer/jaisalmer-fort-1.jpg);backgroun-repeat:none;background-size:cover">
                <div style="height:600px;width:200px;margin-left:700px">
                    <h2>Package Name <input type="text" name="name" value="<?php echo $w['Package_Name'];   ?>"></h2></br>
                    <h2> Price <input type="text" name="price" value="<?php echo $w['Price'];   ?>"></h2></br>
                    <h2>Nights <input type="text" name="nights" value="<?php echo $w['Nights'];   ?>"></h2></br>
                    <h2>Inclusion<input type="text" name="inclusion" value="<?php echo $w['Inclusions'];   ?>"> </h2></br>
                    </br>
                    <h1> <input type="submit" name="submit" value="update"></h1>
                </div>
            </div>
            </form>
        </body>
    </head>
</html>
<?php
        $conn=mysql_connect('localhost','root','');
        mysql_select_db("tnt",$conn);



        
        if(isset($_POST['submit']))
            {
                $n=$_POST['name'];
                $p=$_POST['price'];
                $c=$_POST['nights'];
                $i=$_POST['inclusion'];
            $s=mysql_query("insert into holidays_packages(Package_Name,Price,Nights,Inclusions) values('$n','$p','$c','$i')");
            }


?>

<html>
    <head>
        <body>
            <form action="#" method="post">
            <div style="height:600px;width:1540px;background-image:url(./imgs/jaislmer/jaisalmer-fort-1.jpg);backgroun-repeat:none;background-size:cover">
                <div style="height:600px;width:200px;margin-left:700px">
                    <h2>Package Name <input type="text" name="name"></h2></br>
                    <h2> Price <input type="text" name="price"></h2></br>
                    <h2>Nights <input type="text" name="nights"></h2></br>
                    <h2>Inclusion<input type="text" name="inclusion"> </h2></br>
                    </br>
                    <h1> <input type="submit" name="submit" value="Submit"></h1>
                </div>
            </div>
            </form>
        </body>
    </head>
</html>
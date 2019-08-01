<?php
        $conn=mysql_connect('localhost','root','');
        mysql_select_db("tnt",$conn);



        
        if(isset($_POST['submit']))
            {
                $n=$_POST['name'];
                $e=$_POST['email'];
                $c=$_POST['city'];
                $d=$_POST['date'];
                $a=$_POST['adult'];
                $b=$_POST['child'];
                $p=$_POST['address'];
                $u=$_POST['username'];
                $pas=md5($_POST['password']);
            $s=mysql_query("insert into userreg(Name,Email_Id,City,Date,Adult,Child,Home_Address,username,password,status) values('$n','$e','$c','$d','$a','$b','$p','$u','$pas','user')");
            }


?>

<html>
    <head>
 

        <body>
             <form action="#" method="post">
                <div style="height:600px;width:1540px;background-image:url(./imgs/jaislmer/jaisalmer-fort-1.jpg);backgroun-repeat:none;background-size:cover;position:absolute">
                    <div style="height:500px;width:400px;margin-top:60px;margin-left:700px;background-color:none">
                            <div style="margin-left:20px">
                                <h1> Register Here</h1>
                            </div>
                            <div >
                                <input type="text" name="name" placeholder="  Name"  style="font-size:20px;color:black;border-left:0px;border-right:0px;border-top:0px;background-color:snow">
                            </div></br>
                            <div>
                                <input type="text" name="email" placeholder="  Email Id"  style="font-size:20px;color:black;border-left:0px;border-right:0px;border-top:0px;background-color:snow">
                            </div></br>
                        
                            <div>
                                <input type="text" name="city" placeholder="  City"  style="font-size:20px;color:black;border-left:0px;border-right:0px;border-top:0px;background-color:snow">
                            </div></br>
                            <div>
                                <input type="text" name="date" placeholder=  "  Date of Travel"  style="font-size:20px;color:black;border-left:0px;border-right:0px;border-top:0px;background-color:snow">
                            </div></br>
                            <div>
                                <input type="text" name="adult" placeholder="  Adult"  style="font-size:20px;color:black;border-left:0px;border-right:0px;border-top:0px;background-color:snow">
                            </div></br>
                            <div>
                                <input type="text" name="child" placeholder="  Child"  style="font-size:20px;color:black;border-left:0px;border-right:0px;border-top:0px;background-color:snow">
                            </div></br>
                            <div>
                                <input type="text" name="address" placeholder="  Home Address"  style="font-size:20px;color:black;border-left:0px;border-right:0px;border-top:0px;background-color:snow">
                            </div></br>
                            <div>
                                <input type="text" placeholder="  User Name" name="  username"  style="font-size:20px;color:black;border-left:0px;border-right:0px;border-top:0px;background-color:snow">
                            </div></br>
                            <div>
                                <input type="password"  placeholder="  Password" name="  password"  style="font-size:20px;color:black;border-left:0px;border-right:0px;border-top:0px;background-color:snow">
                            </div></br>
                            <div style="margin-left:60px">
                                <input type="submit"   name="submit" value="Register" style="font-size:20px;color:black;border-left:0px;border-right:0px;border-top:0px;background-color:blue">
                            </div></br>
                            
                    </div>
                 </div>
            </form>
        </body>
    </head>
</html>
<?php
        $conn=mysql_connect('localhost','root','');
        mysql_select_db("tnt",$conn);



        
        if(isset($_POST['submit']))
            {
                $u=$_POST['username'];
                $pas=md5($_POST['pass']);
       
            $s=mysql_query("select * from userreg where username='$u' and password='$pas'");
            
                //$m=mysql_num_rows($s);
            
        $aa=mysql_fetch_assoc($s);
            
       
                
              if($aa['status']=='admin' //and $m==1)
              {
                  
                  header("location: adminchange.php");
                  
              }
                else if($aa['status']=='user' //and $m==1)
                    
                {
                    
                    header("location: welcome.php");
                }
            
            else
                    
                {
                    
                    echo "plz enter correct username and password";
                    
                }
            
            }

?>
<html
<head>
    <style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 13px 28px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  margin-left: 60px;
  margin-top:20px;
}
.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>
</head>
<body>
<form action="#" method="post">
<div style="position:absolute;height:750px;width:1560px;background-color:brown;background-image:url(./imgs/jaipur/places-to-visit-in-jaipur-00530.jpg.optimal.jpg);background-size:cover;background-repeat:none">    
    <div style="height:130px;width:400px;background-color:none;margin-left:600px;margin-top:300px">
        <table align="center">
                <tr>
            
                        <td style="font-size:25px;color:black">  User Name   </td
                        <td style="font-size:25px;color:black">  <input type="text" name="username" required> </td>
                </tr>
    
    
                <tr>
            
                        <td style="font-size:25px;color:black">  Password  </td>
                        <td style="font-size:25px;color:black">   <input type="password" name="pass" required> </td>
                </tr>
    
            
                <tr>
            
                        <td colspan="2" align="center"> <input type="submit" name="submit">

  </td>
                     
                </tr>
    
    
    
        </table>
    </div>    
</div>
    </form>


</body>
</html>

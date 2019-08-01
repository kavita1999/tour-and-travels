<?php
        $conn=mysql_connect('localhost','root','');
        mysql_select_db("tnt",$conn);



        
        if(isset($_POST['submit']))
            {
                $n=$_POST['name'];
                $e=$_POST['email'];
                $c=$_POST['contact'];
                $d=$_POST['date'];
            $s=mysql_query("insert into registration(Name,Email_Id,Contact_No,Date) values('$n','$e','$c','$d')");
            }


?>



<html>
    <head>
    </head>
        <body> 
                <form action="#" method="post">
               <div style="position:absolute;background-color:pink;height:800px;width:1540px;background-image:url(./imgs/jaislmer/12981-camels.jpg);background-repeat:none;background-size:cover">
                 <div style="height:600px;width:600px;background-color:none;position:absolute;margin-left:450px;margin-top:100px;font-size:17px">
							<div style="height:580px;width:580px;background-color:none;position:absolute;margin-left:10px;margin-top:10px;font-size:17px">
								<div style="height:100px;width:200px;background-color:none;position:absolute;margin-left:200px;margin-top:20px;font-size:17px">
									<h4 style="font-size:35px;color:black"> Contact Us<h4>
								
								</div>
                                <div style="height:50px;width:200px;position:absolute;margin-left:190px;margin-top:150px;font-size:17px">
                                    <input type="text box" placeholder="Name" name="name" style="font-size:20px;color:black;border-left:0px;border-right:0px;border-top:0px;background-color:none">
                                </div>
                                <div style="height:50px;width:200px;position:absolute;margin-left:190px;margin-top:250px;font-size:17px">
                                    <input type="text box" placeholder="Email Id" name="email" style="font-size:20px;color:black;border-left:0px;border-right:0px;border-top:0px;background-color:none">
                                </div>
                                <div style="height:50px;width:200px;position:absolute;margin-left:190px;margin-top:350px;font-size:17px">
                                    <input type="text box" placeholder="Contact No" name="contact" style="font-size:20px;color:black;border-left:0px;border-right:0px;border-top:0px;background-color:none">
                                </div>
                                <div style="height:50px;width:200px;position:absolute;margin-left:190px;margin-top:450px;font-size:17px">
                                    <input type="text box" placeholder="date"  name="date" style="font-size:20px;color:black;border-left:0px;border-right:0px;border-top:0px;background-color:none">
                                </div>
                                <div style="height:50px;width:200px;position:absolute;margin-left:250px;margin-top:500px;font-size:17px">
                                    <input type="submit" value="Sign In"  name="submit" style="font-size:20px;color:black;border-left:0px;border-right:0px;border-top:0px;border- bottom:0px;background-color:none">
                                </div>
                               
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                            </div>	
                 </div>		
             </div>
				    
                    

                </form>
    
        </body>
</html>
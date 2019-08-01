<?php
        $conn=mysql_connect('localhost','root','');
        mysql_select_db("tnt",$conn);


        
    
        $q=mysql_query("select * from userreg");

     
?>







<html>
        <head>
    
        </head>
                <body>
    
                        <table border="1px" width="600px" align="center" style="background-color:silver">
                                <tr style="background-color:brown">
                                        <th> Name</th>
                                
                                        <th> Email_Id</th>

                                        <th> City  </th>
                                    
                                        
                                        <th> Date   </th>
                                        <th> Adult </th>
                                        <th> Child  </th>
                                        <th> Home_Address </th>
                                        <th> Username </th>
                                         <th> password </th>
                                    
                                        
                                    
                                    
                                </tr>
                    
                    <?php
                            
                            while($ar=mysql_fetch_array($q))
                                
                            {
                                
                                
                    ?>            
                            
                            
                                <tr>
                                        <td> <?php echo $ar['Name'];    ?>    </td>
                                        <td> <?php echo $ar['Email_Id'];    ?>    </td>
                                        <td> <?php echo $ar['City'];    ?>    </td>
                                        <td> <?php echo $ar['Date'];    ?>    </td>
                                         <td> <?php echo $ar['Adult'];    ?>    </td>
                                         <td> <?php echo $ar['Child'];    ?>    </td>
                                         <td> <?php echo $ar['Home_Address'];    ?>    </td>
                                         <td> <?php echo $ar['username'];    ?>    </td>
                                         <td> <?php echo $ar['password'];    ?>    </td>
            
                                    
                                       
                               </tr>
                    
                    <?php
                                
                                
                            }
                            
                    ?>        
                                
                                
                                
                    
                    
                    
                        </table>
    
    
    
    
    
    
    
    
                </body>





</html>
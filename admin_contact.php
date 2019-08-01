<?php
        $conn=mysql_connect('localhost','root','');
        mysql_select_db("tnt",$conn);


        
    
        $q=mysql_query("select * from registration");

     
?>







<html>
        <head>
    
        </head>
                <body>
    
                        <table border="1px" width="600px" align="center" style="background-color:silver">
                                <tr style="background-color:brown">
                                        <th> Name</th>
                                
                                        <th> Email Id</th>

                                        <th> Contact_No   </th>
                                    
                                        <th> Date   </th>
                                    
                                        
                                    
                                    
                                </tr>
                    
                    <?php
                            
                            while($ar=mysql_fetch_array($q))
                                
                            {
                                
                                
                    ?>            
                            
                            
                                <tr>
                                        <td> <?php echo $ar['Name'];    ?>    </td>
                                        <td> <?php echo $ar['Email_Id'];    ?>    </td>
                                        <td> <?php echo $ar['Contact_No'];    ?>    </td>
                                        <td> <?php echo $ar['Date'];    ?>    </td>
            
                                    
                                       
                               </tr>
                    
                    <?php
                                
                                
                            }
                            
                    ?>        
                                
                                
                                
                    
                    
                    
                        </table>
    
    
    
    
    
    
    
    
                </body>





</html>
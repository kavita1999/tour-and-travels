<?php
        $conn=mysql_connect('localhost','root','');
        mysql_select_db("tnt",$conn);


        
    
        $q=mysql_query("select * from holidays_packages");

     
?>







<html>
        <head>
    
        </head>
                <body>
    
                        <table border="1px" width="600px" align="center" style="background-color:silver">
                                <tr style="background-color:brown">
                                        <th> Package Name</th>
                                
                                        <th> Price  </th>

                                        <th>Nights    </th>
                                    
                                        <th>Inclusions    </th>
                                    
                                        <th>Operations    </th>
                                    
                                    
                                </tr>
                    
                    <?php
                            
                            while($ar=mysql_fetch_array($q))
                                
                            {
                                
                                
                    ?>            
                            
                            
                                <tr>
                                        <td> <?php echo $ar['Package_Name'];    ?>    </td>
                                        <td> <?php echo $ar['Price'];    ?>    </td>
                                        <td> <?php echo $ar['Nights'];    ?>    </td>
                                        <td> <?php echo $ar['Inclusions'];    ?>    </td>
            
                                    
                                        <td> <a href="delete_package.php?sid=<?php echo $ar['P_id']; ?>">Delete</a>/ <a href="update_package.php?sid=<?php echo $ar['P_id']; ?>">update</a>    </td>
                                    
                               </tr>
                    
                    <?php
                                
                                
                            }
                            
                    ?>        
                                
                                
                                
                    
                    
                    
                        </table>
    
    
    
    
    
    
    
    
                </body>





</html>
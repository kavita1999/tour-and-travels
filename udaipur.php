
<?php
        $conn=mysql_connect('localhost','root','');
        mysql_select_db("tnt",$conn);

      
        $q=mysql_query("select * from holidays_packages where city='udaipur'");

     
?>



<html>
   <head>
</head>
    <body>
    <form action="#" method="post">
       <div style="height:1900px;width:1568px;background-repeat:none;  background-size:cover;position:absolute;background-image: url(image/udaipur%20/download.jpg)">   
          <div style="height:0px;width:550px;background-color:aqua;margin-left:170px;margin-top:-15px;font-size:10px;color:blue"><h1>ROYAL RAJASTHAN TOUR UDAIPUR</h1>
          </div>     
        
            
            
           <div style="height:400px;width:150px;color:white;margin-left:80px;margin-top:50px">
            <img  src="image\udaipur\download.jpg"  style="height:170px; width:140px;margin-left:5px;margin-top:5px">
            <h1  style="font-size:14px;margin-left:7;margin-top:10px">Oberoi Udaivilas</h1>
            <p  style="font-size:13px;margin-left:5;margin-top:10px">
                Udaipur is popularly called as the Lake City of Rajasthan. The beautiful Indian tourist destination in Rajasthan is located on the banks of tranquil Lake Pichola. The city was founded by legendary Maharana Udai Singh in 1559 A.D.</p>
    
            </div>
            
            
                    
        <div style="height:400px;width:150px;color:white;margin-left:310px;margin-top:-400px">
            <img  src="image\udaipur\dd.jpg"  style="height:170px; width:140px;margin-left:5px;margin-top:5px">
            <h1  style="font-size:14px;margin-left:40;margin-top:10px">Museum</h1>
            <p  style="font-size:13px;margin-left:5;margin-top:10px">
                City Palace, Udaipur, is a palace complex situated in the city of Udaipur, Rajasthan. It was built over a period of nearly 400 years, with contributions from several rulers of the Mewar dynasty. ... The palace is located on the east bank of Lake Pichola and has several palaces built within its complex.</p>

            
            </div>
            
            
        <div style="height:400px;width:150px;color:white;margin-left:550px;margin-top:-400px">
            <img  src="image\udaipur\download (5).jpg"  style="height:170px; width:140px;margin-left:5px;margin-top:5px">
            <h1  style="font-size:14px;margin-left:35;margin-top:10px">Lake Place</h1> 
            <p  style="font-size:13px;margin-left:5;margin-top:10px">
                The Lake Palace was built between 1743 and 1746 under the direction of the Maharana Jagat Singh II (62nd successor to the royal dynasty of Mewar) of Udaipur, Rajasthan as a summer palace. It was initially called Jagniwas or Jan Niwas after its founder.</p>

            </div>
            
            
        <div style="height:400px;width:150px;color:white;margin-left:80px;margin-top:200px">
            <img  src="image\udaipur\images (1).jpg"  style="height:170px; width:140px;margin-left:5px;margin-top:5px">
            <h1  style="font-size:14px;margin-left:25;margin-top:10px">Jagdish Temple</h1> 
            <p  style="font-size:13px;margin-left:5;margin-top:10px">
                Jagdish Temple is a large Hindu temple in the middle of Udaipur in Rajasthan, just outside the royal palace. It has been in continuous worship since 1651. A big tourist attraction, the temple was originally called the temple of Jagannath  Jagdish. It is a major monument in Udaipur.</p>
            
            </div>
            
            
        <div style="height:400px;width:150px;color:white;margin-left:310px;margin-top:-400px">
            <img  src="image\udaipur\images (2).jpg"  style="height:170px; width:140px;margin-left:5px;margin-top:5px">
            <h1  style="font-size:14px;margin-left:30;margin-top:10px">Udaipur City</h1> 
            <p  style="font-size:13px;margin-left:5;margin-top:10px">
                Udaipur city is situated 598 metre above sea level in the southern part of the Indian state, Rajasthan. It has an area of 37 square kilometres and is located on the southern slope of the mighty Aravalli hills which separates the city from the Thar desert.
            </div>
            
            
        <div style="height:400px;width:150px;color:white;margin-left:550px;margin-top:-400px">
            <img  src="image\udaipur\shutterstock.jpg"  style="height:170px; width:140px;margin-left:5px;margin-top:5px">
            <h1  style="font-size:14px;margin-left:20;margin-top:10px"> Sightseeing Tours </h1> 
            <p  style="font-size:13px;margin-left:5;margin-top:10px">
                Udaipur where elaborately designed palaces and gardens reflect a regal past and where the Aravalli Range makes its presence felt by towering on all sides.stunning palaces forts museums and gardens on the best sightseeing tours in Udaipur visit them all even if you re here for just a few days.</p>
            </div>
           <div style="height:500px;width: 1000px;background-color:none;position: absolute;margin-left: 300px;margin-top:300px">
             <table border="1px" width="600px" align="center" style="background-color:silver">
                                <tr style="background-color:brown">
                                        <th> Package Name</th>
                                
                                        <th> Price  </th>

                                        <th>Nights    </th>
                                    
                                        <th>Inclusions    </th>
                                    
                                        <th>City    </th>
                                    
                                    
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
                                        <td> <?php echo $ar['City'];    ?>    </td>
            
                                    
                                        
                               </tr>
                    
                    <?php
                                
                                
                            }
                            
                    ?>        
                                
                                
                                
                    
                    
                    
                        </table>
    
    
    
    </div>
        
        
        
                




      
            
           
</div>
    </form>
  </body>
   </html>
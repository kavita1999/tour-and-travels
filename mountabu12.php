<?php
         $conn=mysql_connect('localhost','root','');
        mysql_select_db("tnt",$conn);



$q=mysql_query("select * from holidays_packages where city='mountabu'");
?>
   
<html>
   <head>
</head>
    <body>
      <div style="height:1700px;width:1570px;background-repeat:none;  background-size:cover;position:absolute;background-image: url(image/mount%20abu/ddd.jpg);filter:blur(0.2px)">   
          <div style="height:0px;width:550px;background-color:aqua;margin-left:170px;margin-top:-15px;font-size:10px;color:blue"><h1>ROYAL RAJASTHAN TOUR MOUNT ABU</h1>
          </div>     
        
           
            <div style="height:400px;width:150px;color:white;margin-left:80px;margin-top:50px">
            <img  src="image\mount abu\ab.jpg" style="height:170px; width:140px;margin-left:5px;margin-top:5px">
                <h1 style="font-size:16px;margin-left:20;margin-top:10px">Dilwara Temple</h1>
                <p style="font-size:12px;margin-left:5px;margin-top:0px   ">The Dilwara Temples are located about 2½ kilometres from Mount Abu, Rajasthan's only hill station. These Jain temples were built by Vimal Shah and designed by Vastupala, Jain ministers of Dholka,between the 11th and 13th centuries AD and are famous for their use of marble and p-intricate marble carvings.</p>
            
            </div>
           
            
            <div style="height:400px;width:150px;color:white;margin-left:310px;margin-top:-400px">
            <img  src="image\mount abu\dilwara2.jpg"  style="height:170px; width:140px;margin-left:5px;margin-top:5px">
                <h1  style="font-size:16px;margin-left:9px;margin-top:8px">Om Shanti Bhawan</h1>
                <p  style="font-size:12px;margin-left:5;margin-top:10px">Om Shanti Bhawan was constructed in 1983 in which the main assembly hall, Universal Peace Hall, is situated. It is a very attractive assembly hall and 5,000 people can sit in it. Besides this, there is facility of translation in 16 languages simultaneously.It More than 8,000 people come here to see it daily.</p>
       
                
            </div>    
            
            
        <div style="height:400px;width:150px;color:white;margin-left:550px;margin-top:-400px">
             <img  src="image\mount abu\Dilwara-Jain-Temple-in-Mount-Abu.jpg"  style="height:170px; width:140px;margin-left:5px;margin-top:5px">
                <h1  style="font-size:16px;margin-left:25;margin-top:10px">Jain Teample</h1>
                <p  style="font-size:12px;margin-left:5;margin-top:10px">Jainism may be one of the most underrated of all the religions in the world. The reasons could be many. One could be that it emphasizes on the inner and outer worldly peace for the most part. Whatever it is, but there no denial to the fact that the structures belonging to Jainism are some of the most architecturally brilliant ones.</p>
                
            </div>    
           
       
       
        <div style="height:400px;width:150px;color:white;margin-left:80px;margin-top:200px">
            <img  src="image\mount abu\nikkilake1.jpg"  style="height:170px; width:140px;margin-left:5px;margin-top:5px">
            <h1  style="font-size:16px;margin-left:25;margin-top:10px">Nakki Lake</h1>
            <p  style="font-size:12px;margin-left:5;margin-top:10px">Situated in the Aravalli ranges in Mount Abu, Nakki Lake, locally known as the Nakki Jheel is a paradise for nature lovers. Flanked by amazing natural wonders, this lake is truly a gem of Mount Abu. It is the first man-made lake in India with a depth of around 11,000 metres and a width of a quarter of a mile.</p>
            </div>
            
            
        <div style="height:400px;width:150px;color:white;margin-left:310px;margin-top:-400px">
            <img  src="image\mount abu\wildlife1.jpg"  style="height:170px; width:140px;margin-left:5px;margin-top:5px">
            <h1  style="font-size:16px;margin-left:25;margin-top:10px">Wildfire Tour</h1>
            <p  style="font-size:12px;margin-left:5;margin-top:10px">Mount Abu Wildlife Sanctuary is situated on one of the oldest mountain ranges in the country and covers a large plateau including the highest peak in Rajasthan, Guru Shikhar.  it would be a little treat to spend a couple of hours or days in Mount Abu. It takes not more than two hours to scale the park on jeep.</p>
            
            
            </div>
        
            
            
        <div style="height:400px;width:150px;color:white;margin-left:550px;margin-top:-400px">
            <img  src="image\mount abu\Mahabaleshwar.jpg"  style="height:170px; width:140px;margin-left:5px;margin-top:5px">
           <h1  style="font-size:16px;margin-left:25;margin-top:10px">Mahabaleswar</h1>
           <p  style="font-size:12px;margin-left:5;margin-top:10px">The first historical mention of Mahabaleshwar dates back to year 1215 when the King Singhan of Deogiri visited Old Mahabaleshwar. He built a small temple and water tank at the source of the river Krishna. Around 1350, a Brahmin dynasty ruled this area.</p>
            
            
            </div> 
           <div style="height:0px;width: 700px;background-color: aliceblue;position: absolute;margin-left: 450px;margin-top:100px">
             <table border="0px" width="600px" align="center" style="background-color:silver">
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
  </body>
   </html>
      
            
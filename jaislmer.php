<?php
         $conn=mysql_connect('localhost','root','');
        mysql_select_db("tnt",$conn);



$q=mysql_query("select * from holidays_packages where city='jaislmer'");
?>

<html>
    <head>
    </head>

       <body>
          <div style="height:1700px;width:1520px;background-color:red;position:absolute">
            <div style="background-image: url(./imgs2/bk2.jpg);height:1500px;width:1520px;margin-top:0px;background-repeat:none;background-size:cover;position: absolute;height:1700px">  
            <div style="height:80px;width;630px;margin-top:0px;margin-left:400px;position:absolute">                                                <h3 align="center" style=font-size:40px;margin-top:10px> Royal Rajasthan Tour Jaisalmer </h3>
            </div>
        
              
              <div style="height:550px;width:350px;margin-top:120px;margin-left:130px;position: absolute">
                 <img src="./imgs2\jaislmer/camels.jpg" style="height:220px;width:330px;margin-left:10px;margin-top:10px">
                  <h1 style="font-size;40px;margin-left:50px;color:white"> Desert Safari </h1>
                  <p style="font-size:20px;margin-left:15px;color:white">Jaisalmer in rajasthan is a place frequently visit by tourists for its stretches of desert sand.The desert safari is ususlly coducted in jeeps or personal cars.In camel safari,a camel rider is needed for safari tour of 90 min.also,once the desert safari is done,you can enjoy a delicious meal alongside musical dance program.</p>

                 </div>                                                                                   
             
                
                  
              <div style="height:550px;width:350px;margin-top:120px;margin-left:550px">
                <img src="./imgs2\jaislmer/fort.jpg" style="height:220px;width:330px;margin-left:10px;margin-top:10px">
                  <h1 style="font-size;40px;margin-left:50px;color:white"> Jaisalmer Fort</h1>
                  <p style="font-size:20px;margin-left:15px;color:white">Jaisalmer Fort,nestled on the golden sands of THAR desert,is not just a fort but a mini-town with houses,temples,shops, and restaurents.The fort stands at an height of 250ft.and surrounded by 30ft.tall walls.One of the largest fort in the world,it is located on the southern edge of the city and known as 'Sonar Qila' or 'Golden Fort'.</p>
                                                                                                
              </div>
              
              <div style="height:550px;width:350px;margin-top:-550px;margin-left:980px">
                  <img src="./imgs2\jaislmer/gadi sagar lake.jpg" style="height:220px;width:330px;margin-left:10px;margin-top:10px">
                  <h1 style="font-size;40px;margin-left:50px;color:white"> Gadisar Lake</h1>
                  <p style="font-size:20px;margin-left:15px;color:white">Jaisalmer is the arid state of Rajasthan lies the beautiful Gadisar Lake,which sits on oasis in the heart of a desert.It offers scenic and picturesque views of the lake and the adjacent fort,especiallly when the eastern sky is blood red and the sun rises.You can go boating in the lake or simply enjoy a walk around the embarkment.</p>
              </div>
              
              
               <div style="height:550px;width:350px;margin-top:150px;margin-left:130px">
                   <img src="./imgs2\jaislmer/jain temple.jpg" style="height:220px;width:330px;margin-left:10px;margin-top:10px">
                   <h1 style="font-size;40px;margin-left:50px;color:white"> Jain Temple</h1>
                   <p style="font-size:20px;margin-left:15px;color:white">Situated in Jaisalmer Fort,Jain Temples in Jaisalmer are a must-vist.Built in Dilwara style that is famous all over the world for its architecture.All seven temples are connected to each other and are built using the same golden-yellow Jaisalmeri stone.If anyone is interested in history of these temples there is place-the Gyan Bhandar.</p>
                </div>
              
              <div style="height:550px;width:350px;margin-top:-550px;margin-left:550px">
                  <img src="./imgs2\jaislmer/kuldhara village.jpg" style="height:220px;width:330px;margin-left:10px;margin-top:10px">
                  <h1 style="font-size;40px;margin-left:50px;color:white"> Kuldhara Village</h1>
                  <p style="font-size:20px;margin-left:15px;color:white">Kuldhara Village,located around 20km fwom Golden City Jiasalmer.The village,rich with its fair share of legends and myths,is said to be spooky and haunted village.There have been stories of ghostly and paranormal activities in and around the village.thus,the entire area is calm but eerily silent.There is nothing to do as such but the experience makes up for all of us.</p>
              </div>
        
              <div style="height:550px;width:350px;margin-top:-550px;margin-left:980px">
                  <img src="./imgs2\jaislmer/tazia tower.jpg" style="height:220px;width:330px;margin-left:10px;margin-top:10px">
                  <h1 style="font-size;40px;margin-left:10px;color:white"> Tazia Tower and Badal Palace</h1>
                  <p style="font-size:20px;margin-left:15px;color:white">Tazia tower is a replica of the mausoleum of various Muslims imams and The Badal Palace nera the Amar Sagar Gate has a cloud-like appearance.Its a tower of 5 storeys,and each stroys tells a different story.Badal Palace is the present house of the Royals.The structure is beautiful of architectural splendour.
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
        
            </div>
        
    
    </body>
</html>
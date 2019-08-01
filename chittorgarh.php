<?php
         $conn=mysql_connect('localhost','root','');
        mysql_select_db("tnt",$conn);



$q=mysql_query("select * from holidays_packages where city='chittorgarh'");
?>

<html>
    <head>
    </head>

       <body>
          <div style="height:1700px;width:1520px;background-color:mediumpurple;position:absolute">
           <div style="background-image: url(./imgs2/bk3.jpg);height:1500px;width:1520px;margin-top:0px;background-repeat:none;background-size:cover;position: absolute;filter:blur(0.2px)"> 
            <div style="height:80px;width:630px;margin-top:0px;margin-left:400px;position:absolute">
                <h3 align="center" style=font-size:40px;margin-top:10px> Royal Rajasthan Tour Chittorgarh </h3>
              </div>
               
            <div style="height:550px;width:350px;margin-top:100px;margin-left:130px">
                  <img src="./imgs2/chittorgarh/fort.jpg" style="height:220px;width:330px;margin-left:10px;margin-top:10px">
                  <h1 style="font-size;40px;margin-left:50px;color:black"> Chittorgarh Fort</h1>
                  <p style="font-size:20px;margin-left:15px;color:black">Chittorgarh Fort in Rajasthan is one of the largest forts in india.It is spread over a hill of 590 feet in height and is spread across 692 acres of land is a fine example of the popular Rajput achitecture.Chittorgarh fort was declared a UNESCO's World Heritage site in the year 2013.
              </div>
                  
              <div style="height:550px;width:350px;margin-top:-550px;margin-left:550px">
                  <img src="./imgs2\chittorgarh/vijat stambh.jpg" style="height:220px;width:330px;margin-left:10px;margin-top:10px">
                  <h1 style="font-size;40px;margin-left:50px;color:black"> Vijay Stambh </h1>
                  <p style="font-size:20px;margin-left:15px;color:black">Vijay Stambh,also known as victory tower,is a piece of resistance of chittorgarh.It was constructed by king of Mewar,Rana Kumbha to celebrate his victory.The internal part of tower has carvings of weapons,musical intruments, and other tools used in taht period.The highest storey consists of an image of the jain Goddess,Padmavati.
              </div>
              
              <div style="height:550px;width:350px;margin-top:-550px;margin-left:980px">
                  <img src="./imgs2\chittorgarh/arch museum.jpg" style="height:220px;width:330px;margin-left:10px;margin-top:10px">
                  <h1 style="font-size;40px;margin-left:10px;color:black"> Archeological Museum </h1>
                  <p style="font-size:20px;margin-left:15px;color:black">Archaeological Museum of Chittorgarh displays a valuable collection of artefacts belonging to the royality of chittorgarh.It is bound to take one back to the past.The paintings,sclupturs,weapons,coins and other metal give a glimpse into the regal lifestyle of the Rajputs.it was initially a part of the Fateh Prakesh Palace converted by govt. of India in 1968.
              </div>
              
              
               <div style="height:550px;width:350px;margin-top:110px;margin-left:130px">
                   <img src="./imgs2\chittorgarh/maha sati.jpg" style="height:220px;width:330px;margin-left:10px;margin-top:10px">
                   <h1 style="font-size;40px;margin-left:50px;color:balck"> Maha Sati </h1>
                  <p style="font-size:20px;margin-left:15px;color:black"> The beautiful structure,glistening in the sun attracts tourusts also because of a water reserviour which it believed to have the water of Ganges emerging from it.In all,there are more than 250 cenotaphs here.About 110km away from chittorgarh,this is the sacred place where Udaipur Rulers used to be cremanted.The Ahar Cenotaphs have 19 chhatris to commemorate the 19 kings.
                </div>
              
              <div style="height:550px;width:350px;margin-top:-550px;margin-left:550px">
                  <img src="./imgs2\chittorgarh/gau mukh.jpg" style="height:220px;width:330px;margin-left:10px;margin-top:10px">
                  <h1 style="font-size;40px;margin-left:50px;color:black">Gau Mukh </h1>
                  <p style="font-size:20px;margin-left:15px;color:black">Located within Chittorgarh fort,Gau Mukh literally means mouth of cow and it has been named so because the water flows  water si whatfrom the cow mouth shaped point.Natural environment with lush green plants and flowing water is what makes this place even more attractive.
              </div>
              
              <div style="height:550px;width:350px;margin-top:-550px;margin-left:980px">
                  <img src="./imgs2\chittorgarh/shayama temple.jpg" style="height:220px;width:330px;margin-left:10px;margin-top:10px">
                  <h1 style="font-size;40px;margin-left:50px;color:black"> Shyama Temple</h1>
                  <p style="font-size:20px;margin-left:15px;color:black">Located in Chittorgarh Fort,Shyama Temple is dedicated to Varaha,one of the incarnations of Lord Vishnu.It has alfty roof nad pyramidal tower nad the wall is adorned with many scluptures depicting Hindu Gods and Goddesses.
              </div>
                
              
              
              
              </div>
              
               <div style="height:0px;width: 700px;background-color: aliceblue;position: absolute;margin-left: 450px;margin-top:1300px">
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
    
    
    
    </div>s
        
            </div>
        
    
    </body>
</html>
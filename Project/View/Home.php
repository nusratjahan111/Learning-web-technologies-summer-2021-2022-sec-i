<?php 

require_once('header.php')

?>

<html>
 <head>
      <title>Home</title>
 </head>

 <body>

    <table border="3", width="100%">
           <tr><td colspan="3" align="center"><b>
               <h1>welcome Customer</h1>
           </b></td></tr>
            <tr>
                <td align="center"><img src="../asset/download.jpg"  height ="400px" width="800px"></td>
               
                <td align="center"  width="1500px">
    
                    
                    <b><a href="showPro.php">Show Profile</a></b> |
                    
                    <b><a href="../controller/logout.php">LogOut</a></b>
                </td>
           
    
            </tr>
            <tr height ="300px">
               
              <td width="200px" colspan="3" >
                  <table align="left" width="1000px" >
                       <tr>
                         <ul>
                         <td ><h3><a href="balance.php" ><li> Add  Balance</a></li> </h3></td>        
                         <td><h3><a href="Edit.php"><li> update profile</li></a></h3></td>
                                           
                                    
                       </tr>
                       <tr>
                        <td><h3><a href="product.php"><li> Product List</li></a></h3></td> 
                        <td><h3><a href="buyproduct.php"><li> Buy Products</li></a></h3></td>   
                        <td></td>             

                      </tr>
                      <tr>
                        <td><h3><a href="discount.php"><li>Discount</li></a></h3></td> 
                        <td><h3><a href="help.html"><li>Help</li></a></h3></td>      

                      </tr>
                      <tr>
                        <td><h3><a href="upload.php"><li>Upload Your photo</li></a></h3></td>
                        <td></td>              

                      </tr>
                      <tr> 
                        <td></td> 
                        <td></td>             

                      </tr>
                                     
                               
                      </ul>

                  </table>
              </td>
             
            </tr>
            
          

    </table>

 </body>




</html>
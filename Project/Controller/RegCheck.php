<?php 
	session_start();

	if(isset($_POST['submit']))
    {
        
        if($_POST['userid']!= "")
        {
           if($_POST['username'] != "" )
        {
			
                if($_POST["email" ] != "")
                {
				    if($_POST["date" ] != "")
                    {
                         if(isset($_POST['gender']))
                        {
                            if($_POST['add']!= "" && strlen($_POST['add']>2))
                            {
                                if($_POST['password']!= "")
                                {
                                    if($_POST['confirmpassword'] != "" &&  $_POST['password']==$_POST['confirmpassword'])
                                   {
                                         
                               
                                    $conn=mysqili_connect('localhost','root','','webtech');
                                    $sql = "INSERT INTO users  VALUES ('$userid','$username','$email','$password','$add','$gender','$date')";
                                    if(mysqli_query($conn, $sql)){
                                        header('location: ../view/login.html');
                                    }

                                            //    header('location: ../view/login.html');
                                         
                                   }
                                   else
                                   {
                                       echo "<h1>Invalid Confirm Password!!!</h1>";
                                   }
                               }
                               else
                               {
                                echo "<h1>Invalid Password!!!</h1>"; 
                               }
                           }
                          else
                            {
                              echo "<h1>Invalid Address...</h1>";
                            }
                        }
                         else
                        {
                             echo "<h1>Invalid Gender...</h1>";
                        }
                    }
                    else
                    {
					   echo "<h1>Invalid Date of Birth...</h1>";
				    }

					
				}
                else
                {
					echo "<h1>Invalid  Email!!</h1>";
				}	
			
		}
        else
        {
			echo " <h1>Invalid Username!!</h1>";
		} 
        }
        else
        {
           echo "<h1>Invalid userid!!!</h1>"; 
        }
        
		
	}
?>
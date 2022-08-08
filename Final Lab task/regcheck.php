<?php 
	session_start();
    $username=$_REQUEST['']


	if(isset($_POST['submit']))
    {
        
          
            $conn=mysqili_connect('localhost','root','','webtech');
            $sql = "INSERT INTO users  VALUES ('$username','$number','$password','$company')";
            if(mysqli_query($conn, $sql)){
                    header('login.html');
                     }

        //    header('location: ../view/login.html');
                                         
                                   }
                                  
		
	}
?>
<?php
	session_start();

	if(isset($_POST['submit']))
    {
		
        $userid = $_POST['userid'];
		$password = $_POST['password'];

		if( $userid != "")
		{
            
            if($password != "")
                {
                    
                    $myfile1 = fopen('../model/User.txt', 'r');
                    
                    while(!feof($myfile1))
                    {
                        $data = fgets($myfile1);
					    $user = explode('|', $data);
                        
                    if(trim($user[0]) == $userid && trim($user[6]) == $password)
					{
						setcookie('flag', 'true', time()+3600, '/');

						setcookie('loggedInId',$user[0],time()+3600,'/');
                        setcookie('loggedInUsername',$user[1],time()+3600,'/');
                        setcookie('loggedEmail',$user[2],time()+3600,'/');
                        setcookie('loggedDate',$user[3],time()+3600,'/');
                        setcookie('loggedgender',$user[4],time()+3600,'/');
						setcookie('loggedadd',$user[5],time()+3600,'/');
                        setcookie('password',$user[6],time()+3600,'/');
                        setcookie('address',$user[7],time()+3600,'/');
                         
						

						header('location:../view/Home.php');
					}
                    }
                }
            
			else
			{
				echo "<h1>Invalid Password...</h1>";
			}
		}
		else
		{
			echo "<h1>Invalid Username...</h1>";
		}
	}
?>
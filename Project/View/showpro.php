<?php 
	require_once('header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User list</title>
</head>
<body>
		<a href="home.php"> Back </a> | 
		<a href="../controller/logout.php"> logout </a>
		<br>
		<table border="1">
			<tr>
				<th>User ID</th>
				<th>NAME</th>
				<th>Email</th>
				<th>Gender</th>
				<th>Address</th>
			</tr>

		    <tr>
                <th><?php
if(isset($_COOKIE[$loggedInId])) {
    echo $loggedInId;
}
    ?></th>
            </tr>
		</table>
</body>
</html>
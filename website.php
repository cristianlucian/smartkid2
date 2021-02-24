<?php

include_once 'test.php';


if(isset($_POST['Submit'])) {
    
$Username = $_POST['Username']; 
$Password = $_POST['Password'];

$query = $con->prepare("select * from smartkid_users where Username = ? and Password = ?");

$success = $query->execute([$Username, $Password]);

if($success){
			$user = $query->fetch(PDO::FETCH_OBJ);
			
			echo $user->ID .'<br>';
			echo $user->Forename .'<br>';
			echo $user->Surename .'<br>';
			echo $user->Username .'<br>';
			echo $user->Password .'<br>';
			}else{
				echo "No user found with these details";
			}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<style>
		table
		{
			border-collapse:collapse;
			margin:0px auto;
		}
		table,th,td
		{
			border:1px solid black;
			padding:5px;
		}
		.buttons
		{
			margin:auto;
			width:50%;
		}
		form
		{
			display:inline;
			padding:113px;
		}
		input
		{
			border:none;	
			cursor: pointer;
			padding: 14px 28px;
			background-color:#ee6f57;
		}
	</style>
</head>
<body>

        <?php
        echo ("<p>Hello $Username.</p>");
		?>
	
</body>
</html>
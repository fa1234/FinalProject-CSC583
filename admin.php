<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>
</head>

    <body>
	<link rel="stylesheet" type="text/css" href="style.css">
  <div class="container">
  <div class="login-header">
		<h2> Registration</h2>
        </div>
        <center>
        <div class="login">

		<div class="login-form">
	<table style="width:60%">
  <tr>
    <th>Username</th>
    <th>Email</th> 
    <th>Phone Number</th>
    <th>Company</th> 
    <th>Visit(Official or not)</th>
     <th>Company Name</th>
  </tr>
  </div>

        <?php
		$host="localhost";
		$user="root";
        $password="";
        $db="finalproject";
        $con=mysqli_connect($host,$user,$password,$db);
		if($con) 
		{
		  echo '<h1 align="center" > Admin Page </h1>';
		 // $dbb=mysqli_select_db("finalproject",$con);
				$query = "SELECT * FROM users"; 
                $result = mysqli_query($con,$query);
			while($row = mysqli_fetch_array($result))
			{   
                echo '<tr><td>'.$row['username'].'</td><td>'.$row['email'].'</td><td>'.$row['phonenumber'].'</td><td>'.$row['company'].'</td><td>'.$row['OfficialV'].'</td><td>'.$row['Ename'].'</td></tr>';

            
			}					
		} 	
		else 
		{
		   echo '<h1>MySQL Server is not connected</h1>';
		}      
?>

	</body>
</html>
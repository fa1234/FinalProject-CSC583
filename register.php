<!DOCTYPE html>
<html>
    <body>
        <?php
		$host="localhost";
		$user="root";
        $password="";
        $db="finalproject";
        $con=mysqli_connect($host,$user,$password,$db);
        
		if($con) 
		{
	

				if(empty($_POST['username']))
			{
				echo"Please, Enter your info..."; 

				
			}
			
			
			else
			{

							$usr=$_POST['username'];
							$emi=$_POST['email'];
							$pho=$_POST['phone'];
							$comp=$_POST['company'];
							
						if(!empty($_POST['escortName']))
						{
                            
                            $esc=$_POST['escortName'];
                            if(!empty($_POST['checkVisit']))
                            {
                                $vs='official';
                                
                                $query = "INSERT INTO users(username,email,phonenumber,company,OfficialV,Ename) VALUES ('$usr','$emi','$pho','$comp','$vs','$esc')";
                                
                                $result = mysqli_query($con,$query);


                            }
                            


                        else
                        { 

							
							$query = "INSERT INTO users(username,email,phonenumber,company,Ename) VALUES ('$usr','$emi','$pho','$comp','$esc')";
							
							$result = mysqli_query($con,$query);
                        }
					
							echo "Welcome '$usr'<br></br>";  
						
                        
                    }
						else {

                            if(!empty($_POST['checkVisit']))
                            {
                                $vs='official';
                                
                                $query = "INSERT INTO users(username,email,phonenumber,company,OfficialV) VALUES ('$usr','$emi','$pho','$comp','$vs')";
                                
                                $result = mysqli_query($con,$query);


                            }
                            
                            else{
							
							$query = "INSERT INTO users(username,email,phonenumber,company) VALUES ('$usr','$emi','$pho','$comp')";
							
							$result = mysqli_query($con,$query);
                            }
						}
			}
			
			
			
		} 	
		else 
		{
		   echo '<h1>MySQL Server is not connected</h1>';
		}      
?>



		<form action="http://localhost/register.php"  method="POST">
        
		<link rel="stylesheet" type="text/css" href="style.css">
		<div class="login-form">
  <div class="login-header">
		<h2> Registration</h2>
		</div>
		<div class="login">

		<div class="login-form">
		<br> <label> <b> Username: </b> </label> 
		<input type="text" name="username" placeholder="Username" required> 
		<br>
		<br> <label> <b> Email: </b> </label> 
		<input type="text" name="email" placeholder="Email" required> 
		<br>
		<br> <label> <b> Telephone: </b> </label> 
		<input type="text" name="phone" placeholder="Telephone" required > 
		<br>
		<br> <label> <b> Company Name: </b> </label> 
		<input type="text" name="company" placeholder="Company" required> 

<br></br>
		
		
		
		<script type="text/javascript">
    
			function EnableDisableTextBox(checkEscort) 
			{
				var escortName = document.getElementById("escortName");
				escortName.disabled = checkEscort.checked ? false : true;
				
				if (!escortName.disabled) 
				{
					escortName.focus();
				}
			}
		</script>
	
		<label for="checkVisit">
		<input type="checkbox" id="checkVisit" name="checkVisit" />
		official Visiter
	<br/>
	<br/>
	   
		<label for="checkEscort">
		<input type="checkbox" id="checkEscort" name="checkEscort" onclick="EnableDisableTextBox(this)" />
		With Company?
		
		</label>
		<br/>

		<input type="text" id="escortName" name="escortName" placeholder="Escort Name" disabled="disabled" />
		
		
		<br/>
		<br/>
		


		<button type="submit" class="button button4" Formaction="http://localhost/register.php" >Login</button>

		</div></div></div></div>
		<br> </br>
      </form>
	  
	</body>
</html>
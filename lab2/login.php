<?php
/*if(isset($_POST["btnLogin"]))
{
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="webtech_p";
	
	$cus_uname=$_POST["uname"];
	$cus_pass=$_POST["pass"];
	
	$connection=new mysqli($servername,$username,$password,$dbname);
	
	if($connection->connect_error)
	{
		die("Connection Failed: ".$connection->connect_error);
	}
	else
	{
		$sqlz="SELECT User_Name, Password from customer where User_Name='".$cus_uname."' and Password='".$cus_pass."')";
		$result=$connection->query(sqlz);
		if($result->num_rows>0)
		{
			echo "Successful!!!";
		}
	}
	
	
}*/
?>



<html>
<body>
	<h1>Registration</h1>
	<form action="#" method="post">
		Username:<input type="text" id="uname" name="uname"><br><br>
		Password:<input type="password" id="pass" name="pass"><br><br>
		<input type="Submit" value="Submit" name="btnLogin"><br><br>
	</form>
	<form action="registration.php" method="post">
		<a href="registration.php"><button name="btnSignfromLog">SignUp</button></a>
	</form>
	
</body>
</html>

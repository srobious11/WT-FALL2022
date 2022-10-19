<?php
if(isset($_POST["btnSignUpSub"]))
{
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="webtech_p";
	
	$cus_name=$_POST["name"];
	$cus_email=$_POST["email"];
	$cus_uname=$_POST["uname"];
	$cus_pass=$_POST["pass"];
	$cus_mobile=$_POST["mbl"];
	$cus_address=$_POST["address"];
	
	$connection=new mysqli($servername,$username,$password,$dbname);
	
	if($connection->connect_error)
	{
		die("Connection Failed: ".$connection->connect_error);
	}
	else
	{
		$sql="INSERT INTO customer(Full_Name, Email, User_Name, Password, Mobile_No, Address) VALUES('".$cus_name."','".$cus_email."','".$cus_uname."','".$cus_pass."',".$cus_mobile.",'".$cus_address."')";
		$result=$connection->query($sql);
		echo "Signup Successful!!!";
	}
	
}
?>

<html>
<body>
	<h1>Registration</h1>
	<form action="#" method="post">
		Name:<input type="text" id="name" name="name"><br><br>
		Email:<input type="text" id="email" name="email"><br><br>
		Username:<input type="text" id="uname" name="uname"><br><br>
		Password:<input type="password" id="pass" name="pass"><br><br>
		Mobile:<input type="number" id="mbl" name="mbl"><br><br>
		Address:<input type="text" id="address" name="address"><br><br>
		<input type="Submit" value="Submit" name="btnSignUpSub"><br>
	</form>
	<form action="login.php" method="post">
		<a href="login.php"><button name="btnLogin">LogIn</button></a>
	</form>
</body>
</html>







<!--
<form action="#" method="post">
<button name="hello" style="padding-top:10px ; padding-bottom: 10px; padding-left: 20px; padding-right: 20px; border-style: dotted; border-color: red; background-color: black; color: white;"> Hello </button>
</form>
--!>

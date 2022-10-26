<?php 
	session_start(); 
    if(isset($_POST['Submit'])){
    $logins = array('sunny' => '123456','username1' => 'password1','username2' => 'password2');
    $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
    $Password = isset($_POST['Password']) ? $_POST['Password'] : '';
    if (isset($logins[$Username]) && $logins[$Username] == $Password){
         $_SESSION['UserData']['Username']=$logins[$Username];
        header("location:index.php");
        exit;
    } 
	else{
            $msg="<span>Invalid Login Details</span>";
		}
    }
?>
<form action="" method="post" name="Login_Form">
  <table>
    <tr>
      <td <h3>Login Page</h3></td>
    </tr>
    <tr>
      <td align="right" valign="top">Username</td>
      <td><input name="Username" type="text" class="Input"></td>
    </tr>
    <tr>
      <td align="right">Password</td>
      <td><input name="Password" type="password" class="Input"></td>
    </tr>
    <tr>
      <td> </td>
      <td><input name="Submit" type="submit" value="Login" class="Button3"></td>
    </tr>
  </table>
</form>

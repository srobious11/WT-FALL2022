<?php
$errorCount=0;
if(isset($_REQUEST["login"]))
{
    if(file_exists("../users.json"))
    {
        if(isset($_REQUEST["username"])|| isset($_REQUEST["password"]))
        {
            if($_REQUEST["username"]=="")
            {
                echo "<br> Username is required";
                $errorCount++;
            }
            if($_REQUEST["password"]=="")
            {
                echo "<br> Password is required";
                $errorCount++;
            }
            if($_REQUEST["password"]!=="" && strlen($_REQUEST["password"])<5)
            {
                echo "<br>please use your correct password !!";
            }
            $data=json_decode(file_get_contents("../users.json"));
            foreach ($data as $user=>$usr)
            {
              $users[$user]=array($usr);
              if($user==$_REQUEST["username"]&&$usr->Password==$_REQUEST["password"])
              {
                echo $_REQUEST["username"]."<b>welcome ";
                return;
              }
              
           }

        }
        else{
              echo "<br> please try with valid username and password<br>";
        }
    }
    else{
        echo "<br>plase try to register again or try again later";
    }
}
?>
<body>
    <form method="POST" action="">
        <table>
        <tr>
            <td>
                <label>Username</label>
            </td>
            <td>
                 <input name="username"/>
            </td>
        </tr>
        <tr>
            <td>
                <label>Password</label>
            </td>
            <td>
                 <input name="password"/>
            </td>
        </tr>
        </table>
        <tr>
            <td>
                <input type="submit" name="login"></input>
            </td>
        </tr>
    </form>
</body>

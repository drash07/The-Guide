<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'register');
define('DB_USER','root');
define('DB_PASSWORD','');
 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

/*
$ID = $_POST['user'];
$Password = $_POST['pass'];
*/
function SignIn()
{
session_start();   //starting the session for user profile page
if(!empty($_POST['user']))   //checking the 'user' name which is from Sign-In.html, is it empty or have some text
{
    $query = mysql_query("SELECT *  FROM reg where Name = '$_POST[user]' AND Password = '$_POST[pass]'") or die(mysql_error());
    $row = mysql_fetch_array($query);
    if(!empty($row['Name']) AND !empty($row['Password']))
    {  
	$_SESSION['loggedin'] = true;
       $_SESSION['Name'] = $row['Password'];

	header('Location: logoutwin.html');
        exit;
    }
    else
{
              echo '<script type="text/javascript">'; 
        echo 'alert("Sorry....You have entered wrong username or password....please go back")'; 
        echo '</script>'; 

}
}
  
    
}
if(isset($_POST['submit']))
{
    SignIn();
}
 
?>
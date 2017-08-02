<?php
$database="register"; 
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gen'];
$add=$_POST['Address'];
$pin=$_POST['Pin'];
$mob=$_POST['mob'];
$email=$_POST['em'];
$pass=$_POST['pw1'];
$cpass=$_POST['pw2'];
$country=$_POST['dropdown'];
$feedback=$_POST['Comments'];
    $con = mysql_connect("localhost","root" ,"");
    if (!$con)
    {
    die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("$database", $con);

$c=0;
if($name=="")
{
echo "<script type='text/javascript'>\n";
echo"alert('Please Enter Name')";
echo "</script>"; 
$c=$c+1;
return $c;
}
if($age<18)
{
echo "<script type='text/javascript'>\n";
echo"alert('Please Enter Valid Age');\n";
echo "</script>"; 
$c=$c+1;
return $c;
}


if($pin=="")
{
echo "<script type='text/javascript'>\n";
echo"alert('Please Enter valid pin')";
echo "</script>"; 
$c=$c+1;
return $c;
}

if($mob=="")
{echo "<script type='text/javascript'>\n";
echo"alert('Please Enter valid Mobile Number')";
echo "</script>"; 
$c=$c+1;
return $c;
}
if($email=="")
{
echo "<script type='text/javascript'>\n";
echo"alert('Please Enter valid email')";
echo "</script>"; 
$c=$c+1;
return $c;
}

if($pass=="")
{
echo "<script type='text/javascript'>\n";
echo"alert('Please Enter A Password')";
echo "</script>"; 
$c=$c+1;
return $c;
}
else
if($pass!=$cpass)
{
echo "<script type='text/javascript'>\n";
echo"alert('Passwords Do Not Match.  Re-enter The Password')";
echo "</script>"; 
}

if($c==0)
{
$query = "INSERT INTO reg(Name,Age,Gender,Address,pincode,Mobile,Email,Password,Conf_pass,Country,Feedback)VALUES ('$name','$age','$gender','$add','$pin','$mob','$email','$pass','$cpass','$country','$feedback')";
mysql_query($query);

header('Location: int.html');

mysql_close();
}
?>


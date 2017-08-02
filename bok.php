<?php
$database="book"; 
$name=$_POST['name'];
$number=$_POST['people'];
$rest=$_POST['choice'];
$payment=$_POST['dropdown'];
$date=$_POST['date'];
$tym=$_POST['time'];
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
if($payment=="")
{
echo "<script type='text/javascript'>\n";
echo"alert('Please Enter Payment Type');\n";
echo "</script>"; 
$c=$c+1;
return $c;
}


if($rest=="")
{
echo "<script type='text/javascript'>\n";
echo"alert('Please select desired restraunt')";
echo "</script>"; 
$c=$c+1;
return $c;
}

if($c==0)
{
$query = "INSERT INTO bookatable(name,people,restraunt,date,time,payment)VALUES ('$name','$number','$rest','$date','$tym','$payment')";
mysql_query($query); 
header('Location: conf.html');

mysql_close();
}
?>


<?php
mysql_connect("localhost" , "root" , "") or die ("disconnected");
mysql_select _db("tob") or die ("not connected");

echo $name=$_POST['nm'];
echo $email=$_POST['em'];
echo $pass=$_POST['pw'];
echo $gen=$_POST['gn'];
$query = mysql_query("insert into register values('$name','$email','$pass','$gen')");
if ($query)
echo "Registration Successful";
else
echo "Try Again";
?>



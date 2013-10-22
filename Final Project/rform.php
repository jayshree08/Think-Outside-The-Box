<?php
session_start();
define('DB_NAME','tob');
define('DB_USER','root');
define ('DB_PASSWORD','');
define('DB_HOST','localhost');

$link = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);

if(!$link)
{
die('Could not connect:'. mysql_error());
}
$db_selected= mysql_select_db(DB_NAME,$link);

if (!$db_selected)
{
die('Cant use'. DB_NAME . ':' . mysql_error());
}
$value1=$_POST['nam'];
$value2=$_POST['ema'];
$value3=$_POST['pwd'];
$value4=$_POST['gen'];

$sq= "INSERT INTO register (Name,Email,Password,Gender) VALUES ('$value1','$value2','$value3','$value4')";


mysql_query($sq) or die('Error:'.mysql_error());

mysql_close();
	header("location:login.php");

?>




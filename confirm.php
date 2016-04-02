<?php
session_start();
?>

<!doctype html>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />

<html>
<head><title>confirm</title></head>
<body>

  


<?php
$code=$_POST['code'];
$account=$_POST['account'];
//$code='ysi';
//$account='ysi';

$valid=0;

$username = "imagepr2_admin";
$password = "1234";
$hostname = "localhost"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");
  
$selected = mysql_select_db("imagepr2_mainDB",$dbhandle) 
  or die("Could not select examples");
  
  //$result = mysql_query("SELECT code, used FROM passcodes ORDER BY id");
//fetch the data from the database			

  mysql_set_charset("utf8");
  


  
  $result = mysql_query("SELECT accountName, password FROM Users")
  or die("Could not select accountN");
//fetch tha data from the database

while ($row = mysql_fetch_array($result)) {
	//echo $row{'accountName'}." ".$account." \n";
	if ($account==$row{'accountName'}) {
		if ($code==$row{'password'}){
		$valid=1;
		break;
		}
		else {
		$valid=0;
		break;
		} } else {
		$valid=-1;
		}
		
}
  
  if ($valid==0){
  die("wrong password");}
  
   if ($valid==-1){
  die("wrong user name");}
  
  
  header( "refresh:2;url=index.php" );
  $_SESSION["username"] = $account;
  die("login successfully");

?>


</body>
</html>
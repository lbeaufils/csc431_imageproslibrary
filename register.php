<!doctype html>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />

<html>
<head><title>login</title></head>
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
//fetch tha data from the database			

  mysql_set_charset("utf8");
  
 $names = mysql_query("SELECT accountName FROM Users")
  or die("Could not select accountN");
//fetch tha data from the database

while ($row = mysql_fetch_array($names)) {
	//echo "$newvotes";
	if ($account==$row{'accountName'}) {
	die("account name already exists");} 
	
  }

  $re = mysql_query("select COUNT(*) as c FROM Users");
  $cIDs=0;
  while ($row = mysql_fetch_array($re)) {
	//echo "$newvotes";
	$cIDs=$row{'c'}+1;
	

	}
  
  mysql_query("INSERT INTO  `imagepr2_mainDB`.`Users` (`UID` ,`name` ,`password` ,`accountName`) VALUES (".$cIDs.",  'New User',  '".$code."','".$account."');")
  or die("unsucess INSERT INTO  `imagepr2_mainDB`.`Users` (`UID` ,`name` ,`password` ,`accountName`) VALUES (".$cIDs.",  'New User',  '".$code."','".$account."');");;

//mkdir("/images/users/".$account, 0700);
//mkdir("/images/users/".$account."/1", 0777);

die("register successfully");
?>


</body>
</html>
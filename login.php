<!doctype html>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />

<html>
 <!--Edits start here-->
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="style/style.css" />
<link rel="stylesheet" type="text/css" href="style/colour_blue.css" />
<link rel="stylesheet" type="text/css" href="style/image_viewer.css" />

<div id="logo">
<h1>Image Processing Library</h1>
<div id="links"></div>
</div>
<div id="content">
<div id = "phpContent">

<!--end here-->

<head><title>Login</title></head>
<body>

<?php
mysql_set_charset("utf8");
?>
<table>
 <form action="confirm.php" method="POST">
Account &nbsp;: <input type="text" name="account"><br>
Password: <input type="password" name="code"><br>
<tr><td><input type="submit" name="submit" value="submit" /></td></tr>

</form>
</table>
<br><br>
<table>
 <form action="register.php" method="POST">
New account &nbsp;&nbsp;: <input type="text" name="account"><br>
New password: <input type="password" name="code"><br>
<tr><td><input type="submit" name="register" value="register" /></td></tr>

</form>
</table>
</div>
</div>


</body>
</html>

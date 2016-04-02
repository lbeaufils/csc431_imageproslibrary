<!doctype html>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />

<html>
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


</body>
</html>
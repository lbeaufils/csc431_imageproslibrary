<?php
session_start();
unset($_SESSION['username']);

die("you have successfully logged out.");

?>
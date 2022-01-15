<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["username"]);
unset($_SESSION["groupID"]);
header("location:login.php");
exit;
?>
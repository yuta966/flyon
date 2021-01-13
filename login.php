<?php
session_start();

$login = "login";
$_SESSION['login'] = $login;
header('Location: index.php');
exit();

?>
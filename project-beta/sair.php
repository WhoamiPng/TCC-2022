<?php

unset($_COOKIE['user']);
unset($_COOKIE['id']);

setcookie("id", $_COOKIE['user'], time() - (86400 * 30), "/");
setcookie("user", $_COOKIE['id'], time() - (86400 * 30), "/");
header("Location: index.php");
session_destroy();


?>
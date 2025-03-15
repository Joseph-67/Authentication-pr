<?php
session_start();
// destroy session
session_destroy();
// redirect
header('Location: login.php');
exit();
?>

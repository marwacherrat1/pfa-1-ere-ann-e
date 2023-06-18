<?php
session_start();
session_destroy();
header('location: ACC1.php');
exit;
?>
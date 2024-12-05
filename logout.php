<?php
session_start();
session_destroy();
header('laction:index.php');
?>

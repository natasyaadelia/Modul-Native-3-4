<?php
session_start();
session_destroy();
header("Location: http://localhost/php/siperpus/login/index.php");
?>
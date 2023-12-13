<?php
$ipAddress = $_SERVER['REMOTE_ADDR'];
$logFile = 'ip_log.txt';
file_put_contents($logFile, $ipAddress . PHP_EOL, FILE_APPEND);
?>

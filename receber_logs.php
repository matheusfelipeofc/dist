<?php
$log = $_POST['log'];
file_put_contents('log.txt', $log . "\n", FILE_APPEND);
echo "<h1>Log Recebido</h1>";
echo "<pre>$log</pre>";
?>

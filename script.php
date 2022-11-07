#!/usr/bin/php
<?php
    $uri = $_SERVER['REQUEST_URI'];
$output = shell_exec('echo $uri > /tmp/test.txt');
echo "<pre>$output</pre>";
?>

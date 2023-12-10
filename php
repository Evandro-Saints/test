<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: accept, origin, content-type");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");

$body = @file_get_contents('php://input');
$f = fopen("/tmp/jsonresponse.txt","a");
$c = $_SERVER['REMOTE_ADDR'].":".$body."\n";
fwrite($f,$c);
fclose($f);
?>
[alert(1)]

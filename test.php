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




<!---<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
  @keyframes colorChange {
    0% { color: red; }
    25% { color: blue; }
    50% { color: green; }
    75% { color: orange; }
    100% { color: purple; }
  }

  .animated-text {
    font-size: 24px;
    font-weight: bold;
    animation: colorChange 5s infinite;
  }
  
  background-color {
    { color: black; }
  }
</style>
<title>Animated Text</title>
</head>
<body>
  <div class="animated-text">Evandro-Saints!</div>
</body>
</html>


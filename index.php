<?php
$file="LogFile.log";   
$col_zap_maximum=4999;        

function getRealIpAddr() {
  if (!empty($_SERVER['HTTP_CLIENT_IP']))        // Определяем IP
  	{ $ip=$_SERVER['HTTP_CLIENT_IP']; }
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))    // Если IP через прокси
  	{ $ip=$_SERVER['HTTP_X_FORWARDED_FOR']; }
  else { $ip=$_SERVER['REMOTE_ADDR']; }
  	return $ip;
}

if (strstr($_SERVER['HTTP_USER_AGENT'], 'YandexBot')) {$bot='YandexBot';}
elseif (strstr($_SERVER['HTTP_USER_AGENT'], 'Googlebot')) {$bot='Googlebot';}
else { $bot=$_SERVER['HTTP_USER_AGENT']; }

$ip = getRealIpAddr();
$date = date("H:i:s d.m.Y");      
$home = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];    
$lines = file($file);
while(count($lines) > $col_zap_maximum) array_shift($lines);
$lines[] = $date."|".$bot."|".$ip."|".$home."|\r\n";
file_put_contents($file, $lines);
?>
<html>
<head>
 <style type='text/css'>
  td.zz { padding-left: 3px; font-size: 9pt; padding-top: 2px; font-family: Arial; }
 </style>
</head>
<body>
 <div style="text-align: center;">
  <p><h4>Вы посетили эту страницу</h4></p>
  <p><h4>теперь можно посмтреть результаты в saw.php</h4></p>
 </div>
</body>
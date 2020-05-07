<?php
error_reporting(0);
if (isset($_GET[col]))
 $col=$_GET[col];
else $col=50;
 $file=file("LogFile.log"); 
 ?>

<html>
<head>
 <style type='text/css'>
  td.zz { padding-left: 3px; font-size: 9pt; padding-top: 2px; font-family: Arial; }
 </style>
</head>

<body>
<div style="text-align: center;">
<?php
if ($col>sizeof($file)){ 
 $col=sizeof($file);}
echo "Последние <b>".$col."</b> посещений сайта:"; 
?>

<table style="width: 700px; border: 0;">
<tr bgcolor="#eeeeee">
 <td class="zz" style="width: 100px;"><b>Время, дата</b></td>
 <td class="zz" style="width: 220px;"><b>Кто посещал</b></td>
 <td class="zz" style="width: 100px;"><b>тип должно быть IP, но у меня локально все, поэтому выводится просто 1</b></td>
 <td class="zz" style="width: 280px;"><b>Посещенный URL</b></td>
</tr>

<?php
 for ($si=sizeof($file)-1; $si+1>sizeof($file)-$col; $si--) {
 $string=explode("|",$file[$si]);
 $q1[$si]=$string[0]; // дата и время
 $q2[$si]=$string[1]; // имя 
 $q3[$si]=$string[2]; // ip 
 $q4[$si]=$string[3]; // URL
 echo '<tr bgcolor="#eeeeee"><td class="zz">'.$q1[$si].'</td>';
 echo '<td class="zz">'.$q2[$si].'</td>';
 echo '<td class="zz">'.$q3[$si].'</td>';
 echo '<td class="zz">'.$q4[$si].'</td></tr>';
}
echo '</table>';
echo '</body></html>';
?>
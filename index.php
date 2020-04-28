<?php
error_reporting(0);
echo "<link rel='stylesheet' href='style.css'>";
if($_GET['c'] == ''){
  $fp = fopen("comment.txt", "r");
  if ($fp) 
  {
  	echo'<div class="razdel">';
	while (!feof($fp))
	{
		$mytext = fgets($fp, 999);
		echo $mytext."<br />";
	}
	echo'</div>';
  }
  else echo "Ошибка при открытии файла";
  fclose($fp);
 
  print "
  <form>
    <input type='hidden' name='c' value='obr' />
    <b>Имя:</b> <input type='text' name='name' value='' /><br>
    <b>Отзыв:</b><br>
    <textarea name='content'></textarea> 
    <input type='submit' value='Оставить свой отзыв' />
  </form>
  ";}
elseif($_GET['c'] == 'obr'){
  $znach = array(                 
    1 => $_GET['name'],
    2 => $_GET['content']
  );
  
  if( !$znach[1] ){ print "Поле <b>Имя</b>, незаполненно <br> <meta http-equiv='Refresh' content='4; url=javascript:history.go(-1);' ><a href='javascript:history.go(-1);'><<<Назад</a> <br>"; }else
  if( !$znach[2] ){ print "Поле <b>Отзыв</b>, незаполненно <br> <meta http-equiv='Refresh' content='4; url=javascript:history.go(-1);' ><a href='javascript:history.go(-1);'><<<Назад</a> <br>"; }else{
    $pattern = '/[a-zA-Z0-9.]+@((?!bsuir)[a-zA-Z0-9.-]+)\.[a-zA-Z0-9]+/';
    $replacements = '#Cтоп e-mail#';
    $znach[2] = preg_replace($pattern, $replacements, $znach[2]);
    $fp = fopen("comment.txt", "a+"); 
    $mytext = "\r\n" . "Имя: ". $znach[1] . "\r\n" . "Отзыв: " . "\r\n" .$znach[2] . "\r\n";
    $test = fwrite($fp, $mytext);
    if ($test) echo 'Данные в файл успешно занесены.';
    else echo 'Ошибка при записи в файл.';
    fclose($fp); 
 
    print "<meta http-equiv='Refresh' content='0; url=?c=' >";
  }
}
?>
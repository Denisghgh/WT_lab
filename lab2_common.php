<?php
    $statesArr = ["passive", "passive", "passive", "passive", "passive"];
   
    if (isset($_GET["Num"]))
    {
        $num = $_GET["Num"];
	    $statesArr[$_GET["Num"] - 1] = "activ";
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Главная</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8 " />
	<link href="css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700&display=swap" rel="stylesheet">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
</head>
  <body >
  <div class="index-wrapper">
		<div class="header">
			<header class="header-box">
				<a href="#" class="logo">
					<img src="images1/Logo.png" alt="logo">
				</a>
				<nav>
					<ul>
						<li><a href="index.php?Num=1" class="<?php echo $statesArr[0]?>">Главная</a></li>
						<li><a href="purchase.php?Num=2" class="<?php echo $statesArr[1]?>">купить</a></li>
						<li><a href="services.php?Num=3" class="<?php echo $statesArr[2]?>">прочие услуги</a></li>
						<li><a href="info.php?Num=4" class="<?php echo $statesArr[3]?>">О нас</a></li>
						<li><a href="contacts.php?Num=5" class="<?php echo $statesArr[4]?>">Контакты</a></li>
					</ul>
				</nav>
			</header>
		
 </body>

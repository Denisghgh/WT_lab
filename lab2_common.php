
<?php
    $statesArray = ["passive", "passive", "passive", "passive", "passive"];

    if (isset($_GET["Num"]))
    {
        $Num = $_GET["Num"];
		$StatesArr[$_GET["Num"]-1] = "activ";
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Главная</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8 " />
	<link rel="stylesheet" type="text/css" href="css/lab2.css" >
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700&display=swap" rel="stylesheet">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
</head>

  <body >
          <div class="wrapper">
              <div class="referencesList">
                  <a href="lab2_ind.php?Num=1" class="<?php echo $StatesArr[0]?>"> Ссылка </a>
                  <a href="lab2_ind.php?Num=2" class="<?php echo $StatesArr[1]?>"> Ссылка </a>
                  <a href="lab2_ind.php?Num=3" class="<?php echo $StatesArr[2]?>"> Ссылка </a>
                  <a href="lab2_ind.php?Num=4" class="<?php echo $StatesArr[3]?>"> Ссылка </a>
				  <a href="lab2_ind.php?Num=5" class="<?php echo $StatesArr[4]?>"> Ссылка </a>	
			  </div>
          </div>
 </body>

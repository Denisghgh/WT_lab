
<?php
$month = ['ЯНВАРЯ', 'ФЕВРАЛЯ', 'МАРТА', 'АПРЕЛЯ', 'МАЯ', 'ИЮНЯ', 'ИЮЛЯ', 'АВГУСТА', 'СЕНБТЯБРЯ', 'ОКТЯБРЯ', 'НОЯБРЯ', 'ДЕКАБРЯ'];

function HolidayChecked($time){
    $fd = fopen("holidays.txt", 'r') or die("не удалось открыть файл");
    while(!feof($fd)){
        $holiday = fgets($fd);
        if (date("d.m.Y",strtotime($holiday)) == $time){
            return false;
        }
    }
    return true;
}

function GetPossible($date, $days_count){
    while (!HolidayChecked(date("d.m.Y", mktime(0, 0, 0, date('m', strtotime($date)), date('d', strtotime($date)) + $days_count, date('Y', strtotime($date)))))){
        $days_count++;
    }
    return date("d.m.Y", mktime(0, 0, 0, date('m', strtotime($date)), date('d', strtotime($date)) + $days_count, date('Y', strtotime($date))));
}

function delivery($date){
    if ((int)date("H", strtotime($date)) <= 11){
        return GetPossible($date, 1);
    }
    else{
        return GetPossible($date, 2);
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>3Lab</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
  </head>
  <body>
		<h4>
		<form method="GET">
			  Select Delivery Date:
              <input name="date" class="form-control" type="date"
                  value="<?php echo date("Y-M-D",strtotime(delivery(date("d.m.Y")))) ?>"
                  min="<?php echo date("Y-M-D",strtotime(delivery(date("d.m.Y")))) ?>"
                  max="<?php echo date("Y-M-D",strtotime("+1 month")) ?>">
              <div>
                  <input class="btn btn-primary" type="submit" value="Possible Delivery Date ->">
              </div>			  
		
	    </form>
			<?php
			    if (isset($_GET['date'])){
					$date = delivery($_GET['date']);
					echo date("d",strtotime($date))." ".$month[date('n', strtotime($date))-1]." ".date("Y",strtotime($date));
				}	
            ?>
		</h4>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>labWork2_Individual</title>
  </head>
  <body>
        <?php
            if (isset($_GET['Num']) && is_numeric($_GET['Num'])){
                echo array_sum(str_split($_GET['Num']));
            }
        ?>
        <form method="GET">
            <p>Write a Number: <input type="text" name="Num" /></p>
            <p><input type="submit" value="Count"></p>
        </form>
    </body>
</html>
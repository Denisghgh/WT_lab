<?php include 'script.php' ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab7</title>
</head>
<body>
    <form method="POST">
        <textarea class="input-field" name="letter" required></textarea>
        <input type="submit" class="submit-button"/>
    </form>
    <div>
        <p><?php Send(); ?></p>
    </div>
</body>
<?php
    $host = 'localhost';
    $database = 'lab_8';
    $user = 'root';
    $password = 'root';
    $browserInfo = get_browser($_SERVER['HTTP_USER_AGENT'], true);//если что, вдруг, надо установить browscap.ini и прописать путь в php.ini, чтобы корректо отображалось название браузера. Но в качестве теста подойдет и "Vague"
    $browserName = $browserInfo['browser'];
    $link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
    $query ="SELECT * FROM browsers WHERE name = '$browserName' ";

    if ($column = mysqli_query($link, $query)) {
        if ($tmp = mysqli_fetch_array($column)) {
            $query = "UPDATE browsers SET count = count + '1' WHERE name = '$browserName'";
            if (!$result = mysqli_query($link, $query)) {
                echo "Error";
            }
        } else {
            $query = "INSERT INTO browsers VALUES (NULL, '$browserName', '1')";
            if (!$result = mysqli_query($link, $query)) {
                echo 'Error';
            }
        }
    }

    $query = "SELECT * FROM browsers ORDER BY count DESC";
    if ($table = mysqli_query($link, $query)) {
        echo '<table border=1>';
        echo '<tr>
        			<td>id</td>
        			<td>name</td>
        	  	    <td>count</td>
        	  </tr>';
        while ($row = mysqli_fetch_array($table)) {
            echo '<tr>';
            foreach ($row as $key => $value) {
                if (!is_numeric($key)) {
                    if (empty($value)) {
                        echo '<td>Vague</td>';
                    } else {
                        echo "<td>$value</td>";
                    }
                }
            }
            echo '</tr>';
        }
        echo '</table>';
    }

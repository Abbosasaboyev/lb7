<?php
    $email = $_GET['mymail'];

    $newmail = htmlspecialchars($email, ENT_QUOTES);  
if (preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i", $newmail)) {
   echo "Адрес указан корректно.";
   echo "<br>";
   echo $newmail;
    echo "<br>";
}else{
   echo "Адрес указан не правильно.";
}


?>
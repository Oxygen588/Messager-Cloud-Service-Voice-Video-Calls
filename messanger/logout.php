<?php
      $cookie_name1 = "Csession";
      $cookie_value1 = "0";
      setcookie($cookie_name1, $cookie_value1, time() + (86400 * 30), "/"); // 86400 = 1 day
      $cookie_name11 = "NAMEsaveeee";
      $cookie_value11 = "0";
      setcookie($cookie_name11, $cookie_value11, time() + (86400 * 30), "/"); // 86400 = 1 day
?>

<meta http-equiv="refresh"
  content="1; url = http://localhost/project/" />  
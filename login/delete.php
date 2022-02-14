<?php
$path = $_GET["path"];
echo "Deleting FILE!";
unlink($path);
?>
<meta http-equiv="refresh" content="1; URL=http://localhost/project/login/registerac.php" />
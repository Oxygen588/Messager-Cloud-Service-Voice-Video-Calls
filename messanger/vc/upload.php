<?php    

    $data = file_get_contents('php://input');
    // write the data out to the file
    $fp = fopen("audio/".$_GET["id"].".mp3", "wb");
    
    fwrite($fp, $data);
    fclose($fp);
    
    sleep(1.5);
    unlink("audio/".$_GET["id"].".mp3");
?>
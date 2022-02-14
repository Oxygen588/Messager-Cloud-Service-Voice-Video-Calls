<!DOCTYPE html>
<?php

        function generateRandomString($length = 10) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }
        function generateRandomString1($length = 12) {
          $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
          $charactersLength = strlen($characters);
          $randomString = '';
          for ($i = 0; $i < $length; $i++) {
              $randomString .= $characters[rand(0, $charactersLength - 1)];
          }
          return $randomString;
      }

 
$folder = generateRandomString();
$foder = "upload/".$folder."/";
            mkdir('upload/'.$folder, 0777, true);

            if ($_FILES["file"]["size"] < 2000000000000)
              {
              if ($_FILES["file"]["error"] > 0)
                {
                echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
                }
              else
                {
                if (file_exists($foder . $_FILES["file"]["name"]))
                  {
                  echo $_FILES["file"]["name"] . " already exists. ";
                  }
                else
                  {
                  move_uploaded_file($_FILES["file"]["tmp_name"],
                  $foder . $_FILES["file"]["name"]);

                $myfile = fopen($foder."index.html", "w") or die("Unable to open file!");
                $foder = "upload/".$folder."/";


                ?>


                <?php
       
                $new = str_replace(' ', '%20', $_FILES["file"]["name"]);
                $asdasdasd = $foder.$new;

                $ucode = generateRandomString1();
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "test";
                $date = date("Y/m/d");
                
                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                }
                echo '<div style="font-size:0.55em;color:#0e3c68;font-weight:bold;">download link: http://localhost/project/download.php?id='.$ucode.'</span></div>';
                $download = "http://localhost/project/download.php?id='.$ucode";
                $sql = "INSERT INTO onetimedownload (date, id, download)
                VALUES ('$date', '$ucode', '$asdasdasd')";
                ?>
 <script>
</script>
              <?php
                if ($conn->query($sql) === TRUE) {
                
  
                
                
                
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
                


                  }
                }
              }
            else
              {
              echo "Invalid file";
              }
            ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>

*{
 margin: 0;
 padding: 0;
}

html{
    width: 100vw;
    height: 100vh;
}

/* CSS which you need for blurred box */
body{
 background-repeat: no-repeat;
 background-attachment: fixed;
 background-size: cover;
 background-position: top;
 background-image:url(https://images.pexels.com/photos/924824/pexels-photo-924824.jpeg);
 width: 100%;
 height: 100%;
 font-family: Arial, Helvetica;
 letter-spacing: 0.02em;
  font-weight: 400;
 -webkit-font-smoothing: antialiased; 
}

.blurred-box{
  position: relative;
  width: 250px;
  height: 350px;
  top: calc(50% - 175px);
  left: calc(50% - 125px);
  background: inherit;
  border-radius: 2px;
  overflow: hidden;
}

.blurred-box:after{
 content: '';
 width: 300px;
 height: 300px;
 background: inherit; 
 position: absolute;
 left: -25px;
 left position
 right: 0;
 top: -25px;  
 top position 
 bottom: 0;
 box-shadow: inset 0 0 0 200px rgba(255,255,255,0.05);
 filter: blur(10px);
}


/* Form which you dont need */
.user-login-box{
  position: relative;
  margin-top: 50px;
  text-align: center;
  z-index: 1;

  
}
.user-login-box > *{
  display: inline-block;
  width: 200px;

}

.user-icon{
  width: 100px;
  height: 100px;
  position: relative;
  border-radius: 50%;
  background-size: contain;
  background-image: url(https://pbs.twimg.com/profile_images/725321660484583424/ArQ4fM3k.jpg);
}

.user-name{
  margin-top: 15px;
  margin-bottom: 15px;
  color: white;
}

input.user-password{
  width: 120px;
  height: 18px;
  opacity: 0.4;
  border-radius: 2px;
  padding: 5px 15px;
  border: 0;
}
</style>
<div  style="  border: 2px;
  border-radius: 25px;" class="blurred-box">
  <div class="user-login-box">
<?php
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
if (isset($_GET['id'])){
$uname = $_GET['id'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM onetimedownload WHERE id='$uname'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    ?>


<?php

?>
<div>

    <?php

  $download = "login/".$row["download"];;

 
  $conn->close();
 ?>
 <!DOCTYPE html>
<html>
<body>
<?php
?>
<a href="<?php echo $download; ?>" download>
<button>Download</button>



<?php

  }
 }
 }
  else {
  if(isset($_GET['pshare'])){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["password"])) {
      } else {
        $pshare = $_GET['pshare'];
        $name = test_input($_POST["password"]);
        $pass = $_POST["password"];
        $owner = $_COOKIE["myuname"];
   
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "test";
        $date = date("Y/m/d");
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "SELECT * FROM pshare WHERE password='$pass' AND download='$pshare'";
        $result = $conn->query($sql);
        if ($result->num_rows == 1) {
          // output data of each row
    

              
          while($row = $result->fetch_assoc()) {
   
            $download = $row["path"];
            ?>
            <a href="<?php echo $download; ?>" download>
            <button>Download</button>
<?php
          }
             
      
                
         
    
        // output data of each row
       mysqli_num_rows ( $result );
    
      
        
        // Create connection
      //    $conn = new mysqli($servername, $username, $password, $dbname);
      //    $sql = "INSERT INTO pshare (path, password, owner, download)
       //   VALUES ('$foder', '$pass', '$owner','$dwnd')";
       //                   if ($conn->query($sql) === TRUE) {
                    
      
                    
                    
                    
       //                   } else {
       //                     echo "Error: " . $sql . "<br>" . $conn->error;
       //                   }
        }else{
          echo "Wrong password!";
        }
    
      }
     }
    
 
    
    ?>
    
    <p><span class="error"></span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])."?pshare=".$_GET["pshare"];?>">  
      File Password: <input type="password" name="password" value="">
      <input type="submit" name="submit" value="Submit">  
      <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "test";
       $owner = $_COOKIE["myuname"];
  }
}
  

?>
 


 
 
 
 
 
 
 
 
 </body>
</html>
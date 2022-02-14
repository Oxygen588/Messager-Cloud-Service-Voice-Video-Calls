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
<?php
session_start();
?>
<?php
   echo $_GET["path"];
?>
<html>
   <body>
   <div  style="  border: 2px;
  border-radius: 25px;" class="blurred-box">
  <div class="user-login-box">
 
<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";
function generateRandomString1($length = 12) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["password"])) {
  } else {
    $name = test_input($_POST["password"]);
    $foder = "login/".$_GET["path"];
    $pass = $_POST["password"];
    $owner = $_COOKIE["myuname"];
    $dwnd = generateRandomString1();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";
    $date = date("Y/m/d");
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT * FROM pshare WHERE path='$foder' AND owner='$owner'";
    $result = $conn->query($sql);
    if ($result->num_rows == 0) {
      // output data of each row

      $row = mysqli_num_rows($result);
          

         
  
            if ($row=='0'){
                  $sql1 = "INSERT INTO pshare (path, password, owner, download)
      VALUES ('$foder', '$pass', '$owner','$dwnd')";
                      if ($conn->query($sql1) === TRUE) {
                
  
                
                
                
                      } else {
                        echo "Error: " . $sql1 . "<br>" . $conn->error;
                      }
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
      $sql = "UPDATE pshare SET password='$pass' WHERE owner='$owner'";

      if ($conn->query($sql) === TRUE) {
        echo "Password succesfully changed!";
      } else {
       echo "Error";
}
    }

  }
 }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<p><span class="error"></span></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])."?path=".$_GET["path"];?>">  
  Set Password: <input type="password" name="password" value="<?php echo $email;?>">
  
  <input type="submit" name="submit" value="Submit">  
  <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "test";
   $foder = "login/".$_GET["path"];
   $owner = $_COOKIE["myuname"];
   $conn = new mysqli($servername, $username, $password, $dbname);
  $sql = "SELECT * FROM pshare WHERE path='$foder' AND owner='$owner'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "http://localhost/project/download.php?pshare=".$row["download"];
    }
}
  ?>
</form>
  </div>
  
</div>

      
   </body>
</html>
<a href="registerac.php" style="  
  background-color:rgba(255,255,255,.8);
  border-radius:.15em;
  box-shadow:0 0 .25em rgba(0,0,0,.25);
  box-sizing:border-box;
  left:93%;
  width:120px;
  height:40px;
  position:fixed;
  text-align:center;
  top:12%;
  transform:translate(-50%, -50%);" class="w3-button w3-black">Back to home</a>
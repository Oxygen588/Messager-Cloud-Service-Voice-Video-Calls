<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  cursor: pointer;
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn, .dropbtn:focus {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.show {
  display: block;
}
</style>
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

</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<head>Your files</head>
<a href="uploadfile.php" style="  
  background-color:rgba(255,255,255,.8);
  border-radius:.15em;
  box-shadow:0 0 .25em rgba(0,0,0,.25);
  box-sizing:border-box;
  left:93%;
  width:120px;
  height:40px;
  position:fixed;
  text-align:center;
  top:2%;
  transform:translate(-50%, -50%);" class="w3-button w3-black">File Upload</a>
  <a href="logout.php" style="  
  background-color:rgba(255,255,255,.8);
  border-radius:.15em;
  box-shadow:0 0 .25em rgba(0,0,0,.25);
  box-sizing:border-box;
  left:93%;
  width:120px;
  height:40px;
  position:fixed;
  text-align:center;
  top:6%;
  transform:translate(-50%, -50%);" class="w3-button w3-black">Log out</a>
<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ((isset($_COOKIE["Csession"]))&&($_COOKIE["Csession"]<>"0")){
  $csession = $_COOKIE["Csession"];
  $uname = "";
$code = "";
$password1 = "";
}else{
  $csession = "0";
  $uname = $_POST['username'];
$code = $_POST['code'];
$password1 = $_POST['password'];
}
$sql = "SELECT * FROM test WHERE Name='$uname' AND code='$code' OR Csession='$csession'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {



    if((password_verify($password1, $row["Pass"]))||($csession<>"0")) {
      $_SESSION['name'] = $row["Name"];
      $nameeeee = $row["Name"];
      $Csession = $row["Csession"];

      function generateRandomString1($length = 32) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    $csession5 = generateRandomString1();
      $sqlwewewe = "UPDATE test SET Csession='$csession5' WHERE Name='$nameeeee'";

      if ($conn->query($sqlwewewe) === TRUE) {
  
      } else {
       echo "Error";
}

      $cookie_name1 = "Csession";
      $cookie_value1 = "$csession5";
      setcookie($cookie_name1, $cookie_value1, time() + (86400 * 30), "/"); // 86400 = 1 day
      $Csession1 = $row["Name"];

      $cookie_name11 = "NAMEsaveeee";
      $cookie_value11 = "$Csession1";
      setcookie($cookie_name11, $cookie_value11, time() + (86400 * 30), "/"); // 86400 = 1 day
      $namee = $row["Name"];
      $cookie_name111 = "myuname";
      $cookie_value111 = "$namee";
      setcookie($cookie_name111, $cookie_value111, time() + (86400 * 30), "/"); // 86400 = 1 day
    
    ?>

   <div  style="  border: 2px;
  border-radius: 25px;" class="blurred-box">
<?php
          if ($handle = opendir('ufiles/'.$_SESSION['name'])) {

              while (false !== ($entry = readdir($handle))) {

                  if ($entry != "." && $entry != "..") {


                      $asd = "$entry\n";
                      $new = str_replace(' ', '%20', $asd);
                      $path = 'ufiles/'.$_SESSION['name']."/".$new;

                      ?>
                      
                      
                      <a style="position: relative;top:-60px;"download>

                      <button style="width:50%;position: relative;left:23%;top:-20px;"><a href=<?php echo $path;?> download></a>
                      <br>
                      <a href="share.php?path=<?php echo $path;?>">Share settings</a>
                      <br>
                      <?php
                      $ddd = strstr( $asd, 'txt' );
                      $ddd1 = strstr( $asd, 'lua' );
                      if (($ddd <> "") or ($ddd1 <> "")){
                        ?>
                        <a href="edit.php?path=<?php echo $path;?>">Edit file</a>
                        <?php
                      }
                      $ddd1 = strstr( $asd, 'jpg' );
                      $ddd11 = strstr( $asd, 'png' );
                      if (($ddd1 <> "") or ($ddd11 <> "")){
                        ?>
                        <a href="viewpic.php?img=<?php echo $path;?>">View image</a>
                        <?php
                      }
                      $docx = strstr( $asd, 'docx' );
                      if (($docx <> "")){
                        ?>
                        <a href="readdocx.php?path=<?php echo $path;?>">Read Document</a>
                        <?php
                      }
                      ?>
                        <a href="<?php echo $path;?>"> Download</a>
                        <a href="delete.php?path=<?php echo $path;?>"> Delete file</a>
                        <br>
                      
                      
                      <i class="fa fa-download"></i><?php echo $asd;?></button>
                     
                      </a>
                    <?php
                  }
              }

              closedir($handle);
          }
        } 
?>
<div>

    <?php
  $_SESSION['name'] = $row["Name"];
  $filename = "ufiles/".$_SESSION['name'];

if (file_exists($filename)) {
  
} else {
  mkdir("ufiles/".$_SESSION['name']);
}
  }
} else {
  ?>
  <meta http-equiv="refresh" content="0; URL=http://localhost/project/login/logout.php" />
  <?php
}
$conn->close();




















?>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
</script>

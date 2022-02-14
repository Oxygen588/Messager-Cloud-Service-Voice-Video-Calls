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
  <script>
    function search(){

location.href = "?tosearch="+document.getElementById("site-search").value;

}



</script>
<?php 
  if (isset($_GET["add"])){
  
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
echo "asd";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
  $csession = $_COOKIE["Csession"];
  $sql = "SELECT * FROM test WHERE Csession='$csession'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    if (isset($_GET["add"])){
    $toadd = $_GET["add"];
    echo $toadd;
    $add = $row["Name"];
    if ($add != $toadd){
    $sql1 = "INSERT INTO friends (f1, f2)
    VALUES ('$add', '$toadd')";

    if ($conn->query($sql1) === TRUE) {
      //echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $sql2 = "INSERT INTO friends (f1, f2)
    VALUES ('$toadd', '$add')";

    if ($conn->query($sql2) === TRUE) {
    echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
  }
  }
}

}
 ?>
<html>
   <body>
   <div  style="  border: 2px;
  border-radius: 25px;" class="blurred-box">
  <div class="user-login-box">
  <label for="site-searc1h">What is the username of your friend?</label>

<input id="site-search" rows=1 placeholder="...."></input>
<button id="search"onclick="search()">Search</button>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
if (isset($_GET['tosearch'])){
$uname = $_GET['tosearch'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM test WHERE name LIKE '%$uname%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

?>
<br>
<a href="?add=<?php echo $row["Name"] ?>"><?php echo $row["Name"] ?> </a>
<?php
  }
}
}

?>
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

  


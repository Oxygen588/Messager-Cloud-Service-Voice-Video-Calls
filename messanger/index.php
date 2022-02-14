<style>
*{
 margin: 0;
 padding: 0;
}

html{
  overflow: hidden;
    width: 100vw;
    height: 100vh;
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
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
<!DOCTYPE html>

<html>
<body style="Color:white;">
<div1 style="position:relative;top:20%;left:170px;">
Scan this to get your code
</div1>
<br>
<img style="position: relative;
  width: 250px;
  height: 250px;
  top: 180px;
  left: calc(20% - 125px);
  background: rgb(209, 209, 209, 0.2);
  border-radius: 2px;
  overflow: hidden;"" src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=http%3A%2F%2F192.168.137.1/project/codebycookie.php" title="Link to Google.com" /><br>
<?php


if ((isset($_COOKIE["Csession"]))&&($_COOKIE["Csession"]<>"0")){
  ?>
  <meta http-equiv="refresh"
  content="0; url = http://localhost/project/messanger/registerac.php" />  
  <?php
}



    ?>
    
  <form style="color:white;"action="registerac.php" method="post">
  <div style="  position: relative;
  width: 250px;
  height: 350px;
  top: -180px;
  left: calc(50% - 125px);
  background: rgb(209, 209, 209, 0.2);
  border-radius: 2px;
  overflow: hidden;">
  <label for="fname">Username:</label>
  <input type="text" id="username" name="username"><br><br>
  <label for="lname">Password:</label>
  <input type="password" id="password" name="password"><br><br>
  <label for="code">COD:</label>
  <input type="text" id="code" name="code"><br><br>
  </div>
  <input style=" position: relative;width: 250px;left: calc(50% - 125px);
  top: -180px;" type="submit" value="Submit">
  
</form>

    <?php

?>





</body>
</html>

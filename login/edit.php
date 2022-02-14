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
  width: 1050px;
  height: 550px;
  top: calc(50% - 175px);
  left: calc(23% - 125px);
  background: inherit;
  border-radius: 2px;
  overflow: hidden;
}

.blurred-box:after{
 content: '';
 width: 1050px;
 height: 500px;
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
  width: 1050px;

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

if (isset($_GET["path"])){
$fn = $_GET["path"];
$cookie_name1 = "Editfile";
$cookie_value1 = "$fn";
setcookie($cookie_name1, $cookie_value1, time() + (86400 * 30), "/"); // 86400 = 1 day
}else{
$fn = $_COOKIE["Editfile"];
}

if(isset($_GET['text'])){
    $file = fopen($fn, "w+");
    fwrite($file, $_GET['text']);
    fclose($file);
}

?>
<form action="edit.php" method="get">



<textarea id="w3review" name="text" rows="150" cols="120" 
style=" background: transparent;
  color: white;
  resize: none;
  border: 0 none;
  font-size: 1em;
  height:430px;
  outline: none;">
<?php 
$handle = fopen("$fn", "r");
echo fread($handle,2097152);
fclose($handle); ?>
 </textarea>
<input style="  
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
  transform:translate(-50%, -50%);" type="submit" value="Save"/>
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
</form>
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
  content="0; url = http://localhost/project/login/registerac.php" />  
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




<form>

  <div style="  position: relative;
  width: 550px;
  height: 250px;
  top: -550px;
  left: calc(75% - 125px);
  background: rgb(209, 209, 209, 0.2);
  border-radius: 2px;
  overflow: hidden;">
  Use a one time link for download!
  <br>


  <form id="upload_form" enctype="multipart/form-data" method="post">
  <input type="file" name="file" id="file" onchange="uploadFile()"><br>
  <progress id="progressBar" value="0" max="100" style="width:300px;"></progress>
  <h3 id="status"></h3>
  <p id="loaded_n_total"></p>
</form>
  </div>
</form>

<script>
const docStyle = document.documentElement.style
const aElem = document.querySelector('a')
const boundingClientRect = aElem.getBoundingClientRect()

aElem.onmousemove = function(e) {

	const x = e.clientX - boundingClientRect.left
	const y = e.clientY - boundingClientRect.top
	
	const xc = boundingClientRect.width/2
	const yc = boundingClientRect.height/2
	
	const dx = x - xc
	const dy = y - yc
	
	docStyle.setProperty('--rx', `${ dy/-1 }deg`)
	docStyle.setProperty('--ry', `${ dx/10 }deg`)
	
}

aElem.onmouseleave = function(e) {
	
	docStyle.setProperty('--ty', '0')
	docStyle.setProperty('--rx', '0')
	docStyle.setProperty('--ry', '0')
	
}

aElem.onmousedown = function(e) {
	
	docStyle.setProperty('--tz', '-25px')
	
}

document.body.onmouseup = function(e) {
	
	docStyle.setProperty('--tz', '-12px')
	
}
function _(el) {
  return document.getElementById(el);
}
function _(el) {
  return document.getElementById(el);
}

function uploadFile() {
  var file = _("file").files[0];
  // alert(file.name+" | "+file.size+" | "+file.type);
  var formdata = new FormData();
  formdata.append("file", file);
  var ajax = new XMLHttpRequest();
  ajax.upload.addEventListener("progress", progressHandler, false);
  ajax.addEventListener("load", completeHandler, false);
  ajax.addEventListener("error", errorHandler, false);
  ajax.addEventListener("abort", abortHandler, false);
  ajax.open("POST", "upload_file.php"); // http://www.developphp.com/video/JavaScript/File-Upload-Progress-Bar-Meter-Tutorial-Ajax-PHP
  //use file_upload_parser.php from above url
  ajax.send(formdata);
}

function progressHandler(event) {
  var percent = (event.loaded / event.total) * 100;
  _("progressBar").value = Math.round(percent);
  _("status").innerHTML = Math.round(percent) + "% uploaded... please wait";
}

function completeHandler(event) {
  _("status").innerHTML = event.target.responseText;
  _("progressBar").value = 0; //wil clear progress bar after successful upload
}

function errorHandler(event) {
  _("status").innerHTML = "Upload Failed";
}

function abortHandler(event) {
  _("status").innerHTML = "Upload Aborted";
}

$(function() {

var bar = $('.bar');
var percent = $('.percent');
var status = $('#status');

$('form').ajaxForm({
    beforeSend: function() {
        status.empty();
        var percentVal = '0%';
        bar.width(percentVal);
        percent.html(percentVal);
    },
    uploadProgress: function(event, position, total, percentComplete) {
        var percentVal = percentComplete + '%';
        bar.width(percentVal);
        percent.html(percentVal);
    },
    complete: function(xhr) {
        status.html(xhr.responseText);
    }
});
}); 
    </script>


<script type="text/javascript">
     window.onbeforeunload = function(){ return;}
</script>

</body>
</html>

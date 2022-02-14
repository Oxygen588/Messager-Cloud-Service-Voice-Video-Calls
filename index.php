<style>
*{
 margin: 0;
 padding: 0;
}

html{
    width: 100vw;
    height: 100vh;
}
nav ul li span {
    position: absolute;
    width: 25%;
    height: 100%;
    background-color: var(--c);
    transform: translateY(150%);
    border-radius: 50%;
    left: calc((var(--n) - 1) * 25%);
    transition: 0.5s;
    transition-delay: calc((var(--n) - 1) * 0.1s);
    z-index: -1;
}

nav ul li:hover {
    color: black;
}

nav ul li:hover span {
    transform: translateY(0) scale(2);
}

nav ul li span:nth-child(1) {
    --n: 1;
}

nav ul li span:nth-child(2) {
    --n: 2;
}

nav ul li span:nth-child(3) {
    --n: 3;
}

nav ul li span:nth-child(4) {
    --n: 4;
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
nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

nav ul li {
    --c: goldenrod;
    color: var(--c);
    font-size: 16px;
    border: 0.3em solid var(--c);
    border-radius: 0.5em;
    width: 12em;
    height: 3em;
    text-transform: uppercase;
    font-weight: bold;
    font-family: sans-serif;
    letter-spacing: 0.1em;
    text-align: center;
    line-height: 3em;
    position: relative;
    overflow: hidden;
    z-index: 1;
    transition: 0.5s;
    margin: 1em;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!DOCTYPE>
<html>
<body style="Color:white;">
<div1 style="position:relative;left:83%;top:1%;">
Scan this to register
</div1>
<br>
<img style="position:relative;left:83%;top:1%;width:13%;" src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=http%3A%2F%2F<?php echo $_SERVER['REMOTE_ADDR'];?>/project/register/" title="Link to Google.com" /><br>
<nav style="position:relative;left:81.5%;top:0%;">
  <ul>
    <li>
 
      <a href="/project/login/">Use Cloud</a>
      
        <span></span><span></span><span></span><span></span>
      </li>
      <li>
 
 <a href="/project/messanger">Use Messanger</a>
 
   <span></span><span></span><span></span><span></span>
 </li>
  </ul>
</nav>









<style>
label {
    display: block;
    font: 1rem 'Fira Sans', sans-serif;
}

input,
label {
    margin: .4rem 0;
}


    </style>

    <?php

        ?>

</div>
<?php
    
?>


<script>
    
function search(){

    location.href = "?tosearch="+document.getElementById("site-search").value;
    
}
    
function search1(asd){

    location.href = "?name="+document.getElementById("site-search123").value+"&type="+asd;
    getLocation();
}
    </script>
    <?php
    

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "search_engine";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$getelementbyid = function($id,$element) use($conn) {
    $sql = "SELECT * FROM websites WHERE id='$id' LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        return $row[$element];
        break;
    }
    } else {
    echo "0 results";
    }
};
function dopostrequest($elementid,$element,$where){
    $url = 'http://localhost:7000/'.$where;
    $data = array($elementid => $element);

    // use key 'http' even if you send the request to https://...
    $options = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data)
        )
    );
    $context  = stream_context_create($options);
    if (strlen($url) > 0) {
    $result = file_get_contents($url, false, $context);

    return $result;
    }else{
        return "SQL INJECTION";
    }


}
function getTitle($url) {
    $page = file_get_contents($url);
    $title = preg_match('/<title[^>]*>(.*?)<\/title>/ims', $page, $match) ? $match[1] : null;
    return $title;
}
function geth1($url) {
    $page = file_get_contents($url);
    $title = preg_match('/<text[^>]*>(.*?)<\/*>/ims', $page, $match) ? $match[1] : null;
    return $title;
}


    


    ?>
   <br>
   <br>
   <br>
   <br>
   
<script>
const url = 'http://localhost:7000/search';

let data = {
    word: 'go'
}

var request = new Request(url, {
    method: 'POST',
    body: data,
    headers: new Headers()
});

fetch(request)
.then(function() {
    console.log(request)
})

</script>

<div  style="position:relative;left:5.5%;top:-40%;width:25%;color:black;">
<label for="site-searc1h">Search the site:</label>

<input id="site-search" rows=1 placeholder="result"></input>
<button id="search"onclick="search()">Search</button>
<?php
$links = array();
if (isset($_GET["tosearch"])){

    $url = 'http://localhost:7000/search';
    $data = array('word' => $_GET["tosearch"]);
        


    foreach (explode(",",preg_replace('/[^0-9-,]/', '', dopostrequest("word",$_GET["tosearch"],"search"))) as &$value) {
        if (in_array($value, $links) == false) {
            array_push($links, $value);
          }
    }
    echo "<br>";
    foreach ($links as &$value) {
        echo "<a href='".$getelementbyid($value,"website")."'>".dopostrequest("todo",$getelementbyid($value,"website"),"gettitlefromurl")."<a><br>";
    }
    }

    


    ?>

</div>

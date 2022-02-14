<?php
        function generateRandomString($length = 220) {
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
echo $_GET['username']."<br>";
echo $_GET['password']."<br>";
echo generateRandomString();
$ucode = generateRandomString1();
$cokie = generateRandomString();

$uname = $_GET['username'];
$password1 = $_GET['password'];
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

$hashed_password = password_hash($password1, PASSWORD_DEFAULT);
$sql = "INSERT INTO test (name, Pass, code, cookieID)
VALUES ('$uname', '$hashed_password', '$ucode', '$cokie')";

if ($conn->query($sql) === TRUE) {


$cookie_name = "2FA";
$cookie_value = "$cokie";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day



} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

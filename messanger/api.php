<?php    
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
    if(isset($_GET["type"])){
        if ($_GET["type"] ==  "msg"){
            $rec = $_GET["receiver"];
            $msg = $_GET["msg"];
            $namee = $_GET["sender"];
            $sql2 = "INSERT INTO messages (sender, receiver,message)
            VALUES ('$namee', '$rec','$msg')";

            if ($conn->query($sql2) === TRUE) {
            //echo "New record created successfully";
            } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }
?>
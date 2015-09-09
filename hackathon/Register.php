<html>
<body>
<?php
echo "Username ::: ";
    $uname = $_GET['uname'];
    $loginId = $_GET['loginId'];
    $pass = $_REQUEST['pass']; 
    $email = $_REQUEST['email'];
    
echo "Username ::: ".$uname;
// Create connection
$conn = new mysqli('113.128.162.99', 'root', 'root');

// Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully"; 
    ?>
    
    </body>
    </html>

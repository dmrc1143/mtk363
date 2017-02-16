<html>
<head>
</head>
<body>
<?php
echo 'hello world!';
$servername = "db:3306";
$username = "root";
$password = "123456";


$conn = new mysqli($servername, $username, $password);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
<h1> it is h1</h1>
</body>
</html>

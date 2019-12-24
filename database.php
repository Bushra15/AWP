<html>
<head>
<title>
DAtabaseConnect
</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";


$conn = mysqli_connect($servername, $username, $password);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
</body>
</html>
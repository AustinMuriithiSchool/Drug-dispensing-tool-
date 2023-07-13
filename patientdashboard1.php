<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'drug dispensing';

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username_reg'];
 }
    ?>

<!DOCTYPE html>
<html>
<head>
    <title>PatientsHomepage</title>
</head>
<body>
    <h2>Welcome to the Website</h2>
    
    <div style="text-align: right;">
    Welcome, <?php echo $username_reg; ?>
    </div>
    
    <!-- Rest of your HTML content goes here -->
</body>
</html>

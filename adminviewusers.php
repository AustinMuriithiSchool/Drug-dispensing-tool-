<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'drug dispensing';

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die('Failed to connect to MySQL: ' . mysqli_connect_error());
}

// Query to retrieve user data
$sql = "SELECT username, user_type, email FROM users";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }
    th, td {
      border: 1px solid black;
      padding: 8px;
      text-align: left;
    }
    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
  <h2>User List</h2>
  <table>
    <tr>
      <th>User Name</th>
      <th>User Type</th>
      <th>Email</th>
      <th>Phone</th>
      </tr>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['user_type']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone']; ?></td>
        </tr>
    <?php } ?>
  </table>
</body>
</html>
<?php
// Close the database connection
mysqli_close($conn);
?>

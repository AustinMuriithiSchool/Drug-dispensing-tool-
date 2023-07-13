<!DOCTYPE html>
<html>
<head>
    <title>User Management</title>
</head>
<body>
    <h1>User Management</h1>

    <?php
    // Database connection details
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'drug dispensing';

    // Create a connection
    $conn = new mysqli($host, $username, $password, $database);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Delete user if delete button is clicked
    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];

        // Delete user from the database
        $sql = "DELETE FROM users WHERE id = $id";
        if ($conn->query($sql) === TRUE) {
            echo "User deleted successfully.";
        } else {
            echo "Error deleting user: " . $conn->error;
        }
    }

    // Update user if form is submitted
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $username = $_POST['username'];
        $usertype = $_POST['user_type'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        // Update user in the database
        $sql = "UPDATE users SET username='$username', usertype='$usertype', email='$email', phone='$phone' WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            echo "User updated successfully.";
        } else {
            echo "Error updating user: " . $conn->error;
        }
    }

    // Fetch and display users from the database
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Username</th><th>User Type</th><th>Email</th><th>Phone</th><th>Actions</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['user_type'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['phone'] . "</td>";
            echo "<td><a href='edit_user.php?edit=" . $row['id'] . "'>Edit</a> | <a href='?delete=" . $row['id'] . "'>Delete</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No users found.";
    }

    // Close the database connection
    $conn->close();
    ?>

    <h2>Edit User</h2>
    <?php
    // Display the user edit form if edit button is clicked
    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];

        // Fetch user details from the database
        $sql = "SELECT * FROM users WHERE id = $id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            ?>
            <form method="POST" action="">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <label>Username:</label>
                <input type="text" name="username" value="<?php echo $row['username']; ?>"><br><br>
                <label>User Type:</label>
                <input type="text" name="usertype" value="<?php echo $row['user_type']; ?>"><br><br>
                <label>Email:</label>
                <input type="text" name="email" value="<?php echo $row['email']; ?>"><br><br>
                <label>Phone:</label>
                <input type="text" name="phone" value="<?php echo $row['phone']; ?>"><br><br>
                <input type="submit" name="update" value="Update">
            </form>
            <?php
        } else {
            echo "User not found.";
        }
    }
    ?>
</body>
</html>

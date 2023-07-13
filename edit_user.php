<html>
<body>
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
    
    // Update user if form is submitted
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $username = $_POST['username'];
        $usertype = $_POST['usertype'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        // Update user in the database
        $sql = "UPDATE users SET username='$username', user_type='$usertype', email='$email', phone='$phone' WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            echo "User updated successfully.";
        } else {
            echo "Error updating user: " . $conn->error;
        }
    }

    // Fetch and display user details from the database
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
    } else {
        echo "No user selected.";
    }

    // Close the database connection
    $conn->close();
    ?>
</body>
</html>
    

<?php
session_start();
require '../model/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input email and password
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    
    $db = new myDB();
    $conn = $db->openCon();
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Check if email exists in the database
    $stmt = $conn->prepare("SELECT ID, Name, Password FROM Employee WHERE Email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $name, $db_password);
        $stmt->fetch();
        
        // Verify password
        if (password_verify($password, $db_password)) {
            // Set session variables
            $_SESSION['user_id'] = $id;
            $_SESSION['user_name'] = $name;
            $_SESSION['email'] = $email;
            
            // Redirect to homepage
            header("Location: ../views/homepage.php");
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No account found with that email.";
    }
    
    $stmt->close();
    $conn->close();
}
?>

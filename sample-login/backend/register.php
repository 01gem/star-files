<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample-login";

// Connect
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

// Collect form data
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$contact = $_POST['contact_number'];
$email = $_POST['email'];
$pass = $_POST['password'];

// Validate password length
if (strlen($pass) < 8) {
    echo "<script>
        alert('Password must be at least 8 characters long.');
        window.location.href = '../php/add-user.php';
    </script>";
    exit();
}

// Check if email already exists
$check = $conn->prepare("SELECT * FROM customers WHERE email = ?");
$check->bind_param("s", $email);
$check->execute();
$result = $check->get_result();

if ($result->num_rows > 0) {
    echo "<script>
        alert('Email already registered!');
        window.location.href = '../php/add-user.php';
    </script>";
    exit();
}

// Insert into customers table
$stmt = $conn->prepare("INSERT INTO customers (first_name, last_name, contact_number, email, password) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $fname, $lname, $contact, $email, $pass);

if ($stmt->execute()) {
    echo "<script>
        alert('Registration Successful, You can now Log In!');
        window.location.href = '../index.php';
    </script>";
} else {
    echo "<script>
        alert('Error: could not register.');
        window.location.href = '../php/add-user.php';
    </script>";
}

$stmt->close();
$conn->close();
?>

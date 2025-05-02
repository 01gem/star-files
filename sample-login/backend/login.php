<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample-login";

// Connect
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$email = $_POST['email'];
$pass = $_POST['password'];

// First, check admins table
$sql_admin = "SELECT * FROM admins WHERE email = ? AND password = ?";
$stmt = $conn->prepare($sql_admin);
$stmt->bind_param("ss", $email, $pass);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    header("Location: ../php/admin-dashboard.php");
    exit();
}

// Then, check customers table
$sql_cust = "SELECT * FROM customers WHERE email = ? AND password = ?";
$stmt = $conn->prepare($sql_cust);
$stmt->bind_param("ss", $email, $pass);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    header("Location: ../service-site/market.php");
    exit();
}

// If no match
echo "<script>alert('Invalid email or password'); window.location.href = '../index.php';</script>";

$stmt->close();
$conn->close();
?>

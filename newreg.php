<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $regno = $conn->real_escape_string($_POST['regno']);
    $name = $conn->real_escape_string($_POST['name']);
    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']);
    $semester = $conn->real_escape_string($_POST['semester']);
    $course = $conn->real_escape_string($_POST['course']);
    $adm_year = $conn->real_escape_string($_POST['adm_year']);
    $dob = $conn->real_escape_string($_POST['dob']);
    $address = $conn->real_escape_string($_POST['address']);
    $district = $conn->real_escape_string($_POST['district']);
    $state = $conn->real_escape_string($_POST['state']);
    $country = $conn->real_escape_string($_POST['country']);
    $pincode = $conn->real_escape_string($_POST['pincode']);

    // Encrypt the password using SHA-256
    $password_hashed = hash('sha256', $password);

    $sql = "INSERT INTO studentslist (regno, name, semester, course, adm_year, dob, address, district, state, country, pincode,username, password) VALUES 
    ('$regno', '$name', '$semester', '$course','$adm_year','$dob','$address','$district','$state','$country','$pincode','$username','$password_hashed')";

    if ($conn->query($sql) === TRUE) {
        echo   "Registration successful!";
        header("Location: index.html");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
//header("Location: login.php");
$conn->close();
?>

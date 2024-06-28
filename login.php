<?php
session_start();

$servername = "localhost";
$dbusername = "ujjawal";
$dbpassword = "Ujjawal@2247";
$dbname = "registration";

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
   $username = $_POST['username'];
   $password = $_POST['password'];

   // Hash the submitted password to match the hashed password in the database
   $password_hashed = hash('sha256', $password);

   // Prepare SQL statement to fetch student details
   $sql = "SELECT * FROM studentslist WHERE username = ? AND password = ?";
   $stmt = $conn->prepare($sql);
   $stmt->bind_param("ss", $username, $password_hashed);
   $stmt->execute();
   $result = $stmt->get_result();

   if ($result->num_rows == 1) {
       // Login successful
       $row = $result->fetch_assoc();

       // Store user details in session
       $_SESSION['username'] = $row['username'];
       $_SESSION['name'] = $row['name'];
       $_SESSION['semester'] = $row['semester'];
       $_SESSION['course'] = $row['course'];
       $_SESSION['adm_year'] = $row['adm_year'];
       $_SESSION['dob'] = $row['dob'];
       $_SESSION['address'] = $row['address'];
       $_SESSION['district'] = $row['district'];
       $_SESSION['state'] = $row['state'];
       $_SESSION['country'] = $row['country'];
       $_SESSION['pincode'] = $row['pincode'];

       // Redirect to dashboard or display student details
       header("Location: dashboard.php");
       exit();
   } else {
       // Login failed
       echo "Invalid username or password. Please try again.";
   }

   $stmt->close();
}

$conn->close();
?>

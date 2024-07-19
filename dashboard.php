<?php
session_start();

// Check if user is logged in, otherwise redirect to login page
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}

// Display student details from session variables
$username = $_SESSION['username'];
$name = $_SESSION['name'];
$semester = $_SESSION['semester'];
$course = $_SESSION['course'];
$adm_year = $_SESSION['adm_year'];
$dob = $_SESSION['dob'];
$address = $_SESSION['address'];
$district = $_SESSION['district'];
$state = $_SESSION['state'];
$country = $_SESSION['country'];
$pincode = $_SESSION['pincode'];
?>

<!DOCTYPE html>
<html>
<head>

<nav class="navbar navbar-expand-lg bg-body-tertiary  navbar-dark  bg-dark  ">
		<div class="container-fluid">
		  <a class="navbar-brand" href="#">Registration</a>
		  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
			  <li class="nav-item">
				<a class="nav-link active" aria-current="page" href="home.html">Home</a>
			  </li>
			  <li class="nav-item">


				<a class="nav-link" href="#"></a>
			  
			
			</li>
			  <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				  Dropdown
				</a>
				<ul class="dropdown-menu">
				  <li><a class="dropdown-item" href="login.html">Login</a></li>
				  <li><a class="dropdown-item" href="newreg.html">registration</a></li>
				  <li><hr class="dropdown-divider"></li>
				  <li><a class="dropdown-item" href="#">..</a></li>
				</ul>
			  </li>
			  <li class="nav-item">
				<a class="nav-link disabled" aria-disabled="true">Disabled</a>
			  </li>
			</ul>
			<form class="d-flex" role="search">
			  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
			  <button class="btn btn-outline-success" type="submit">Search</button>
			</form>
		  </div>
		</div>
	  </nav>





    <title>Student Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container bg-primary text-dark border border-5 border-dark mt-5" id="mainid">
        <p class="h1 text-center pt-3 pb-5" id="headingid"><strong>Welcome, <?php echo $name; ?>!</strong></p>
        
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Username:</th>
                            <td><?php echo $username; ?></td>
                        </tr>
                        <tr>
                            <th>Name:</th>
                            <td><?php echo $name; ?></td>
                        </tr>
                        <tr>
                            <th>Semester:</th>
                            <td><?php echo $semester; ?></td>
                        </tr>
                        <tr>
                            <th>Course:</th>
                            <td><?php echo $course; ?></td>
                        </tr>
                        <tr>
                            <th>Year of Admission:</th>
                            <td><?php echo $adm_year; ?></td>
                        </tr>
                        <tr>
                            <th>Date of Birth:</th>
                            <td><?php echo $dob; ?></td>
                        </tr>
                        <tr>
                            <th>Address:</th>
                            <td><?php echo $address; ?></td>
                        </tr>
                        <tr>
                            <th>District:</th>
                            <td><?php echo $district; ?></td>
                        </tr>
                        <tr>
                            <th>State:</th>
                            <td><?php echo $state; ?></td>
                        </tr>
                        <tr>
                            <th>Country:</th>
                            <td><?php echo $country; ?></td>
                        </tr>
                        <tr>
                            <th>Pincode:</th>
                            <td><?php echo $pincode; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
                <a href="logout.php" class="btn btn-outline-dark btn-info">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>

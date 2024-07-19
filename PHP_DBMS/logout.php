<?php

session_start();

if (isset($_SESSION['username'])) {
  session_destroy();
}

header('Location: login.html'); // Redirect to login page after logout
?>

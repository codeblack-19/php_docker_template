<?php

// The MySQL service named in the docker-compose.yml.
$host = 'db';

// Database use name
$user = 'php_test';

//database user password
$pass = 'php_test';

// check the MySQL connection status
$conn = new mysqli($host, $user, $pass);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to MySQL server successfully!";
}
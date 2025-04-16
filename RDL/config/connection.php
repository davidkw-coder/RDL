<?php
$db_server = "localhost";
$username = "root";
$password = "";
$db_name = "rdl";

//The connection with database
$conn = new mysqli($db_server, $username, $password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
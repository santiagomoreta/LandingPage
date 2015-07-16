<?php
include "bbdd.php";


$conn = new mysqli($dbhost, $dbuser, $dbpasswd, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}         

?>
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "doctor_issue";
error_reporting(0);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
# Implement a security for sqlinjection
$tipology = mysql_real_escape_string();
$name_issue = mysql_real_escape_string();
$description = mysql_real_escape_string();
$incarico = mysql_real_escape_string();
$tipology = $_POST['tipology'];
$name_issue = $_POST['name_issue'];
$description = $_POST['description'];
$incarico = $_POST['incarico'];

# finish
if (isset($_POST['send'])) {
    $sql = "INSERT INTO issue (tipology, name_issue, description,incarico) VALUES ('$tipology', '$name_issue', '$description','$incarico')";
}

if ($conn->query($sql) === TRUE) {
    echo "<div class='alert alert-success'>New record created successfully</div>";
} 
$conn->close();

?>
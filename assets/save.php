<?php
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

$connection = mysqli_connect("localhost","root","","portfolio_database") or die("connection failed");
$sql = "INSERT INTO data(name, email, message) VALUES ('{$name}','{$email}','{$message}')";

$result = mysqli_query($connection, $sql) or die("query failed");

header("location: http://localhost/portfolio/contact.html");

mysqli_close($connection);

?>
<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "bloodbank";
// $conn = new mysqli($servername, $username, $password, $dbname);
// if(!$conn){
//  die('Could not Connect MySql:' .mysql_error());
// }

// Example configuration adjustment
$host = getenv('DB_HOST') ?: 'localhost';
$username = getenv('DB_USER') ?: 'root';
$password = getenv('DB_PASSWORD') ?: '';
$dbname = getenv('DB_NAME') ?: 'blood_bank';

$conn = new mysqli($host, $username, $password, $dbname);

?>

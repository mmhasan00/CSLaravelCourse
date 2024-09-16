<?php
include_once('local.config.php');

// DB Connection
// $dsn = "mysql:host=localhost;dbname=tolet"; // Change this to your DSN
// $username = "root";        // Change this to your MySQL username
// $password = "";            // Change this to your MySQL password

// try {
//     $pdo = new PDO($dsn, $username, $password);
//     // Set the PDO error mode to exception
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     // echo "Connected successfully";
// } catch (PDOException $e) {
//     echo "Connection failed: " . $e->getMessage();
// }




// Environment or Globar variables
$docroot = $_SERVER['DOCUMENT_ROOT']."/CSLaravelCourse";
$webroot = "http://localhost/CSLaravelCourse";
$frontend = $docroot . "/Frontend";
$backend = $docroot . "/backend";
$fpartials = $frontend . "/partials";
$bpartials = $backend . "/partials";
$public = $webroot . "/public";
$images = $webroot . "/public/images";

?>

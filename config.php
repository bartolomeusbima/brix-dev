<?php 
    // Database configuration 
    $dbHost = 'localhost'; // Biasanya 'localhost' 
    $dbUsername = 'u412444635_brix'; // Ganti dengan username database Anda 
    $dbPassword = 'Br1xperformance'; // Ganti dengan password database Anda 
    $dbName = 'u412444635_brix'; // Ganti dengan nama database Anda 
    
    // Create database connection 
    $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 
    
    // Check connection 
    if ($conn->connect_error) { 
        die("Connection failed: " . $conn->connect_error); 
    }
?>
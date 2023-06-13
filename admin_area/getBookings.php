<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ranashairsalon";

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch all bookings from the "bookings" table
    $sql = "SELECT * FROM bookings";
    $result = $conn->query($sql);
    ?>



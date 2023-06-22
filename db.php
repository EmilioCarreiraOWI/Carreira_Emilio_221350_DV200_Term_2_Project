<?php //link the database to the website
    $conn = new mysqli("localhost", "root", "root", "task1");

    if (!$conn) {
        echo "connection Failed!";
    }
?>
<?php
    include 'db.php'; // Include file containing database connection details

    $id = $_GET['id']; // Get the ID to be deleted from the URL

    // Construct an SQL query to delete the row with the specified ID
    $sql = "DELETE FROM patients WHERE id = $id";

    $conn->query($sql); // Execute the query
    $conn->close(); // Close the database connection

    header("location: Patient_Index.php"); // Redirect to the Doctor Index page
?>
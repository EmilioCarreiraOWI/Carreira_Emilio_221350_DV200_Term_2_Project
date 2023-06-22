<?php
    include 'db.php'; // Include file containing database connection details

    $id = $_GET['id']; // Get the ID to be deleted from the URL

    // Construct an SQL query to delete the row with the specified ID
    $sql = "DELETE FROM appointment WHERE id = $id";

    if ($conn->query($sql) === TRUE) { // Execute the query and check if it was successful
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close(); // Close the database connection

    header("location: Appointment_Index.php"); // Redirect to the Doctor Index page
?>

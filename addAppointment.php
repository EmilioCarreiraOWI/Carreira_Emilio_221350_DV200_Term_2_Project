<?php
    include 'db.php'; // the file containing database connection details

    // Get the form data
    $time = $_POST["time"];
    $date = $_POST["date"];
    $doctor = $_POST["doctor"];
    $patient = $_POST["patient"];

    // Insert the data into the appointment table
    $sql = "INSERT INTO appointment (doctor_ID, patient_id, date, time) VALUES ('$doctor', '$patient', '$date', '$time')";
    $conn->query($sql);
    $conn->close();

    // Redirect to the appointment index page with success message
    header("location: AppointmentIndex.php?success=Successfully added as a new appointment for DR. " . "$doctor");
?>



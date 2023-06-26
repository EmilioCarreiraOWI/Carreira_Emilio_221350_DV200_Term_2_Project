<?php
    include 'db.php';

    $time = $_POST["time"];
    $date = $_POST["date"];
    $doctor = $_POST["doctor"];
    $patient = $_POST["patient"];
    $id = $_POST["id"]; // Get the ID to be updated from the hidden form input

    $sql = "UPDATE  appointment  SET  doctor_ID='$doctor', patient_id='$patient', date='$date', time='$time' WHERE id='$id'";
    $result = $conn->query($sql);

    $stmt->close();
    $conn->close();

    header("location: Appointment_Index.php");
?>

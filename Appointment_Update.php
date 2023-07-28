<?php
    include 'db.php';

    $time = $_POST["time"];
    $date = $_POST["date"];
    $doctor = $_POST["doctor"];
    $patient = $_POST["patient"];
    $id = $_POST["id"]; // Get the ID to be updated from the hidden form input

    $sql = "UPDATE  appointment  SET  doctor_ID ='$doctor', patient_id ='$patient', date ='$date', time ='$time' WHERE id ='$id'";
    //UPDATE `appointment` SET `doctor_ID`='[value-1]',`patient_id`='[value-2]',`date`='[value-3]',`appointment_id`='[value-4]',`time`='[value-5]' WHERE 1
    $result = $conn->query($sql);

    $stmt->close();
    $conn->close();

    header("location: Appointment_Index.php");
?>

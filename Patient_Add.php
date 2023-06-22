<?php
    include 'db.php'; // Include file containing database connection details

    // Get the form data
    $profileimage = $_POST["profileimage"];
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $phonenumber = $_POST["phonenumber"];
    $email = $_POST["email"];
    $medical_aid_number = $_POST["medical_aid_number"];

    // Insert the data into the patients table
    $sql = "INSERT INTO patients (profile_image, name, surname, age, gender, phone_Number, email, medical_aid_number) VALUES ('$profileimage','$name','$surname','$age','$gender','$phonenumber','$email','$medical_aid_number')";
    $conn->query($sql);
    $conn->close();

    // Redirect to the patient index page with success message
    header("location: PatientIndex.php?success=$name $surname Successfully added as a new patient");
?>


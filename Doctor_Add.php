<?php
    include 'db.php'; // the file containing database connection details

    // Get the form data
    $profileimage = $_POST["profileimage"];
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $phonenumber = $_POST["phonenumber"];
    $email = $_POST["email"];
    $specialisation = $_POST["specialisation"];

    // Insert the data into the doctor table
    $sql = "INSERT INTO doctor (profile_image, name, surname, age, gender, phone_number, email, specialisation) VALUES ('$profileimage','$name','$surname','$age','$gender','$phonenumber','$email','$specialisation')";
    $conn->query($sql);
    $conn->close();

    // Redirect to the doctor index page with success message
    header("location: Doctor_Index.php?success=$name $surname Successfully added as a new Doctor");
?>



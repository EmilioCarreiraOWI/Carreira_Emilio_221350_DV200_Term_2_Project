<?php
    include 'db.php'; // the file containing database connection details

    // Get the form data
    $profileimage = $_POST["profileimage"];
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phonenumber = $_POST["phonenumber"];
    $rank = $_POST["rank"];

    // Insert the data into the receptionists table
    $sql = "INSERT INTO receptionists (profile_image, name, surname, age, gender, email, password, phone_number, rank) VALUES ('$profileimage', '$name', '$surname', '$age', '$gender', '$email', '$password', '$phonenumber', '$rank')";
    $conn->query($sql);
    $conn->close();

    // Redirect to the receptionist index page with success message
    header("location: ReceptionistIndex.php?success=$name $surname Successfully added as a new Receptionist");
?>
 
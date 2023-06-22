<?php
    include 'db.php';

    $id = $_POST['id'];
    $profileimage = $_POST["profileimage"];
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $phonenumber = $_POST["phonenumber"];
    $email = $_POST["email"];
    $specialisation = $_POST["specialisation"];

    $sql = "UPDATE doctor SET profile_image='$profileimage', name='$name', surname='$surname', age='$age', gender='$gender', phone_number='$phonenumber', email='$email', specialisation='$specialisation' WHERE id='$id'";
    $result = $conn->query($sql);
    $conn->close();

    header("location: Doctor_Index.php");
?>
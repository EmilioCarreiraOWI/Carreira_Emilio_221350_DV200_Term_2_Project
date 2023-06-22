<?php
  include 'db.php'; // Includes the database connection file

  // Assigns input values to variables from $_POST array
  $email = $_POST["email"];
  $name = $_POST["name"];
  $surname = $_POST["surname"];
  $age = $_POST["age"];
  $gender = $_POST["gender"];
  $phonenumber = $_POST["phonenumber"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $rank = $_POST["rank"];
  $profileimage = $_POST["profileimage"];

  $id = $_POST["id"]; // Gets the ID of the patient to be updated from the hidden form input

  // SQL query to update the patient's record with new data provided in $_POST
  $sql = "UPDATE  receptionists SET profile_image='$profileimage', name='$name', surname='$surname', age='$age', gender='$gender', email='$email', password='$password', phone_number='$phonenumber', rank='$rank' WHERE id='$id'";

  $stmt->close(); // Closes the prepared statement
  $conn->close(); // Closes the database connection 
  
  header("Location: Receptionist_Index.php"); // Redirects the user to the patient index page
?>
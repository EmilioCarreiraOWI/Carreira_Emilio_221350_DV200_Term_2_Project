<?php
  include 'db.php'; // Includes the database connection file

  // Assigns input values to variables from $_POST array
  $email = $_POST["email"];
  $name = $_POST["name"];
  $surname = $_POST["surname"];
  $age = $_POST["age"];
  $gender = $_POST["gender"];
  $phonenumber = $_POST["phonenumber"];
  $medical_aid_number = $_POST["medical_aid_number"];
  $profileimage = $_POST["profileimage"];

  $id = $_POST["id"]; // Gets the ID of the patient to be updated from the hidden form input

  // SQL query to update the patient's record with new data provided in $_POST
  $sql = "UPDATE patients SET profile_image=?, name=?, surname=?, age=?, gender=?, phone_number=?, email=?, medical_aid_number=? WHERE id=?";

  // Prepare statement for inserting data into the database
  $stmt = $conn->prepare($sql);

  // Bind parameters for each value and execute the statement
  $stmt->bind_param("sssissssi", $profileimage, $name, $surname, $age, $gender, $phonenumber, $email, $medical_aid_number, $id);
  
  if ($stmt->execute()) {
      echo "Record updated successfully";
  } else {
      echo "Error updating record: " . $conn->error;
  }

  $stmt->close(); // Closes the prepared statement
  $conn->close(); // Closes the database connection 
  
  header("Location: Patient_Index.php"); // Redirects the user to the patient index page
?>




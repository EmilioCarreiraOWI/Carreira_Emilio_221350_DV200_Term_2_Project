<?php
    include 'db.php';

    $sql = "SELECT * FROM doctor";

    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
        echo "<tr id='Form_align'>";
        if ($row['id'] == $_GET['id']) {
            // Update the form action and method so that the data is submitted correctly
            echo '<form id="Form_size" class="form-inline m-2" action="Doctor_Update.php" method="POST">';
            
            // Add a hidden input field to store the doctor's ID
            echo '<input type="hidden" name="id" value="'.$row['id'].'">';

            // Profile image
            echo '<td><label class="ml-4 mr-2" for="profile_image"><b>Profile Image:</b></label>';
            echo '<input type="text" name="profile_image" id="Show_Profile" class="form-control" value="'.$row['profile_image'].'"></td>';

            // Name
            echo '<td><label class="ml-4 mr-2" for="name"><b>Name:</b></label>';
            echo '<input type="text" name="name" id="Show_name" class="form-control" value="'.$row['name'].'"></td>';

            // Surname
            echo '<td><label class="ml-4 mr-2" for="surname"><b>Surname:</b></label>';
            echo '<input type="text" name="surname" id="Show_Surname" class="form-control" value="'.$row['surname'].'"></td>';

            // Age
            echo '<td><label class="ml-4 mr-2" for="age"><b>Age:</b></label>';
            echo '<input type="text" name="age" id="Show_Age" class="form-control" value="'.$row['age'].'"></td>';

            // Gender
            echo '<td><label class="ml-4 mr-2" for="gender"><b>Gender:</b></label>';
            echo '<input type="text" name="gender" id="Show_Gender" class="form-control" value="'.$row['gender'].'"></td>';

            // Phone Number
            echo '<td><label class="ml-4 mr-2" for="phonenumber"><b>Phone Number:</b></label>';
            echo '<input type="text" name="phonenumber" id="Show_Number" class="form-control" value="'.$row['phone_number'].'"></td>';

            // Email
            echo '<td><label class="ml-4 mr-2" for="email"><b>Email:</b></label>';
            echo '<input type="text" name="email" id="Show_Email" class="form-control" value="'.$row['email'].'"></td>';

            // Specialisation           
            echo '<td><label class="ml-4 mr-2" for="Specialisation"><b>Specialisation:</b></label>';
            echo '<input type="text" name="specialisation" id="Show_Specialisation" class="form-control" value="'.$row['specialisation'].'"></td>';

            // Add a Save button to submit the form
            echo '<td><button type="submit" class="ml-4 mr-2 btn btn-primary">Save</button></td>';

            echo '</form>';
        } else {
            // Display the doctor details as normal and include an Update link to edit data
            echo "<td>". "<img src='" . $row['time'] . "'>" . "</td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['surname']."</td>";
            echo "<td>".$row['age']."</td>";
            echo "<td>".$row['gender']."</td>";
            echo "<td>".$row['phone_number']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['specialisation']."</td>";
            
            echo '<td><a href="Doctor_Update.php?id='.$row['id'].'">Update</a></td>';
        }
        
        // Add a Delete link to remove the doctor from the system
        echo '<td><a class="btn btn-danger" href="Doctor_Delete.php?id='.$row['id'].'" role="button">Delete</a></td>';
        
        // Close the table row
        echo "</tr>";
    }

    $conn->close();
?>



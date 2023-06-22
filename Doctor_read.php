<?php
    include 'db.php';

    $sql = "SELECT * FROM doctor";

    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
        echo "<tr id='Form_align'>";
        if ($row['id'] == $_GET['id']) {
            // Update the form action and method so that the data is submitted correctly
            echo '<form id="Form_size" class="form-inline m-2" action="Appointment_Update_Process.php" method="POST">';

            echo '<input type="hidden" name="id" value="'.$row['id'].'">';
        //profile image
            echo '<td><label class="ml-4 mr-2" for="profile_image"><b>Profile Image:</b></label>';
            echo '<input type="text" name="profile_image" id="Show_Profile" class="form-control" value="'.$row['profile_image'].'"></td>';
        //name
            echo '<td><label for="name"><b>Name:</b></label>';
            echo '<input type="text" name="name" id="Show_name" class="form-control" value="'.$row['name'].'"></td>';
        //Surname
            echo '<td><label for="surname"><b>Surname:</b></label>';
            echo '<input type="text" name="surname" id="Show_Surname" class="form-control" value="'.$row['surname'].'"></td>';
        //Age
            echo '<td><label for="age"><b>Age:</b></label>';
            echo '<input type="text" name="age" id="Show_Age" class="form-control" value="'.$row['age'].'"></td>';
        //Gender
            echo '<td><label for="gender"><b>gender:</b></label>';
            echo '<input type="text" name="gender" id="Show_gender" class="form-control" value="'.$row['gender'].'"></td>';
        //Phone Number
            echo '<td><label for="phonenumber"><b>Phone Number:</b></label>';
            echo '<input type="text" name="phonenumber" id="Show_Number" class="form-control" value="'.$row['phone_number'].'"></td>';
         //Email
            echo '<td><label for="email"><b>Email:</b></label>';
            echo '<input type="text" name="email" id="Show_Email" class="form-control" value="'.$row['email'].'"></td>';
        //Specialisation           
            echo '<td><label for="Specialisation"><b>Specialisation:</b></label>';
            echo '<input type="text" name="specialisation" id="Show_Specialisation" class="form-control" value="'.$row['specialisation'].'"></td>';

            echo '</select></td>';
            
            // Add a Save button to submit the form
            echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';
            echo '</form>';
        } else {
            echo "<td>".$row['date']."</td>";
            echo "<td>".$row['time']."</td>";
            echo "<td>".$doctor['name']." ".$doctor['surname']."</td>";
            echo "<td>".$patient['name']." ".$patient['surname']."</td>";
            echo '<td><a href="Appointment_Index.php?id='.$row['id'].'">Update</a></td>';
        }
        echo '<td><a class="btn btn-danger" href="Appointment_Delete.php?id='.$row['id'].'" role="button">Delete</a></td>';
        echo "</tr>";
    }

    $conn->close();
?>


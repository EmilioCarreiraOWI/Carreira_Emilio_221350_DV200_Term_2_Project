<?php
    include 'db.php';

    $sql = "SELECT * FROM appointment";

    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
        echo "<tr id='Form_align'>";
        if ($row['id'] == $_GET['id']) {
            // Update the form action and method so that the data is submitted correctly
            echo '<form id="Form_size" class="form-inline m-2" action="Appointment_Update_Process.php" method="POST">';
            echo '<input type="hidden" name="id" value="'.$row['id'].'">';
            echo '<td><label for="date"><b>Date:</b></label>';
            echo '<input type="text" name="date" id="Show_Date" class="form-control" value="'.$row['date'].'"></td>';
            echo '<td><label for="time"><b>Time:</b></label>';
            echo '<input type="text" name="time" id="Show_Time" class="form-control" value="'.$row['time'].'"></td>';
            echo '<td><label for="time"><b>Doctor:</b></label>';
            echo '<input type="text" name="doctor" id="Show_Doctor" class="form-control" value="'.$row['doctor'].'"></td>';
            echo '<td><label for="time"><b>Patient:</b></label>';
            echo '<input type="text" name="patient" id="Show_Patient" class="form-control" value="'.$row['patients'].'"></td>';

            // Create a dropdown list to select the doctor
            // $sql1 = "SELECT name, surname, id FROM doctor ORDER BY surname ASC";
            // $result1 = $conn->query($sql1);
            // echo '<td><label for="doctor"><b>Doctor:</b></label><select name="doctor" id="Show_Doctor" class="form-control">';
            // while($rowD = $result1->fetch_assoc()) {
            //         echo '<option name="doctor" value="'.$rowD['id'].'" selected>'.$rowD['name'].' '.$rowD['surname'].'</option>';
            // }
            // echo '</select></td>';

            // // Create a dropdown list to select the patient
            // $sql2 = "SELECT id, name, surname FROM patients";
            // $result2 = $conn->query($sql2);
            // echo '<td><label for="patient"><b>Patient:</b></label><select name="patient" id="Show_Patient" class="form-control">';
            // while($rowP = $result2->fetch_assoc()) {
            //         echo '<option value="'.$rowP['id'].'" selected>'.$rowP['name'].' '.$rowP['surname'].'</option>';
            // }
            echo '</select></td>';
            
            // Add a Save button to submit the form
            echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';
            echo '</form>';
        } else {
            echo "<td>".$row['date']."</td>";
            echo "<td>".$row['time']."</td>";

            $sql1 = "SELECT name, surname FROM doctor WHERE id = ".$row['doctor'];
            $result1 = $conn->query($sql1);
            $doctor = $result1->fetch_assoc();

            $sql2 = "SELECT name, surname FROM patients WHERE id = ".$row['patient'];
            $result2 = $conn->query($sql2);
            $patient = $result2->fetch_assoc();
            
            echo "<td>".$doctor['name']." ".$doctor['surname']."</td>";
            echo "<td>".$patient['name']." ".$patient['surname']."</td>";
            echo '<td><a href="Appointment_Index.php?id='.$row['id'].'">Update</a></td>';
        }
        echo '<td><a class="btn btn-danger" href="Appointment_Delete.php?id='.$row['id'].'" role="button">Delete</a></td>';
        echo "</tr>";
    }

    $conn->close();
?>




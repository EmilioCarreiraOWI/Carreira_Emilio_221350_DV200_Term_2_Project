<?php
    include 'db.php';

    $sql = "SELECT * FROM appointment";

    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
        echo "<tr id='Form_align'>";
        if ($row['id'] == $_GET['id']) {
            echo '<form id="Form_size" class="form-inline m-2" action="Update_Appointment.php" method="POST">'; // Change the form action to point to the correct file
            echo '<input class="m-2" type="hidden" name="id" value="'.$row['id'].'">'; // Add a hidden input field to pass the ID to be updated
            echo '<lable><b>Date:</b></lable>';
            echo '<td><input class="m-2" type="text" name="date" id="Show_Date" class="form-control" value="'.$row['date'].'"></td>';
            echo '<lable><b>Time:</b></lable>';
            echo '<td><input class="m-2" type="text" name="time" id="Show_Time" class="form-control" value="'.$row['time'].'"></td>';
            echo '<lable><b>Doctor:</b></lable>';
            echo '<td><input class="m-2" type="text" name="doctor" id="Show_Doctor" class="form-control" value="'.$row['doctor'].'"></td>';
            echo '<lable><b>Patient:</b></lable>';
            echo '<td><input class="m-2" type="text" name="patient" id="Show_Patient" class="form-control" value="'.$row['patient'].'"></td>';
            echo '<td><button type="submit" class="btn btn-primary">Save</button></td>'; // Add a Save button to submit the form
            echo '</form>';
        } else {
            echo "<td>".$row['date']."</td>";
            echo "<td>".$row['time']."</td>";
            $sql1 = "SELECT name, surname FROM doctor WHERE id = ".$row['doctor'];
            $result1 = $conn->query($sql1);
            $doctor = $result1->fetch_assoc();
            echo "<td>".$doctor['name']." ".$doctor['surname']."</td>";
            echo "<td>".$row['patient']."</td>";
            echo '<td><a class="btn btn-primary" href="Update_Appointment.php?id='.$row['id'].'" role="button">Update</a></td>';
        }
        echo '<td><a class="btn btn-danger" href="deleteAppointment.php?id='.$row['id'].'" role="button">Delete</a></td>';
        echo "</tr>";
    }

    $conn->close();
?>



<?php
    include 'db.php';

    $sql = "SELECT * FROM appointment";

    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
        
        if ($row['id'] == $_GET['id']) {
          // Update the form action and method so that the data is submitted correctly
          echo '<form id="Form_size" class="form-inline my-4" action="Appointment_Update.php" method="POST">';
        
          echo '<input type="hidden" name="id" value="'.$row['id'].'">';
        
          echo '<td><label class="ml-3" for="date"><b>Date:</b></label>';
          echo '<input type="text" name="date" id="Show_Date" class="form-control" value="'.$row['date'].'"></td>';

          echo '<td><label class="ml-3" for="time"><b>Time:</b></label>';
          echo '<input type="text" name="time" id="Show_Time" class="form-control" value="'.$row['time'].'"></td>';
        
          echo '<td>
                  <label class="ml-3" for="doctor"><b>Doctor:</b></label>
                  <select name="doctor" id="Show_Doctor" class="form-control">';
          if ($result1->num_rows > 0) {
            while ($row1 = $result1->fetch_assoc()) {
              $selected = ($row1['doctor_id'] === $row['doctor']) ? 'selected' : '';
              echo '<option value="'.$row1['doctor_id'].'" '.$selected.'>'.$row1['name'].' '.$row1['surname'].'</option>';
            }
          } else {
            echo '<option value="">No doctors found</option>';
          }
          echo '</select>
                </td>';
        
          echo '<td>
                  <label class="ml-3" for="patient"><b>Patient:</b></label>
                  <select name="patient" id="Show_Patient" class="form-control">';
          if ($result2->num_rows > 0) {    
            while ($row2 = $result2->fetch_assoc()) {
              $selected = ($row2['id'] === $row['patient']) ? 'selected' : '';
              echo '<option value="'.$row2['patient_id'].'" '.$selected.'>'.$row2['name'].' '.$row2['surname'].'</option>';
            }
          } else {
            echo '<option value="">No patients found</option>';
          }
          echo '</select>
                </td>';
        
          // Add a Save button to submit the form
          echo '<td><button type="submit" class="ml-3 btn btn-primary">Save</button></td>';
          echo '</form>';
        } else {
            echo "<tr>";
            echo "<td>".$row['date']."</td>";
            echo "<td>".$row['time']."</td>";
        
            $sqlD = "SELECT name, surname, doctor_id FROM doctor WHERE id = ".$row['doctor'];
            $resultD = $conn->query($sqlD);
            while ($rowD = $resultD->fetch_assoc()) {
                echo '<option name="doctor" value="' . $rowD['doctor_id'] . '"> ' . $rowD['name'] . ' ' . $rowD['surname'] . '</option>';
            }
        
            $sql2 = "SELECT name, surname FROM patients WHERE id = ".$row['patient'];
            $result2 = $conn->query($sql2);
            $patient = $result2->fetch_assoc();
        
            $sql3 = "SELECT name, surname FROM doctor WHERE id = ".$row['doctor'];
            $result3 = $conn->query($sql3);
            $doctor = $result3->fetch_assoc();
            
            echo "<td>".$doctor['name']." ".$doctor['surname']."</td>";
            echo "<td>".$patient['name']." ".$patient['surname']."</td>";
            echo '<td><a href="Appointment_Index.php?id='.$row['id'].'">Update</a></td>';
            echo '<td><a class="btn btn-danger" href="Appointment_Delete.php?id='.$row['id'].'" role="button">Delete</a></td>';
            echo "</tr>";
        }
        

        
        
    }

    $conn->close();
?>




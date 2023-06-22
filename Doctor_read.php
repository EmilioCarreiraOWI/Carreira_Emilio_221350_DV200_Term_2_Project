<?php
    include 'db.php';

    $sql = "SELECT * FROM doctor";

    $result = $conn->query($sql);
    

    while($row = $result->fetch_assoc()) {
        echo "<tr";
        if ($row['id'] == $_GET['id']) {
            echo '<form class="form-inline m-2" action="Doctor_Index.php" method="POST">';
            echo '<td><input type="text" class="form-control" value="'.$row['date'].'"></td>';
            echo '<td><input type="text" class="form-control" value="'.$row['time'].'"></td>';
            echo '<td><input type="text" class="form-control" value="'.$row['doctor'].'"></td>';
            echo '<td><input type="text" class="form-control" value="'.$row['patient'].'"></td>';
            echo '<td><button type="submit" class="btn btn-secondary">Save</botton></td>';
        }else {
            echo "<tb>" . $row['date'] . "</tb>";
            echo "<tb>" . $row['time'] . "</tb>";
            echo "<tb>" . $row['doctor'] . "</tb>";
            echo "<tb>" . $row['patient'] . "</tb>";
            echo '<td><a class="btn btn-primary" href="Doctor_Update.php?=id' . $row['id'] . '" role="botton">Update</a><td>';
        } 
        
        echo '<td><a class="btn btn-danger" href="Doctor_Delete.php?=id' . $row['id'] . '" role="botton">Delete</a><td>';
        echo "</tr>";
    }
        
    $conn->close();
?>


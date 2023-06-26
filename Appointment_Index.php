
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            margin-top: 5%;
            
            
        }

        form {
            border: 3px solid black;
            height: auto;
            width: 60%;
            margin-left: 20%;
            margin-right: 20%;
            background-color: rgba(106, 123, 139, 0.85);
        }
        #doctor, #patient {
            background-color: rgba(47, 65, 49, 0.75);
            color: white;
            margin-left: 20%;
            border: 1px solid whitesmoke;
            margin-bottom: 10px;
        }
        #time, #date  {
            background-color: rgba(47, 65, 49, 0.75);
            color: white;
            width: 80%;
            margin-left: 20%;
            border: 1px solid whitesmoke;
            margin-bottom: 10px;
            padding-top: 5px;
            padding-bottom: 5px;
            border-radius: 4px;
        }

        #heading  {
            margin-top: 6px;
            width: 70%;
            margin-left: 10%;
            margin-right: 15%;
            
        }
        h3 {
            text-align: center;
            margin-top: 10px;
            width: 70%;
            margin-left: 15%;
            margin-right: 15%;
        }
        #mainheading {
            width: 60%;
            margin-left: 20%;
            margin-right: 20%;
            background-color: rgba(17, 22, 19, 0.95);
            color: white;
        }
        #btn-primary {
            background-color: #2F4131;
            border-color: #2F4131;
            float: right;
            margin-right: 75px;
            
        }
        #btn-primary:hover {
            background-color: #202C22;
            border-color: #202C22;
        }
        #btn-danger {
            background-color: rgba(64, 87, 66, 0.65);
            border-color: #405742;
            
        }
        #btn-danger:hover {
            background-color: #2F4131;
            border-color: #2F4131;
        }
        #btns  {
            margin-top: 15px;
            padding-bottom: 10px;  
        }
        .successmessage {
            margin-top: 10px;
            width: 70%;
            margin-left: 15%;
            margin-right: 15%;
            text-align: center;
            color: #202C22;
        }
        #Form_size {
            justify-content: center;
            display: flex;
            width: 85%;
            margin-left: auto;
            margin-right: auto;
            height: auto;
            padding: 5px;
            background-color: rgba(106, 123, 139, 0.85);
        }
        #Form_align {
            height: auto;
            
            margin-left: 20px;
            background-color: rgba(106, 123, 139, 0.85);
        }
        #Show_Patient, #Show_Doctor, #Show_Time, #Show_Date {
            background-color: rgba(47, 65, 49, 0.75);
            color: white;
            margin-left: 20px;
            border: 1px solid whitesmoke;
            padding-top: 5px;
            padding-bottom: 5px;
            border-radius: 4px;
        }
        
    </style>
</head>
<body 
    style="
        background-image: url('https://gomohealth.com/wp-content/uploads/2019/08/gradient-background-healthcare-technology-01.png');
    "
>

        <?php   
                include 'navbar.php';
        ?>

        <?php
            include 'db.php';
        ?>
    

<!--ADD Appointment-->
    <div class="container">
        <div class="row">

        
           <div id="mainheading">
                <h3>Create Appointment</h3>
            </div>
            
            <form action="Appointment_Add.php" method="POST">
                <?php if (isset($_GET['success'])): ?>
                    <b><p class="successmessage"><?= $_GET['success'] ?></p></b>
                <?php endif ?>
            
                <div class="row">
                    <div class="col-md-6">
                        <!-- Doctor -->
                        <label class="col-sm-12" for="doctor"><b>Doctor:</b></label>
                        <select id="doctor" name="doctor" class="form-control">
                            <option value="">Select Doctor</option>
                            <?php
                                $sqlD = "SELECT name, surname, doctor_id FROM doctor ORDER BY surname ASC";
                                $resultD = $conn->query($sqlD);
                                while ($rowD = $resultD->fetch_assoc()):
                                    ?>
                                    <option value="<?= $rowD['doctor_id'] ?>"><?= $rowD['name'] ?> <?= $rowD['surname'] ?></option>
                                <?php endwhile ?>
                        </select>
            
                        <!-- Patient -->
                        <label class="col-sm-12" for="patient"><b>Patient:</b></label>
                        <select id="patient" name="patient" class="form-control">
                            <option value="">Select Patient</option>
                            <?php
                                $sqlP = "SELECT name, surname, patient_id FROM patients ORDER BY surname ASC";
                                $resultP = $conn->query($sqlP);
                                while ($rowP = $resultP->fetch_assoc()):
                                    ?>
                                    <option value="<?= $rowP['patient_id'] ?>"><?= $rowP['name'] ?> <?= $rowP['surname'] ?></option>
                                <?php endwhile ?>
                        </select>
                    </div>
            
                    <div class="col-md-5">
                        <!-- Date -->
                        <div class="col-sm-12">
                            <label class="col-sm-12" for="date"><b>Date:</b></label>
                            <input class="col-sm-12 form-control" type="date" id="date" name="date" min="<?= date('Y-m-d') ?>">
                        </div>
            
                        <!-- Time -->
                        <div class="col-sm-12">
                            <label class="col-sm-12" for="time"><b>Time:</b></label>
                            <input class="col-sm-12 form-control" type="time" id="time" name="time" max="20:00" min="08:00">
                        </div>
                    </div>
            
                    <!-- Buttons -->
                    <div id="btns" class="col-sm-12">
                        <button id="btn-primary" type="submit" class="btn-success col-sm-3" name="addAppointment">Add Appointment</button>
                    </div>
                </div>
            </form>
              
        </div>
    </div>

    <div id="">
       <?php
            include 'Appointment_Read.php';
        ?> 
    </div>
         
    
    
       
    
            
        
    

</body>
</html>

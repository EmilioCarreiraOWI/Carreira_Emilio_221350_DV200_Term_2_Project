<!DOCTYPE html>
<html>
<head>
    <title>PHP Navigation Bar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  <style>

  nav {
    background-color: #111613;
    border-bottom: 4px solid black;
  }
  img {
    height: 35px;
    width: auto;
    border-radius: 50%;
    border: 2px solid black;
  }


  </style>

</head>
<body>


    <nav class="my-company navbar navbar-expand-lg navbar-dark  fixed-top">
      <div id="mainName">
        <img src="https://static.vecteezy.com/system/resources/previews/000/565/402/original/hospital-logo-and-symbols-template-icons-vector.jpg" alt="">
        <a  class="navbar-brand" href="http://127.0.0.1/Emilio&Tsungai\receptionistIndex.php">Health Centre</a>
      </div>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                    <a class="nav-link" href="http://127.0.0.1/Emilio&Tsungai\AppointmentIndex.php">Appointment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://127.0.0.1/Emilio&Tsungai\receptionistIndex.php">Receptionist</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://127.0.0.1/Emilio&Tsungai\PatientIndex.php">Patient</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://127.0.0.1/Emilio&Tsungai\DoctorIndex.php">Doctor</a>
                </li>
            </ul>
        </div>
    </nav>




    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>